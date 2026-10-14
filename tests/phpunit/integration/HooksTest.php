<?php

namespace MediaWiki\Extension\SpecialNamespaces\Tests;

use GlobalVarConfig;
use HashBagOStuff;
use MediaWikiIntegrationTestCase;
use Wikimedia\Rdbms\ILoadBalancer;

/**
 * @covers \MediaWiki\Extension\SpecialNamespaces\Hooks::onCanonicalNamespaces
 */
class HooksTest extends MediaWikiIntegrationTestCase {
	private const CONFIG = [
		'ExtraNamespaces' => [ 100 => 'Configured', 101 => 'Configured_talk' ],
		'NamespaceAliases' => [ 'Configured_alias' => 100 ],
		'Sitename' => 'ConfiguredWiki',
		'MetaNamespace' => 'ConfiguredWiki',
		'MetaNamespaceTalk' => 'ConfiguredWiki_talk',
	];

	private const CACHED_NAMESPACES = [
		'ns' => [ NS_MAIN => '', NS_USER => 'User', 100 => 'Cached', 101 => 'Cached_talk' ],
		'ens' => [ 100 => 'Cached', 101 => 'Cached_talk' ],
		'aka' => [ 'Cached_alias' => 100 ],
		'site' => 'CachedWiki',
		'project' => 'CachedWiki',
		'prjtalk' => 'CachedWiki_talk',
	];

	/**
	 * @dataProvider provideNamespaceCache
	 */
	public function testCanonicalNamespacesWithoutStorage( $cached ) {
		$this->overrideConfigValues( self::CONFIG );

		$services = $this->getServiceContainer();
		// Older MediaWiki versions do not disable storage automatically for these tests.
		$services->disableStorage();
		$this->assertTrue( $services->isStorageDisabled() );
		$cache = $services->getLocalServerObjectCache();
		$cache->set( $cache->makeKey( 'SpecialNamespaces', 'names' ), $cached );

		$namespaces = $services->getNamespaceInfo()->getCanonicalNamespaces();
		$this->assertConfiguredNamespaces( $namespaces );
	}

	public function testCanonicalNamespacesBeforeAndAfterDisablingStorage() {
		// The test framework starts with storage disabled; create an enabled container.
		$this->overrideMwServices();
		$this->overrideConfigValues( self::CONFIG );
		$cache = new HashBagOStuff();
		$this->setService( 'LocalServerObjectCache', $cache );
		$loadBalancer = $this->createMock( ILoadBalancer::class );
		$loadBalancer->expects( $this->never() )->method( 'getConnection' );
		$this->setService( 'DBLoadBalancer', $loadBalancer );
		$services = $this->getServiceContainer();
		$key = $cache->makeKey( 'SpecialNamespaces', 'names' );
		$cache->set( $key, self::CACHED_NAMESPACES );

		$this->assertFalse( $services->isStorageDisabled() );
		$this->assertSame(
			self::CACHED_NAMESPACES['ns'],
			$services->getNamespaceInfo()->getCanonicalNamespaces()
		);
		$globalConfig = new GlobalVarConfig();
		foreach ( [
			'ExtraNamespaces' => self::CACHED_NAMESPACES['ens'],
			'NamespaceAliases' => self::CACHED_NAMESPACES['aka'],
			'Sitename' => self::CACHED_NAMESPACES['site'],
			'MetaNamespace' => self::CACHED_NAMESPACES['project'],
			'MetaNamespaceTalk' => self::CACHED_NAMESPACES['prjtalk'],
		] as $keyName => $value ) {
			$this->assertSame( $value, $globalConfig->get( $keyName ) );
		}

		$services->disableStorage();
		// Restore the same input configuration and rebuild NamespaceInfo for a fresh hook call.
		$this->overrideConfigValues( self::CONFIG );
		$this->assertTrue( $services->isStorageDisabled() );
		$this->assertSame( $cache, $services->getLocalServerObjectCache() );
		$this->assertSame( self::CACHED_NAMESPACES, $cache->get( $key ) );
		$this->assertConfiguredNamespaces( $services->getNamespaceInfo()->getCanonicalNamespaces() );
	}

	public static function provideNamespaceCache() {
		return [
			'empty cache' => [ false ],
			'populated cache' => [ self::CACHED_NAMESPACES ],
		];
	}

	private function assertConfiguredNamespaces( array $namespaces ): void {
		$this->assertSame( '', $namespaces[NS_MAIN] );
		$this->assertSame( 'User', $namespaces[NS_USER] );
		$this->assertSame( 'Configured', $namespaces[100] );
		$this->assertSame( 'Configured_talk', $namespaces[101] );
		$globalConfig = new GlobalVarConfig();
		foreach ( self::CONFIG as $key => $value ) {
			$this->assertSame( $value, $globalConfig->get( $key ) );
		}
	}
}
