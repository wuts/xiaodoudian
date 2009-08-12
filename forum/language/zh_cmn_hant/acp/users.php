<?php
/**
*
* acp_users [Chinese Traditional]
*
* @package language
* @version $Id: users.php 8479 2008-03-29 00:22:48Z naderman $
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
	'ADMIN_SIG_PREVIEW'		=> '簽名檔預覽',
	'AT_LEAST_ONE_FOUNDER'	=> '您不能將創始人設置為普通會員. 這個討論區至少需要一名創始人. 如果您需要改變這個會員的等級, 請先提升另一位會員為創始人.',

	'BAN_ALREADY_ENTERED'	=> '封鎖在更早的時候已經輸入完成, 封鎖列表沒有更新.',
	'BAN_SUCCESSFUL'		=> '封鎖輸入完成.',

	'CANNOT_BAN_FOUNDER'			=> '您不能封鎖創始人帳號.',
	'CANNOT_BAN_YOURSELF'			=> '您不能封鎖自己的帳號.',
	'CANNOT_DEACTIVATE_BOT'			=> '您不能凍結機器人帳號.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> '您不能凍結創始人帳號.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> '您不能凍結自己的帳號.',
	'CANNOT_FORCE_REACT_BOT'		=> '您不能強制啟用機器人帳號.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> '您不能強制啟用創始人帳號.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> '您不能強制啟用自己的帳號.',
	'CANNOT_REMOVE_ANONYMOUS'		=> '您不能刪除訪客帳號.',
	'CANNOT_REMOVE_YOURSELF'		=> '您不能刪除自己的帳號.',
	'CANNOT_SET_FOUNDER_BOT'		=> '您不能提升被忽略的會員為創始人.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> '您需要先啟用會員才能提升他們為創始人, 只有活動的會員才能被提升.',
	'CONFIRM_EMAIL_EXPLAIN'			=> '您只有在改變會員email位址的時候才需要指定這個.',

	'DELETE_POSTS'			=> '刪除文章',
	'DELETE_USER'			=> '刪除會員',
	'DELETE_USER_EXPLAIN'	=> '請注意刪除的會員將不可恢復',

	'FORCE_REACTIVATION_SUCCESS'	=> '強制啟用完成.',
	'FOUNDER'						=> '創始人',
	'FOUNDER_EXPLAIN'				=> '創始人擁有管理員的所有權限, 並且不能被封鎖、刪除和更改',

	'GROUP_APPROVE'					=> '成員批准',
	'GROUP_DEFAULT'					=> '設置為成員預設群組',
	'GROUP_DELETE'					=> '刪除群組會員',
	'GROUP_DEMOTE'					=> '群組組長降職',
	'GROUP_PROMOTE'					=> '提升為群組組長',

	'IP_WHOIS_FOR'			=> 'IP whois for %s',

	'LAST_ACTIVE'			=> '最後活動',

	'MOVE_POSTS_EXPLAIN'	=> '請選擇您想要刪除這個會員發表的所有文章的版面.',

	'NO_SPECIAL_RANK'		=> '沒有指派特殊等級',
	'NOT_MANAGE_FOUNDER'	=> '您在嘗試使用創始人特權管理會員. 只有創始人才可以管理其他創始人會員.',

	'QUICK_TOOLS'			=> '快速工具',

	'REGISTERED'			=> '已註冊',
	'REGISTERED_IP'			=> '註冊自 IP',
	'RETAIN_POSTS'			=> '保留文章',

	'SELECT_FORM'			=> '選擇自',
	'SELECT_USER'			=> '選擇會員',

	'USER_ADMIN'					=> '會員管理',
	'USER_ADMIN_ACTIVATE'			=> '啟用帳號',
	'USER_ADMIN_ACTIVATED'			=> '會員帳號啟用完成.',
	'USER_ADMIN_AVATAR_REMOVED'		=> '刪除會員頭像完成.',
	'USER_ADMIN_BAN_EMAIL'			=> '因email被封鎖',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> '在會員管理中封鎖了的email位址',
	'USER_ADMIN_BAN_IP'				=> '因IP被封鎖',
	'USER_ADMIN_BAN_IP_REASON'		=> '在會員管理中封鎖了的IP位址',
	'USER_ADMIN_BAN_NAME_REASON'	=> '在會員管理中封鎖了的會員名稱',
	'USER_ADMIN_BAN_USER'			=> '因會員名稱被封鎖',
	'USER_ADMIN_DEACTIVATE'			=> '凍結的帳號',
	'USER_ADMIN_DEACTIVED'			=> '帳號凍結完成.',
	'USER_ADMIN_DEL_ATTACH'			=> '刪除所有附加檔案',
	'USER_ADMIN_DEL_AVATAR'			=> '刪除頭像',
	'USER_ADMIN_DEL_POSTS'			=> '刪除所有文章',
	'USER_ADMIN_DEL_SIG'			=> '刪除簽名檔',
	'USER_ADMIN_EXPLAIN'			=> '這裡您可以改變您的會員訊息和一些特定選項. 修改會員權限請使用會員和群組權限管理.',
	'USER_ADMIN_FORCE'				=> '強制啟用',
	'USER_ADMIN_MOVE_POSTS'			=> '移動所有文章',
	'USER_ADMIN_SIG_REMOVED'		=> '刪除會員簽名檔完成.',
	'USER_ATTACHMENTS_REMOVED'		=> '會員名稱下的附加檔案都已經刪除.',
	'USER_AVATAR_UPDATED'			=> '會員頭像訊息更新完成.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> '自定義個人資料',
	'USER_DELETED'					=> '會員已經刪除.',
	'USER_GROUP_ADD'				=> '添加會員到群組',
	'USER_GROUP_NORMAL'				=> '普通組員為成員自',
	'USER_GROUP_PENDING'			=> '群組會員為等待狀態',
	'USER_GROUP_SPECIAL'			=> '特殊組員為成員自',
	'USER_NO_ATTACHMENTS'			=> '沒有可顯示的附加檔案.',
	'USER_OVERVIEW_UPDATED'			=> '會員資料更新完成.',
	'USER_POSTS_DELETED'			=> '會員名稱下的所有文章都已經刪除.',
	'USER_POSTS_MOVED'				=> '已經移動會員的文章到目標討論區.',
	'USER_PREFS_UPDATED'			=> '會員設定已更新.',
	'USER_PROFILE'					=> '會員資料',
	'USER_PROFILE_UPDATED'			=> '會員資料已更新.',
	'USER_RANK'						=> '會員等級',
	'USER_RANK_UPDATED'				=> '會員等級已更新.',
	'USER_SIG_UPDATED'				=> '會員簽名檔已更新.',
	'USER_TOOLS'					=> '基本工具',
));

?>