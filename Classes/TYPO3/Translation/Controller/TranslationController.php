<?php
namespace TYPO3\Translation\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "TYPO3.Translation".     *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

/**
 * Translation controller for the TYPO3.Translation package 
 *
 * @Flow\Scope("singleton")
 */
class TranslationController extends \TYPO3\Flow\Mvc\Controller\ActionController {

	/**
	 * Index action
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('foos', array(
			'bar', 'baz'
		));
	}

}

?>