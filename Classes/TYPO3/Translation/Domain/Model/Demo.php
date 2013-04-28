<?php
namespace TYPO3\Translation\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "TYPO3.Translation".     *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * A Demo
 *
 * @Flow\Entity
 */
class Demo {

	/**
	 * 
	 * @var \TYPO3\Translation\Domain\Model\Translation
	 * @ORM\OneToOne
	 */
	protected $title;
	
	/**
	 * 
	 * @var \TYPO3\Translation\Domain\Model\Translation
	 * @ORM\OneToOne
	 */
	protected $text;
	
	public function __construct() {
		$this->title = new \TYPO3\Translation\Domain\Model\Translation();
		$this->text = new \TYPO3\Translation\Domain\Model\Translation();
	}
	
	/**
	 * 
	 * @param string $title
	 * @param string $language
	 * @return void;
	 */
	public function setTitle($title, $language = NULL) {
		$this->title->setTranslation($title, $language);
	}
	
	/**
	 * @param string $language
	 * @return \TYPO3\Translation\Translation
	 */
	public function getTitle($language = NULL) {
		return $this->title->getTranslation($language);
	}
	
	/**
	 * 
	 * @param string $text
	 * @param string $language
	 * @return void
	 */
	public function setText($text, $language = NULL) {
		$this->text->setTranslation($text, $language);
	}
	
	/**
	 * @param string $language
	 * @return \TYPO3\Translation\Translation
	 */
	public function getText($language = NULL) {
		return $this->text->getTranslation($language);
	}

}
?>