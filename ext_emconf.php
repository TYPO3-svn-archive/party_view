<?php

########################################################################
# Extension Manager/Repository config file for ext: "party_view"
#
# Auto generated 25-04-2007 08:50
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Party View',
	'description' => 'View for the party framework',
	'category' => 'plugin',
	'author' => 'Sven Kalbhenn',
	'author_email' => 'sven@skom.de',
	'shy' => '',
	'dependencies' => 'party',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.0.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.1-0.0.0',
			'php' => '5.0.0-0.0.0',
			'lib' => '0.0.20-',
			'div' => '0.0.9-',
			'static_info_tables' => '2.0.1-',
			'party' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:19:{s:9:"ChangeLog";s:4:"b6ce";s:10:"README.txt";s:4:"ee2d";s:10:"ce_wiz.gif";s:4:"02b6";s:12:"ext_icon.gif";s:4:"1bdc";s:14:"ext_tables.php";s:4:"4709";s:13:"locallang.xml";s:4:"ae76";s:16:"locallang_db.xml";s:4:"8681";s:51:"configurations/class.tx_partyview_configuration.php";s:4:"fe1b";s:45:"configurations/class.tx_partyview_wizicon.php";s:4:"3ff7";s:27:"configurations/flexform.xml";s:4:"fa28";s:24:"configurations/setup.txt";s:4:"56f8";s:56:"controllers/class.tx_partyview_controller_showPerson.php";s:4:"f18b";s:60:"controllers/class.tx_partyview_controller_showPersonList.php";s:4:"539c";s:19:"doc/wizard_form.dat";s:4:"3f00";s:20:"doc/wizard_form.html";s:4:"a660";s:22:"templates/listView.php";s:4:"0721";s:24:"templates/singleView.php";s:4:"0721";s:42:"views/class.tx_partyview_view_listView.php";s:4:"459e";s:44:"views/class.tx_partyview_view_singleView.php";s:4:"603c";}',
);

?>