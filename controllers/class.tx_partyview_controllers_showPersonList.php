<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2007 Sven Kalbhenn <sven@skom.de>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/




/**
 * Class that implements the controller for action showPersonList.
 *
 * @author	Sven Kalbhenn <sven@skom.de>
 * @package	TYPO3
 * @subpackage	tx_partyview
 */

//tx_div::load('tx_lib_controller');
tx_div::load('tx_partyview_controllers_common');

class tx_partyview_controllers_showPersonList extends tx_partyview_controllers_common {
	var $modelKey = 'tx_party_models_parties';
	var $viewClassName = 'tx_partyview_views_listView';
	var $templateKey = 'showPersonListTemplate';

/*
	function main() {
		echo t3lib_div::debug($model,'showPersonList');
		$model = tx_div::makeInstance('tx_party_models_parties');
		echo t3lib_div::debug($model,'showPersonList');
		//$model->setConfigurations($this->configurations);
		$model->loadByPid('1');
		echo t3lib_div::debug($model,'showPersonList');
		$resultList = $model->get('resultList');
		$view = tx_div::makeInstance('tx_partyview_views_listView');
		$view->set('entryList', $resultList);
		$view->setController($this);
		$view->setTemplatePath($this->configurations->get('templatePath'));
		return $view->render($this->configurations->get('listView.php'));
	}

*/
}


if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party_view/controllers/class.tx_partyview_controllers_showPersonList.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party_view/controllers/class.tx_partyview_controllers_showPersonList.php']);
}

?>