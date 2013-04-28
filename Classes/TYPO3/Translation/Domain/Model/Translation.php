<?php
namespace TYPO3\Translation\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "TYPO3.Translation".     *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * A Translation
 *
 * @Flow\Entity
 */
class Translation {


	/**
	 * Colollection for the translated texts
	 * 
	 * @var \Doctrine\Common\Collections\Collection<\TYPO3\Translation\Domain\Model\TranslationText>
	 */
	protected $texts;
	
	/**
	 * Standard language
	 * @var string
	 */
	protected $stdLanguage = NULL;

	/**
	 * Constructor
	 *  - initialises the ArrayCollection for the translated texts
	 */
	public function __construct() {
		$this->texts = new \Doctrine\Common\Collections\ArrayCollection();
	}

	/**
	 * Set a language specific text
	 * @param string $text
	 * @param string $language
	 * @return void
	 */
	public function setTranslation($text, $language = NULL) {
		if(NULL === $language) {
			$language = $this->getStdLanguage();
		}
		
		$this->texts->set($language, $text);
	}
	
	/**
	 * Return a language specific text
	 * @param string $language
	 * @return string
	 */
	public function getTranslation($language = NULL) {
		if(NULL === $language) {
			$language = $this->getStdLanguage();
		}
		
		return $this->texts->get($language);
	}
	
	/**
	 * Set the standard language
	 * @param string $language
	 * @return void
	 */
	public function setStdLanguage($language) {
		$this->stdLanguage = $language;
	}
	
	/**
	 * Return the standard language
	 * @return string
	 */
	public function getStdLanguage() {
		if (NULL === $this->stdLanguage) {
			//@todo refactor to set the language dynamically
			$this->setStdLanguage('de');
		}
		
		return $this->stdLanguage;
	}
	
	/**
	 * Override __toString to return the translation of a text
	 * @return string
	 */
	public function __toString() {
		return $this->getTranslation();
	}

}
?>