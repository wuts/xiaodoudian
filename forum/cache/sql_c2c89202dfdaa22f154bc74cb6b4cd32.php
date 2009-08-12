<?php
if (!defined('IN_PHPBB')) exit;

/* SELECT s.style_id, t.template_storedb, t.template_path, t.template_id, t.bbcode_bitfield, t.template_inherits_id, t.template_inherit_path, c.theme_path, c.theme_name, c.theme_storedb, c.theme_id, i.imageset_path, i.imageset_id, i.imageset_name FROM forum_styles s, forum_styles_template t, forum_styles_theme c, forum_styles_imageset i WHERE s.style_id = 3 AND t.template_id = s.template_id AND c.theme_id = s.theme_id AND i.imageset_id = s.imageset_id */

$expired = (time() > 1250094769) ? true : false;
if ($expired) { return; }

$this->sql_rowset[$query_id] = unserialize('a:1:{i:0;a:14:{s:8:"style_id";s:1:"3";s:16:"template_storedb";s:1:"0";s:13:"template_path";s:12:"phpbbchina01";s:11:"template_id";s:1:"3";s:15:"bbcode_bitfield";s:4:"+Ng=";s:20:"template_inherits_id";s:1:"0";s:21:"template_inherit_path";s:0:"";s:10:"theme_path";s:12:"phpbbchina01";s:10:"theme_name";s:12:"phpbbchina01";s:13:"theme_storedb";s:1:"0";s:8:"theme_id";s:1:"3";s:13:"imageset_path";s:12:"phpbbchina01";s:11:"imageset_id";s:1:"3";s:13:"imageset_name";s:12:"phpbbchina01";}}');

?>