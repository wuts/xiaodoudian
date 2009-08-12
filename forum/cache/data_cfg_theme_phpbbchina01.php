<?php
if (!defined('IN_PHPBB')) exit;
$expired = (time() > 1281627169) ? true : false;
if ($expired) { return; }

$data =  unserialize('a:5:{s:4:"name";s:12:"phpbbchina01";s:9:"copyright";s:27:"&copy; phpbbchina.com, 2008";s:7:"version";s:5:"3.0.3";s:14:"parse_css_file";b:0;s:8:"filetime";i:1227636550;}');

?>