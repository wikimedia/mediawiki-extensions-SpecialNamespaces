<?php

namespace MediaWiki\Extension\SpecialNamespaces;

use MediaWiki\Hook\CanonicalNamespacesHook;
use MediaWiki\Installer\Hook\LoadExtensionSchemaUpdatesHook;
use MediaWiki\MediaWikiServices;
use Wikimedia\Rdbms\DBError;

class Hooks implements CanonicalNamespacesHook, LoadExtensionSchemaUpdatesHook {

	/**
	 * @inheritDoc
	 */
	public function onLoadExtensionSchemaUpdates( $updater ) {
		$type = $updater->getDB()->getType();
		$sourceFile = ( $type === 'postgres' ) ? '/namespace_names.pg.sql' : '/namespace_names.sql';
		$updater->addExtensionTable( 'namespace_names', dirname( __DIR__ ) . $sourceFile );
	}

	/**
	 * Retrieve list of canonical namespaces from database table 'namespace_names'
	 * Global namespace lists $wgExtraNamespaces[] and $wgNamespaceAliases[] are updated as needed
	 *
	 * This is a MediaWiki hook function, which uses the 'CanonicalNamespaces' hook in MW 1.17+
	 * Use of memcached (where available) is necessary to avoid severe performance penalty for multiple db accesses
	 *
	 * @param array &$namespaces the list of canonical namespaces retrieved from 'namespace_names' will be placed here
	 * @return bool true at all times (as a MediaWiki hook must always return a value)
	 */
	public function onCanonicalNamespaces( &$namespaces ) {
		global $wgExtraNamespaces, $wgNamespaceAliases;
		global $wgSitename, $wgMetaNamespace, $wgMetaNamespaceTalk;

		if ( $wgExtraNamespaces == null ) {
			$wgExtraNamespaces = [];
		}
		if ( $wgNamespaceAliases == null ) {
			$wgNamespaceAliases = [];
		}

		$cache = MediaWikiServices::getInstance()->getLocalServerObjectCache();
		$key = $cache->makeKey( 'SpecialNamespaces', 'names' );
		$cached = $cache->get( $key );

		if ( ( $cached == null ) || ( !is_array( $cached ) ) ) {

			// if namespaces are not in memcache, retrieve them from main database
			$dbr = MediaWikiServices::getInstance()->getDBLoadBalancer()->getConnection( DB_REPLICA );
			try {
				$res = $dbr->select( 'namespace_names', '*' );
			} catch ( DBError $e ) {
				// nasty hack to prevent the updater from breaking when it calls this hook
				if ( preg_match( "/Table '[^']*\bnamespace_names' doesn't exist/", $e->getMessage() ) ) {
					return;
				}
				throw $e;
			}
			foreach ( $res as $s ) {
				// for each namespace...
				$nsindex = htmlspecialchars( $s->ns_id );
				$nsname = htmlspecialchars( $s->ns_name );
				$nscanonical = htmlspecialchars( $s->ns_canonical );
				$nsdefault = htmlspecialchars( $s->ns_default );
				$nsname = str_replace( ' ', '_', $nsname );
				$nsname = str_replace( ':', '', $nsname );

				// add the namespace (or namespace alias) to global configuration variables
				if ( $nsdefault > 0 ) {
					$wgExtraNamespaces[$nsindex] = $nsname;
					if ( $nsindex == NS_PROJECT ) {
						$wgSitename = $nsname;
						$wgMetaNamespace = str_replace( ' ', '_', $nsname );
					}
					if ( $nsindex == NS_PROJECT_TALK ) {
						$wgMetaNamespaceTalk = str_replace( ' ', '_', $nsname );
					}
				} else {
					$wgNamespaceAliases[$nsname] = $nsindex;
				}

				// if canonical, add the namespace to list of canonical names in MW hook parameter
				if ( $nscanonical > 0 ) {
					$namespaces[$nsindex] = $nsname;
				}
			}

			// store this info to memcache for re-use on subsequent page loads
			$cache->set( $key, [
				'ns' => $namespaces,
				'ens' => $wgExtraNamespaces,
				'aka' => $wgNamespaceAliases,
				'site' => $wgSitename,
				'project' => $wgMetaNamespace,
				'prjtalk' => $wgMetaNamespaceTalk
			] );
		} else {
			// if data was retrieved from memcache, use it directly
			$namespaces = $cached['ns'];
			$wgExtraNamespaces = $cached['ens'];
			$wgNamespaceAliases = $cached['aka'];
			$wgSitename = $cached['site'];
			$wgMetaNamespace = $cached['project'];
			$wgMetaNamespaceTalk = $cached['prjtalk'];
		}
		return true;
	}
}
