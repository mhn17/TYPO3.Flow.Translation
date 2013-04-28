<?php
namespace TYPO3\Translation\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "TYPO3.Translation".     *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;

/**
 * Demo controller for the TYPO3.Translation package 
 *
 * @Flow\Scope("singleton")
 */
class DemoController extends \TYPO3\Flow\Mvc\Controller\ActionController {

	/**
	 * Index action
	 *
	 * @return void
	 */
	public function indexAction() {
		$demo = new \TYPO3\Translation\Domain\Model\Demo();
		
		// German
		$demo->setTitle('Titel');
		$demo->setText('Ein toller text zum Ausprobieren');
		
		// English
		$demo->setTitle('title','en');
	 	$demo->setText('A superb text for testing','en');
		
		echo $demo->getTitle() . '<br>' . $demo->getText() . '<br><hr><br>';
		echo $demo->getTitle('en') . '<br>' . $demo->getText('en') . '<br><hr><br>';
	}

}

?>