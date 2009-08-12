<?php
if (!defined('IN_PHPBB')) exit;
$expired = (time() > 1281627169) ? true : false;
if ($expired) { return; }

$data =  unserialize('a:4:{s:4:"name";s:12:"phpbbchina01";s:9:"copyright";s:27:"&copy; phpbbchina.com, 2009";s:7:"version";s:5:"3.0.5";s:8:"filetime";i:1244390080;}');

?>