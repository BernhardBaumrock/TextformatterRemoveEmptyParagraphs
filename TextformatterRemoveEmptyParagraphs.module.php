<?php namespace ProcessWire;
/**
 * Textformatter to remove empty paragraphs from CKE fields
 *
 * @author Bernhard Baumrock, 25.04.2020
 * @license Licensed under MIT
 * @link https://www.baumrock.com
 */
class TextformatterRemoveEmptyParagraphs extends Textformatter {
  public static function getModuleInfo() {
    return [
      'title' => 'RemoveEmptyParagraphs',
      'version' => '1.0.0',
      'summary' => 'Textformatter to remove empty paragraphs from CKE fields',
    ]; 
  }

  public function format(&$str) {
    $str = preg_replace('!<p[^>]*>([\xc2\xa0]*|\s| |<\/?\s?br[^>]*\/?>)*<\/?p>!', "", $str);
  }
}
