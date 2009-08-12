<?php
if (!defined('IN_PHPBB')) exit;
$expired = (time() > 1281627064) ? true : false;
if ($expired) { return; }

$data =  unserialize('a:5:{s:4:"name";s:9:"prosilver";s:9:"copyright";s:24:"&copy; phpBB Group, 2007";s:7:"version";s:5:"3.0.5";s:17:"template_bitfield";s:4:"lNg=";s:8:"filetime";i:1244390020;}');

?>