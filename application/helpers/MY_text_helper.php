<?php if (!defined('BASEPATH')) exit('No direct script access allowed.');

/**
 * CodeIgniter Text Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		Rick Ellis
 * @link		http://www.codeigniter.com/user_guide/helpers/text_helper.html
 */

// ------------------------------------------------------------------------

function nl2p($str)
{
  return str_replace('<p></p>', '', '<p>'
        . nl2br(preg_replace('#([\r\n]\s*?[\r\n]){2,}#', '</p>$0<p>', $str))
        . '</p>');
}

function get_image_from_text(&$content){
    $retimg="";
    $matches=null;
    preg_match("/<\s*img\s+[^>]*?src\s*=\s*(\'|\")(.*?)\\1[^>]*?\/?\s*>/i", $content, $matches);
    if(isset($matches[2])){
                $retimg=$matches[2];
                unset($matches);
                return $retimg;
        }
         unset($matches);
        $matches=null;
        preg_match("/<\s*img\s+[^>]*?src\s*=\s*(.*?)[\s\"\'>][^>]*?\/?\s*>/i", $content, $matches);
        if(isset($matches[1])){
                $retimg=$matches[1];
        }
        unset($matches);
        return $retimg;
}

?>