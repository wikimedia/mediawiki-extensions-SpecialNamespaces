<?php
/**
 * Internationalisation file for extension Namespaces.
 *
 * @addtogroup Extensions
 *
 */

$messages = array();

/** English (English)
 */
$messages['en'] = array(
	# general messages
	'namespaces'                => 'View and edit namespaces data',
	'namespaces-title-norights' => 'View namespaces data',
	'namespaces-desc'           => 'Adds a [[Special:Namespaces|special page]] to view and edit the namespaces table',
	'namespaces_intro'          => 'This is an overview of the namespaces table. Meanings of the data in the columns:',
	'namespaces_nsid'         => 'Number',
	'namespaces_nsid_intro'   => 'Namespace number (0-15 used internally within MediaWiki, odd numbers are talk namespaces)',
	'namespaces_nsname'            => 'Name',
	'namespaces_nsname_intro'      => 'Namespace name, used as a prefix: on wiki pages in this namespace.',
	'namespaces_default'          => 'Default',
	'namespaces_default_intro'    => 'This is the default name of this namespace in the local language, not an alias.',
	'namespaces_default_1_intro'  => 'Namespace is listed under this name in [[Special:Allpages]]',
	'namespaces_default_0_intro'  => 'Namespace is reachable under this name, but some other prefix exists as displayed default.',
	'namespaces_canonical'          => 'Canonical',
	'namespaces_canonical_intro'    => 'This is the default name of the namespace before translation.',
	'namespaces_canonical_1_intro'  => 'Yes. (Note that each numbered namespace has exactly one canonical name.)',
	'namespaces_canonical_0_intro'  => 'No.',
	'namespaces_intro_footer'   => 'See [http://www.mediawiki.org/wiki/Namespaces MediaWiki.org] for more information about [[mw:help:namespaces|namespaces]].',
	'namespaces_1'              => 'yes',
	'namespaces_0'              => 'no',
	'namespaces_error'          => 'The namespaces table is empty.',

        # modifying permitted
	'namespaces_edit'           => 'Edit',
	'namespaces_reasonfield'    => 'Reason',
	'namespaces_defaultreason'  => '',

	# deleting a prefix
	'namespaces_delquestion'    => 'Deleting "$1"',
	'namespaces_deleting'       => 'You are deleting namespace "$1".',
	'namespaces_deleted'        => 'Namespace "$1" was removed from the namespaces table.',
	'namespaces_delfailed'      => 'Namespace "$1" could not be removed from the namespaces table.',

	# adding a prefix
	'namespaces_addtext'        => 'Add a namespace',
	'namespaces_addintro'       => 'You are adding a new namespace. Remember that odd numbers are talk pages and the range 0-15 is reserved for default namespaces.',
	'namespaces_addbutton'      => 'Add',
	'namespaces_added'          => 'Namespace "$1" was added to the namespaces table.',
	'namespaces_addfailed'      => 'Namespace "$1" could not be added to the namespaces table.',
	'namespaces_defaultname'    => '',

	# editing a prefix
	'namespaces_edittext'       => 'Editing a namespace',
	'namespaces_editintro'      => 'You are editing a namespace.
Remember that this can break existing links.',
	'namespaces_edited'         => 'Namespace "$1" was modified in the namespaces table.',
	'namespaces_editerror'      => 'Namespace "$1" can not be modified in the namespaces table.
Possibly it does not exist.',
	'namespaces-badprefix' => 'Specified namespace "$1" contains invalid characters',

	# namespaces log
	'namespaces_logpagename'    => 'Namespaces table log',
	'namespaces_log_added'      => 'added "$2" ($3) (default: $4) (canonical: $5)',
	'namespaces_log_edited'     => 'modified "$2" : ($3) (default: $4) (canonical: $5)',
	'namespaces_log_deleted'    => 'removed "$2" from the namespaces',
	'namespaces_logpagetext'    => 'This is a log of changes to the [[Special:Namespaces|namespaces]].',
	'namespaces_logentry'       => '', # do not translate this message

	# rights
	'right-namespaces'          => 'Edit namespaces data',
	'action-namespaces' => 'change this namespace entry',
);

/** Message documentation (Message documentation)
 */
$messages['qqq'] = array(
	'namespaces' => 'This message is the title of the special page [[Special:Namespaces]].',
	'namespaces-title-norights' => 'Part of the namespaces extension. This message is the title of the special page [[Special:Namespaces]] when the user has no right to edit the namespaces data, so can only view them.',
	'namespaces-desc' => '-',
	'namespaces_intro' => 'Part of the namespaces extension. Shown as introductory text on [[Special:Namespaces]].',
	'namespaces_nsid' => 'Used on [[Special:Namespaces]] as a column header of the table.',
	'namespaces_nsid_intro' => 'Used on [[Special:Namespaces]] so as to explain the data in the {{msg-mw|namespaces_nsid}} column of the table. ',
	'namespaces_nsname' => 'Used on [[Special:Namespaces]] as a column header of the table.',
	'namespaces_nsname_intro' => 'Used on [[Special:Namespaces]] so as to explain the data in the {{msg-mw|namespaces_nsname}} column of the table.',
	'namespaces_default' => 'Used on [[Special:Namespaces]] as a column header.',
	'namespaces_default_intro' => 'Used on [[Special:Namespaces]] so as to explain the data in the {{msg-mw|namespaces_default}} column of the table.',
	'namespaces_default_0_intro' => 'Used on [[Special:Namespaces]] so as to descripe the meaning of the value 0 in the {{msg-mw|namespaces_default}} column of the table.',
	'namespaces_default_1_intro' => 'Used on [[Special:Namespaces]] so as to descripe the meaning of the value 1 in the {{msg-mw|namespaces_default}} column of the table.',
	'namespaces_canonical' => 'User in [[Special:Namespaces]] as table column header.',
	'namespaces_canonical_intro' => 'Used on [[Special:Namespaces]] so as to explain the data in the {{msg-mw|namespaces_canonical}} column of the table.',
	'namespaces_canonical_1_intro' => 'Used on [[Special:Namespaces]] so as to descripe the meaning of the value 1 in the {{msg-mw|namespaces_canonical}} column of the table.',
	'namespaces_canonical_0_intro' => 'Used on [[Special:Namespaces]] so as to describe the meaning of the value 0 in the {{msg-mw|namespaces_canonical}} column of the table.',
	'namespaces_intro_footer' => 'Part of the namespaces extension. Shown as last pice of the introductory text on [[Special:Namespaces]].
Parameter $1 contains the following (a link): [http://www.mediawiki.org/wiki/Namespaces MediaWiki.org]',
	'namespaces_1' => "''\\Yes'''-value to be inserted into the columns headed by {{msg-mw|namespaces_default}} and {{msg-mw|namespaces_canonical}}.

{{Identical|Yes}}",
	'namespaces_0' => "''\\No'''-value to be inserted into the columns headed by {{msg-mw|namespaces_default}} and {{msg-mw|namespaces_canonical}}.

{{Identical|No}}",
	'namespaces_error' => 'This message is shown when the Special:Namespaces page is empty.',
	'namespaces_edit' => 'For users allowed to edit the namespaces table via [[Special:Namespaces]], this text is shown as the column header above the edit buttons.

{{Identical|Edit}}',
	'namespaces_reasonfield' => '{{Identical|Reason}}',
	'namespaces_defaultreason' => 'This message is the default reason in the namespaces log (when adding or deleting a namespace).

{{Identical|No reason given}}',
	'namespaces_delquestion' => 'Parameter $1 is the namespace you are deleting.',
	'namespaces_deleting' => '-',
	'namespaces_addbutton' => 'This message is the text of the button to submit the namespace you are adding.

{{Identical|Add}}',
	'namespaces_editerror' => 'Error message when modifying a namespace has failed.',
	'namespaces_logpagename' => 'Part of the namespaces extension. This message is shown as page title on Special:Log/namespaces.',
	'namespaces_log_added' => 'Shows up in "Special:Log/namespaces" when someone has added a namespace. Leave parameters and text between brackets exactly as it is.',
	'namespaces_log_edited' => 'Shows up in "Special:Log/namespaces" when someone has modified a namespace. Leave parameters and text between brackets exactly as it is.',
	'namespaces_log_deleted' => 'Shows up in "Special:Log/namespaces" when someone removed a namespace.',
	'namespaces_logpagetext' => 'Part of the namespaces extension. Summary shown on Special:Log/namespaces.',
	'right-namespaces' => '{{doc-right}}',
	'action-namespaces' => '{{doc-action}}',
);

/** Danish (Dansk)
 */
$messages['da'] = array(
	'namespaces_1' => 'ja',
	'namespaces_0' => 'nej',
	'namespaces_reasonfield' => 'Begrundelse',
	'action-namespaces' => 'ændre dette namespace',
);

/** German (Deutsch)
 */
$messages['de'] = array(
	'namespaces' => 'Namespaces-Daten betrachten und bearbeiten',
	'namespaces-title-norights' => 'Namespaces-Daten betrachten',
	'namespaces-desc' => '[[Special:Namespaces|Spezialseite]] zur Pflege der Namespaces',
	'namespaces_intro' => 'Dies ist ein Überblick des Inhalts der Namespaces.
Die Daten in den einzelnen Spalten haben die folgende Bedeutung:',
	'namespaces_intro_footer' => 'Siehe [http://www.mediawiki.org/wiki/Namespaces MediaWiki.org], um weitere Informationen über die Namespaces.',
	'namespaces_1' => 'ja',
	'namespaces_0' => 'nein',
	'namespaces_error' => 'Die Namespaces-Tabelle ist leer.',
	'namespaces_edit' => 'Bearbeiten',
	'namespaces_reasonfield' => 'Grund',
	'namespaces_defaultreason' => 'kein Grund angegeben',
	'namespaces_delquestion' => 'Löscht „$1“',
	'namespaces_deleting' => 'Du bist dabei das namespace „$1“ zu löschen.',
	'namespaces_deleted' => '„$1“ wurde erfolgreich aus der namespaces entfernt.',
	'namespaces_delfailed' => '„$1“ konnte nicht aus der namespaces gelöscht werden.',
	'namespaces_addtext' => 'Ein namespace hinzufügen',
	'namespaces_addintro' => 'Du fügst ein neues namespace hinzu. Beachte, dass es kein Leerzeichen ( ), Kaufmännisches Und (&), Gleichheitszeichen (=) und keinen Doppelpunkt (:) enthalten darf.',
	'namespaces_addbutton' => 'Hinzufügen',
	'namespaces_added' => '„$1“ wurde erfolgreich der namespaces hinzugefügt.',
	'namespaces_addfailed' => '„$1“ konnte nicht der namespaces hinzugefügt werden.',
	'namespaces_edittext' => 'Namespaces bearbeiten',
	'namespaces_logpagename' => 'Namespaces-Logbuch',
	'namespaces_log_added' => 'hat „$2“ ($3) (canonical: $4) (lokal: $5) der namespaces hinzugefügt',
	'namespaces_log_edited' => 'veränderte Präfix „$2“: ($3) (canonical: $4) (lokal: $5) in der namespaces',
	'namespaces_log_deleted' => 'hat „$2“ aus der namespaces entfernt',
	'namespaces_logpagetext' => 'In diesem Logbuch werden Änderungen an der [[Special:Namespaces|Namespaces]] protokolliert.',
	'right-namespaces' => 'Namespaces bearbeiten',
	'action-namespaces' => 'Diesen Namespaces-Eintrag ändern',
);

 /* Greek
 */
$messages['el'] = array(
	'namespaces_1' => 'ναι',
	'namespaces_0' => 'όχι',
	'namespaces_edit' => 'Επεξεργασία',
	'namespaces_reasonfield' => 'Λόγος',
	'namespaces_defaultreason' => 'Δεν δίνετε λόγος',
	'namespaces_delquestion' => 'Διαγραφή του "$1"',
	'namespaces_addbutton' => 'Προσθήκη',
);

/** Esperanto (Esperanto)
 */
$messages['eo'] = array(
	'namespaces_1' => 'jes',
	'namespaces_0' => 'ne',
	'namespaces_edit' => 'Redakti',
	'namespaces_reasonfield' => 'Kialo',
	'namespaces_defaultreason' => 'nenia kialo skribata',
	'namespaces_delquestion' => 'Forigante "$1"',
	'namespaces_deleting' => 'Vi forigas "$1".',
	'namespaces_addbutton' => 'Aldoni',
);

/** Spanish (Español)
 */
$messages['es'] = array(
	'namespaces' => 'Ver y editar namespaces',
	'namespaces-title-norights' => 'Ver datos de namespaces',
	'namespaces-desc' => 'Añade una [[Special:Namespaces|página especial]] para ver y editar namespaces',
	'namespaces_intro' => 'Esta es una visión general de namespaces. Los significados de los datos en las columnas:',
	'namespaces_1' => 'Sí',
	'namespaces_0' => 'no',
	'namespaces_error' => 'La tabla de namespaces está vacía.',
	'namespaces_edit' => 'Editar',
	'namespaces_reasonfield' => 'Motivo',
	'namespaces_defaultreason' => 'no se da ninguna razón',
	'namespaces_delquestion' => 'Borrando «$1»',
	'namespaces_deleting' => 'Estás borrando el prefijo «$1».',
	'namespaces_deleted' => 'El «$1» ha sido borrado correctamente de namespaces.',
	'namespaces_delfailed' => 'El «$1» no puede ser borrado de namespaces.',
	'namespaces_addtext' => 'Añadir un namespace',
	'namespaces_addintro' => "Estás añadiendo un nuevo namespace.",
	'namespaces_addbutton' => 'Agregar',
	'namespaces_added' => 'El «$1» ha sido añadido correctamente a la tabla de namespaces.',
	'namespaces_addfailed' => 'El «$1» no se puede añadir a la tabla de namespaces.',
	'namespaces_edittext' => 'Editando un namespace',
	'namespaces_editintro' => 'Estás editando un namespace.  Recuerda que esto puede romper enlaces existentes.',
	'namespaces_edited' => 'El «$1» ha sido modificado correctamente en la tabla de namespaces.',
	'namespaces_editerror' => 'El «$1» no puede ser modificado en la tabla de namespaces. Posiblemente no exista.',
	'namespaces-badprefix' => 'El namespace «$1» contiene caracteres no válidos',
	'namespaces_logpagename' => 'Tabla de registro de namespaces',
	'namespaces_log_added' => 'añadido el prefijo «$2» ($3) (canonical: $4) (default: $5) a la tabla de namespaces.',
	'namespaces_log_edited' => 'modificado el prefijo «$2» : ($3) (canonical: $4) (default: $5) en la tabla de namespaces',
	'namespaces_log_deleted' => 'eliminado el prefijo «$2» de la tabla de namespaces',
	'right-namespaces' => 'Editar datos de namespaces',
	'action-namespaces' => 'cambiar esta entrada namespaces',
);

/** Estonian (Eesti)
 */
$messages['et'] = array(
	'namespaces_1' => 'jah',
	'namespaces_0' => 'ei',
	'namespaces_edit' => 'Redigeeri',
	'namespaces_reasonfield' => 'Põhjus',
	'namespaces_defaultreason' => 'põhjendust ei ole kirja pandud',
);

/** Basque (Euskara)
 */
$messages['eu'] = array(
	'namespaces_1' => 'bai',
	'namespaces_0' => 'ez',
	'namespaces_reasonfield' => 'Arrazoia',
	'namespaces_defaultreason' => 'ez da arrazoirik eman',
	'namespaces_addbutton' => 'Erantsi',
	'namespaces_edittext' => 'Namespaces aurrizkia editatzen',
);

/** Finnish (Suomi)
 */
$messages['fi'] = array(
	'namespaces_1' => 'kyllä',
	'namespaces_0' => 'ei',
	'namespaces_error' => 'Virhe: Namespaces-taulu on tyhjä tai jokin muu meni pieleen.',
	'namespaces_edit' => 'Muokkaa',
	'namespaces_reasonfield' => 'Syy',
	'namespaces_defaultreason' => 'ei annettua syytä',
	'namespaces_addbutton' => 'Lisää',
	'namespaces_edittext' => 'Muokataan namespaces',
	'namespaces_edited' => 'Etuliitettä ”$1” muokattiin onnistuneesti namespaces.',
	'namespaces_editerror' => 'Etuliitettä ”$1” ei voi muokata namespaces.',
	'namespaces_logpagename' => 'Namespacestaululoki',
	'namespaces_logpagetext' => 'Tämä on loki muutoksista [[Special:Namespaces|namespaces]].',
	'right-namespaces' => 'Muokata namespaces',
	'action-namespaces' => 'muokata tätä namespaces',
);

/** French (Français)
 */
$messages['fr'] = array(
	'namespaces' => 'Voir et manipuler les données d\'espace nominal (namespaces)',
	'namespaces-title-norights' => 'Voir les données d\'espace nominal (namespaces)',
	'namespaces-desc' => 'Ajoute une [[Special:Namespaces|page spéciale]] pour voir et manipuler les « namespaces »',
	'namespaces_intro' => 'Voici les significations des données:',
	'namespaces_nsid' => 'Numéro',
	'namespaces_nsid_intro' => 'Numéro d\'espace nominal à utiliser internement dans la base de données du wiki.',
	'namespaces_nsname' => 'Nom',
	'namespaces_nsname_intro' => 'Nom d\'espace nominal, comme préfixe: qui apparait au <i>nom de la page</i> wiki.',
	'namespaces_default' => 'Défaut',
	'namespaces_default_intro' => 'Ce nom sera:',
	'namespaces_default_0_intro' => 'utilisé uniquement comme un alias, mais pas affiché aux pages mêmes ou [[Special:Allpages]]',
	'namespaces_default_1_intro' => 'utilisé comme préfixe du titres affichés aux pages du wiki',
	'namespaces_canonical' => 'Canonical',
	'namespaces_canonical_intro' => 'Pas utilisé',
	'namespaces_canonical_1_intro' => '',
	'namespaces_canonical_0_intro' => '',
	'namespaces_intro_footer' => 'Voyez [[mw:Help:Namespaces|Namespaces]] et [[mw:Manual:Namespace|instructions aux administrateurs]] chez [http://www.mediawiki.org/wiki/Namespaces MediaWiki.org] pour plus d\'informations.',
	'namespaces_1' => 'oui',
	'namespaces_0' => 'non',
	'namespaces_error' => 'La table des namespaces est vide.',
	'namespaces_edit' => 'Modifier',
	'namespaces_reasonfield' => 'Motif',
	'namespaces_defaultreason' => '', # 'Aucun motif donné'
	'namespaces_delquestion' => 'Suppression de « $1 »',
	'namespaces_deleting' => 'Vous effacez présentement l\'espace nominal « $1 ».',
	'namespaces_deleted' => '« $1 » a été enlevé avec succès des « namespaces ».',
	'namespaces_delfailed' => '« $1 » n\'a pas pu être enlevé des « namespaces ».',
	'namespaces_addtext' => 'Ajouter un namespace',
	'namespaces_addintro' => 'Vous êtes en train d\'ajouter un namespace.',
	'namespaces_addbutton' => 'Ajouter',
	'namespaces_added' => '« $1 » a été ajouté comme namespace.',
	'namespaces_addfailed' => '« $1 » n\'a pas pu être ajouté comme namespace.',
	'namespaces_edittext' => 'Modifier un namespace',
	'namespaces_editintro' => 'Vous modifiez un namespace. Rappelez-vous que cela peut casser des liens existants.',
	'namespaces_edited' => 'Le namespace « $1 » a été modifié avec succès.',
	'namespaces_editerror' => '« $1 » ne peut pas être modifié. Il se peut qu\'il n\'existe pas.',
	'namespaces_badprefix' => 'Le préfixe namespaces spécifié « $1 » contient des caractères invalides',
	'namespaces_logpagename' => 'Journal des namespaces',
	'namespaces_log_added' => 'a ajouté « $2 » ($3) (canonical: $4) (défaut: $5)',
	'namespaces_log_edited' => 'a modifié « $2 » : ($3) (canonical: $4) (défaut: $5)',
	'namespaces_log_deleted' => 'a supprimé « $2 » des namespaces',
	'namespaces_logpagetext' => 'Ceci est le journal des changements des [[Special:Namespaces|namespaces]].',
	'right-namespaces' => 'Modifier les données namespaces',
	'action-namespaces' => 'modifier cet espace nominal namespace',
);

/** Croatian (Hrvatski)
 */
$messages['hr'] = array(
	'namespaces' => 'Vidi i uredi namespaces',
	'namespaces-title-norights' => 'Gledanje namespaces',
	'namespaces-desc' => 'Dodaje [[Special:Namespaces|posebnu stranicu]] za gledanje i uređivanje namespaces',
	'namespaces_error' => 'Namespaces tablica je prazna.',
	'namespaces_reasonfield' => 'Razlog',
	'namespaces_defaultreason' => 'nema razloga',
	'namespaces_addbutton' => 'Dodaj',
);

/** Italian (Italiano)
 */
$messages['it'] = array(
	'namespaces_1' => 'si',
	'namespaces_0' => 'no',
	'namespaces_error' => "La tabella degli namespaces è vuota.",
	'namespaces_edit' => 'Modifica',
	'namespaces_reasonfield' => 'Motivo',
	'namespaces_defaultreason' => 'nessuna motivazione indicata',
	'namespaces_delquestion' => 'Cancello "$1"',
	'namespaces_deleting' => 'Stai cancellando il "$1"',
	'namespaces_deleted' => 'Il "$1" è stato cancellato con successo dalla tabella degli namespaces.',
	'namespaces_delfailed' => 'Rimozione del "$1" dalla tabella degli namespaces fallita.',
	'namespaces_addtext' => 'Aggiungi un namespace',
	'namespaces_addintro' => 'Sta per essere aggiunto un nuovo namespace.',
	'namespaces_addbutton' => 'Aggiungi',
	'namespaces_edittext' => 'Modifica di namespaces',
	'namespaces_edited' => 'Il "$1" è stato modificato.',
	'namespaces_logpagename' => 'Registro tabella namespaces',
	'namespaces_log_added' => 'ha aggiunto "$2" ($3) (canonical: $4) (default: $5) alla namespaces',
	'namespaces_log_edited' => 'ha modificato "$2" : ($3) (canonical: $4) (default: $5) nella namespaces',
	'namespaces_log_deleted' => 'ha rimosso "$2" dalla namespaces',
	'namespaces_logpagetext' => 'Registro dei cambiamenti apportati alla [[Special:Namespaces|namespaces]].',
	'right-namespaces' => 'Modifica i dati namespaces',
	'action-namespaces' => 'modificare questo namespaces',
);

/** Latin (Latina)
 */
$messages['la'] = array(
	'namespaces_error' => 'Tabula est vacua.',
	'namespaces_reasonfield' => 'Causa',
	'namespaces_defaultreason' => 'nulla causa data',
	'namespaces_delquestion' => 'Removens "$1"',
	'namespaces_deleting' => 'Delens "$1".',
	'namespaces_addbutton' => 'Addere',
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬)
 */
$messages['no'] = array(
	'namespaces' => 'Vis og manipuler namespaces',
	'namespaces-title-norights' => 'Vis namespaces',
	'namespaces-desc' => 'Legger til en [[Special:Namespaces|spesialside]] som gjør at man kan se og redigere namespaces.',
	'namespaces_intro' => 'Dette er en oversikt over namespaces. Betydningene til dataene i kolonnene:',
	'namespaces_1' => 'ja',
	'namespaces_0' => 'nei',
	'namespaces_error' => 'Namespacestabellen er tom.',
	'namespaces_reasonfield' => 'Årsak',
	'namespaces_defaultreason' => 'ingen grunn gitt',
	'namespaces_delquestion' => 'Sletter «$1»',
	'namespaces_deleting' => 'Du sletter prefikset «$1».',
	'namespaces_deleted' => 'Prefikset «$1» ble fjernet fra namespaces.',
	'namespaces_delfailed' => 'Prefikset «$1» kunne ikke fjernes fra namespaces.',
	'namespaces_addtext' => 'Legg til et namespace.',
	'namespaces_addintro' => 'Du legger til et nytt namespace.',
	'namespaces_addbutton' => 'Legg til',
	'namespaces_added' => 'Prefikset «$1» ble lagt til i namespaces.',
	'namespaces_addfailed' => 'Prefikset «$1» kunne ikke legges til i namespacestabellen. Det er kanskje brukt der fra før.',
	'namespaces_edittext' => 'Redigerer et namespacesprefiks',
	'namespaces_editintro' => 'Du redigerer et namespacesprefiks. Merk at dette kan ødelegge eksisterende lenker.',
	'namespaces_edited' => 'Prefikset «$1» ble endret i namespacestabellen.',
	'namespaces_editerror' => 'Prefikset «$1» kan ikke endres i namespaces.',
	'namespaces_logpagename' => 'Namespacestabellogg',
	'namespaces_log_added' => 'La til «$2» ($3) (canonical: $4) (default: $5) til namespaces',
	'namespaces_log_edited' => 'endret prefikset «$2»: ($3) (canonical: $4) (default: $5) i namespaces',
	'namespaces_log_deleted' => 'Fjernet prefikset «$2» fra namespaces',
	'namespaces_logpagetext' => 'Dette er en logg over endringer i [[Special:Namespaces|namespaces]].',
	'right-namespaces' => 'Redigere namespacesdata',
);

/** Portuguese (Português do Brasil)
 */
$messages['pt'] = array(
	'namespaces' => 'Ver e editar dados de namespaces',
	'namespaces-title-norights' => 'Ver dados namespaces',
	'namespaces-desc' => 'Adiciona uma [[Special:Namespaces|página especial]] para visualizar e editar namespaces',
	'namespaces_intro' => 'Isto é um resumo da tabela de namespaces. Significado dos dados nas colunas:',
	'namespaces_intro_footer' => 'Veja [http://www.mediawiki.org/wiki/Namespaces MediaWiki.org] para mais informações sobre namespaces.',
	'namespaces_1' => 'sim',
	'namespaces_0' => 'não',
	'namespaces_error' => 'A tabela de namespaces está vazia.',
	'namespaces_edit' => 'Editar',
	'namespaces_reasonfield' => 'Motivo',
	'namespaces_defaultreason' => 'sem motivo especificado',
	'namespaces_delquestion' => 'Apagando "$1"',
	'namespaces_deleting' => 'Você está apagando o "$1".',
	'namespaces_deleted' => 'O "$1" foi removido da namespaces.',
	'namespaces_delfailed' => 'O "$1" não pôde ser removido da namespaces.',
	'namespaces_addtext' => 'Adicionar um namespace',
	'namespaces_addintro' => 'Você se encontra prestes a adicionar um novo namespace.',
	'namespaces_addbutton' => 'Adicionar',
	'namespaces_added' => '"$1" foi adicionado à tabela de namespaces com sucesso.',
	'namespaces_addfailed' => '"$1" não pôde ser adicionado à tabela de namespaces.',
	'namespaces_edittext' => 'Editando um namespace',
	'namespaces_editintro' => 'Você está editando um namespace. Lembre-se de que isto pode quebrar ligações existentes.',
	'namespaces_edited' => '"$1" foi modificado na tabela de namespaces com sucesso.',
	'namespaces_editerror' => '"$1" não pode ser modificado na tabela de namespaces. Possivelmente, não existe.',
	'namespaces-badprefix' => 'Namespace "$1" contém caracteres inválidos',
	'namespaces_logpagename' => 'Registro da tabela de namespaces',
	'namespaces_log_added' => 'adicionado "$2" ($3) (canonical: $4) (default: $5) à tabela de namespaces',
	'namespaces_log_edited' => 'modificado o prefixo "$2": ($3) (canonical: $4) (default: $5) na tabela de namespaces',
	'namespaces_log_deleted' => 'removido o prefixo "$2" da tabela de namespaces',
	'namespaces_logpagetext' => 'Este é um registro das alterações [[Special:Namespaces|de namespaces]].',
	'right-namespaces' => 'Editar dados de namespaces',
	'action-namespaces' => 'alterar esta entrada namespaces',
);

/** Romanian (Română)
 */
$messages['ro'] = array(
	'namespaces_1' => 'da',
	'namespaces_0' => 'nu',
	'namespaces_edit' => 'Modificare',
	'namespaces_reasonfield' => 'Motiv',
	'namespaces_defaultreason' => 'nici un motiv oferit',
	'namespaces_delquestion' => 'Ştergere "$1"',
	'namespaces_addbutton' => 'Adaugă',
);

/** Russian (Русский)
 */
$messages['ru'] = array(
	'namespaces_1' => 'да',
	'namespaces_0' => 'нет',
	'namespaces_edit' => 'Править',
	'namespaces_reasonfield' => 'Причина',
	'namespaces_defaultreason' => 'причина не указана',
);

/* Chinese (Simplified)
 */
$messages['zh-hans'] = array(
	'namespaces_1' => '是',
	'namespaces_0' => '否',
	'namespaces_reasonfield' => '原因',
	'namespaces_addbutton' => '加入',
);

/** Traditional Chinese (‪中文(繁體)‬)
 */
$messages['zh-hant'] = array(
	'namespaces_1' => '是',
	'namespaces_0' => '否',
	'namespaces_reasonfield' => '原因',
	'namespaces_addbutton' => '加入',
);

