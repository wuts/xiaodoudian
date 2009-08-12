<?php
if (!defined('IN_PHPBB')) exit;
$expired = (time() > 1281627175) ? true : false;
if ($expired) { return; }

$data =  unserialize('a:5:{s:4:"name";s:10:"subsilver2";s:9:"copyright";s:24:"&copy; phpBB Group, 2003";s:7:"version";s:5:"3.0.5";s:14:"parse_css_file";b:0;s:8:"filetime";i:1244390020;}');

?>