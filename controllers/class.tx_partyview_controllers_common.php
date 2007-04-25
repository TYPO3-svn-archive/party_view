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

tx_div::load('tx_lib_controller');
require_once (t3lib_extMgm::extPath('party').'models/class.tx_party_models_parties.php');
tx_div::load('tx_party_models_parties');

class tx_partyview_controllers_common extends tx_lib_controller{
	var $defaultAction = 'clear';
	var $modelKey;
	var $templateKey;
	var $templatePathKey = 'phpTemplatePath';
	var $keyOfPathToLanguageFile = 'pathToLanguageFile';
	var $viewClassName;
	var $entryListViewClassName = 'tx_lib_phpTemplateEngine';
	var $entryViewClassName;
	var $translatorClassName = 'tx_lib_translator';

	public function clearAction() {
		$this->parameters->clear();
		return $this->_compose();
	}

	public function filterAction() {
		return $this->_compose();
	}

	private function _compose() {
		// check settings
		if(!$this->modelKey) {
			die('Please set the class variable modelKey in the controller ' . $this->getClassName());
		}
		if(!$this->templateKey) {
			die('Please set the class variable templateKey in the controller '.$this->getClassName());
		}
		if(!$this->viewClassName) {
			die('Please set the class variable viewClassName in the controller '.$this->getClassName());
		}

		// finding classnames

		$modelClassName = tx_div::makeInstanceClassName($this->modelKey);
		$templateEngineClassName = tx_div::makeInstanceClassName($this->viewClassName);
		$translatorClassName = tx_div::makeInstanceClassName($this->translatorClassName);

		// the chain
		echo t3lib_div::debug($modelClassName,'modelClassName');
		$model = new $modelClassName($this);
		if(!($model instanceof tx_party_models_parties)){
			die('The parties-class couldn\'t be loaded correctly!'.$this->getClassName());
		}
		if (!method_exists($model,'loadByCountry')) {
			die('Couldn\'t find method loadByPid!'.$this->getClassName());
		}
		//echo t3lib_div::debug($model,'model');
		//$resultList = $model->loadByPid('1');
		$resultList = $model->loadByCountry(220);
		echo t3lib_div::debug($resultList,'resultList');
		/*
		$resultList = $model->get('resultList');
		$entryList = new $entryListClassName($this);
		for($resultList->rewind(); $resultList->valid(); $resultList->next()) {
			$highlighted = new $highlightingFilterClassName($this, $resultList->current());
			$highlighted->setPattern($this->getParameter('searchString'));
			$entry = new $entryClassName($this,$highlighted);
			$entryList->append($entry);
		}
		$templateEngine = new $templateEngineClassName($this);
		$templateEngine->set('showPersonList', $entryList);
		$templateEngine->setTemplatePath($this->getConfiguration($this->templatePathKey));
		$templateEngine->render($this->getConfiguration($this->templateKey));
		*/
		$translator = new $translatorClassName($templateEngine, $this);
		$translator->setPathToLanguageFile($this->getConfiguration($this->keyOfPathToLanguageFile));
		return $translator->translateContent();
	}

}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party_view/controllers/class.tx_partyview_controllers_common.php']) {
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/party_view/controllers/class.tx_partyview_controllers_common.php']);
}
?>
