<?php
namespace TYPO3\Translation\Domain\Model;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "TYPO3.Translation".     *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use Doctrine\ORM\Mapping as ORM;

/**
 * A Translation text
 *
 * @Flow\Entity
 */
class TranslationText {
	
	/**
	 * 
	 * @var \TYPO3\Translation\Domain\Model\Translation
	 * @ORM\ManyToOne(inversedBy="texts")
	 */
	protected $translation;
	/**
	 * 
	 * @var string
	 */
	protected $text;
	
	/**
	 * 
	 * @param string $text
	 * @return void
	 */
	public function setText($text) {
		$this->text = $text;
	}
	
	/**
	 * 
	 * @return string
	 */
	public function getText() {
		return $this->text;
	}
}
?>