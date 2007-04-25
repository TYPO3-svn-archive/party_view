<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

t3lib_div::loadTCA('tt_content');
$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY]='layout,select_key,pages,recursive';
$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY]='pi_flexform';


t3lib_extMgm::addStaticFile('party_view', './configurations', 'Party View');


t3lib_extMgm::addPiFlexFormValue($_EXTKEY, 'FILE:EXT:party_view/configurations/flexform.xml');


t3lib_extMgm::addPlugin(array('LLL:EXT:party_view/locallang_db.xml:tt_content.list_type_pi1', $_EXTKEY),'list_type');


if (TYPO3_MODE=="BE")	$TBE_MODULES_EXT["xMOD_db_new_content_el"]["addElClasses"]["tx_partyview_wizicon"] = t3lib_extMgm::extPath($_EXTKEY).'configurations/class.tx_partyview_wizicon.php';
?>