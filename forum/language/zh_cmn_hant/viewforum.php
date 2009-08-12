<?php
/** 
*
* viewforum [Chinese Traditional]
*
* @package language
* @version $Id: viewforum.php 8479 2008-03-29 00:22:48Z naderman $
* @copyright (c) 2007 phpbbchina.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/ 
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACTIVE_TOPICS'			=> '活躍主題',
	'ANNOUNCEMENTS'			=> '公告',

	'FORUM_PERMISSIONS'		=> '版面權限',

	'ICON_ANNOUNCEMENT'		=> '公告',
	'ICON_STICKY'			=> '置頂',

	'LOGIN_NOTIFY_FORUM'	=> '您在本版面有通知，請登入查看。',

	'MARK_TOPICS_READ'		=> '標記主題為已讀',

	'NEW_POSTS_HOT'			=> '有新文章【熱門】',
	'NEW_POSTS_LOCKED'		=> '有新文章【鎖定】',
	'NO_NEW_POSTS_HOT'		=> '無新文章【熱門】',
	'NO_NEW_POSTS_LOCKED'	=> '無新文章【鎖定】',
	'NO_READ_ACCESS'		=> '您沒有閱讀本版面文章的權限。',

	'POST_FORUM_LOCKED'		=> '版面被鎖定',

	'TOPICS_MARKED'			=> '這個版面的文章現在被標記為已讀',

	'VIEW_FORUM'			=> '查看版面',
	'VIEW_FORUM_TOPIC'		=> '1 個主題',
	'VIEW_FORUM_TOPICS'		=> '%d 個主題',
));

?>