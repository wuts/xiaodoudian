<?php
/**
* acp_permissions_phpbb (phpBB Permission Set) [Chinese Traditional]
*
* @package language
* @version $Id: permissions_phpbb.php 8479 2008-03-29 00:22:48Z naderman $
* @copyright (c) 2007 phpbbchina.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

/**
*	MODDERS PLEASE NOTE
*
*	You are able to put your permission sets into a separate file too by
*	prefixing the new file with permissions_ and putting it into the acp 
*	language folder.
*
*	An example of how the file could look like:
*
*	<code>
*
*	if (empty($lang) || !is_array($lang))
*	{
*		$lang = array();
*	}
*
*	// Adding new category
*	$lang['permission_cat']['bugs'] = 'Bugs';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Bug Permissions';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> array('lang' => 'Can view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Can post bugs', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/

// Define categories and permission types
$lang = array_merge($lang, array(
	'permission_cat'	=> array(
		'actions'		=> '操作',
		'content'		=> '內容',
		'forums'		=> '版面',
		'misc'			=> '雜項',
		'permissions'	=> '權限',
		'pm'			=> '私人訊息',
		'polls'			=> '投票',
		'post'			=> '文章',
		'post_actions'	=> '發文動作',
		'posting'		=> '發文',
		'profile'		=> '個人資料',
		'settings'		=> '設定',
		'topic_actions'	=> '主題操作',
		'user_group'	=> '會員&amp;群組',
	),

// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
	'permission_type'	=> array(
		'u_'			=> '會員權限',
		'a_'			=> '管理員權限',
		'm_'			=> '版主權限',
		'f_'			=> '版面權限',
		'global'		=> array(
			'm_'			=> '超級版主權限',
		),
	),
));

// User Permissions
$lang = array_merge($lang, array(
	'acl_u_viewprofile'	=> array('lang' => '可以查看會員資料', 'cat' => 'profile'),
	'acl_u_chgname'		=> array('lang' => '可以更改會員名稱', 'cat' => 'profile'),
	'acl_u_chgpasswd'	=> array('lang' => '可以更改密碼', 'cat' => 'profile'),
	'acl_u_chgemail'	=> array('lang' => '可以更改email地址', 'cat' => 'profile'),
	'acl_u_chgavatar'	=> array('lang' => '可以更改頭像', 'cat' => 'profile'),
	'acl_u_chggrp'		=> array('lang' => '可以更改預設群組', 'cat' => 'profile'),

	'acl_u_attach'		=> array('lang' => '可以發表附加檔案', 'cat' => 'post'),
	'acl_u_download'	=> array('lang' => '可以下載附加檔案', 'cat' => 'post'),
	'acl_u_savedrafts'	=> array('lang' => '可以保存草稿', 'cat' => 'post'),
	'acl_u_chgcensors'	=> array('lang' => '可以禁用敏感詞過濾', 'cat' => 'post'),
	'acl_u_sig'			=> array('lang' => '可以使用簽名檔', 'cat' => 'post'),

	'acl_u_sendpm'		=> array('lang' => '可以發送私人訊息', 'cat' => 'pm'),
	'acl_u_masspm'		=> array('lang' => '可以向會員發送大量私人訊息', 'cat' => 'pm'),
	'acl_u_masspm_group'=> array('lang' => '可以向會員組發送大量私人訊息', 'cat' => 'pm'),
	'acl_u_readpm'		=> array('lang' => '可以閱讀私人訊息', 'cat' => 'pm'),
	'acl_u_pm_edit'		=> array('lang' => '可以編輯自己的私人訊息', 'cat' => 'pm'),
	'acl_u_pm_delete'	=> array('lang' => '可以刪除自己的私人訊息', 'cat' => 'pm'),
	'acl_u_pm_forward'	=> array('lang' => '可以轉寄私人訊息', 'cat' => 'pm'),
	'acl_u_pm_emailpm'	=> array('lang' => '可以email私人訊息', 'cat' => 'pm'),
	'acl_u_pm_printpm'	=> array('lang' => '可以列印私人訊息', 'cat' => 'pm'),
	'acl_u_pm_attach'	=> array('lang' => '可以在私人訊息中添加附加檔案', 'cat' => 'pm'),
	'acl_u_pm_download'	=> array('lang' => '可以在私人訊息中下載附加檔案', 'cat' => 'pm'),
	'acl_u_pm_bbcode'	=> array('lang' => '可以在私人訊息中使用BBCode', 'cat' => 'pm'),
	'acl_u_pm_smilies'	=> array('lang' => '可以在私人訊息中使用表情符號', 'cat' => 'pm'),
	'acl_u_pm_img'		=> array('lang' => '可以在私人訊息中粘貼圖片', 'cat' => 'pm'),
	'acl_u_pm_flash'	=> array('lang' => '可以在私人訊息中粘貼Flash', 'cat' => 'pm'),

	'acl_u_sendemail'	=> array('lang' => '可以發送email', 'cat' => 'misc'),
	'acl_u_sendim'		=> array('lang' => '可以發送即時消息', 'cat' => 'misc'),
	'acl_u_ignoreflood'	=> array('lang' => '可以不受灌水間隔限制', 'cat' => 'misc'),
	'acl_u_hideonline'	=> array('lang' => '可以隱藏在線狀態', 'cat' => 'misc'),
	'acl_u_viewonline'	=> array('lang' => '可以查看在線情況', 'cat' => 'misc'),
	'acl_u_search'		=> array('lang' => '可以搜尋討論區', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'acl_f_list'		=> array('lang' => '可以看見版面', 'cat' => 'post'),
	'acl_f_read'		=> array('lang' => '可以瀏覽版面', 'cat' => 'post'),
	'acl_f_post'		=> array('lang' => '可以發表新主題', 'cat' => 'post'),
	'acl_f_reply'		=> array('lang' => '可以回覆主題', 'cat' => 'post'),
	'acl_f_icons'		=> array('lang' => '可以使用主題圖示', 'cat' => 'post'),
	'acl_f_announce'	=> array('lang' => '可以發佈公告', 'cat' => 'post'),
	'acl_f_sticky'		=> array('lang' => '可以發佈置頂文章', 'cat' => 'post'),

	'acl_f_poll'		=> array('lang' => '可以建立投票', 'cat' => 'polls'),
	'acl_f_vote'		=> array('lang' => '可以參與投票', 'cat' => 'polls'),
	'acl_f_votechg'		=> array('lang' => '可以更改存在的投票', 'cat' => 'polls'),

	'acl_f_attach'		=> array('lang' => '可以發表附加檔案', 'cat' => 'content'),
	'acl_f_download'	=> array('lang' => '可以下載檔案', 'cat' => 'content'),
	'acl_f_sigs'		=> array('lang' => '可以使用簽名檔', 'cat' => 'content'),
	'acl_f_bbcode'		=> array('lang' => '可以使用BBCode', 'cat' => 'content'),
	'acl_f_smilies'		=> array('lang' => '可以使用表情符號', 'cat' => 'content'),
	'acl_f_img'			=> array('lang' => '可以發表圖片', 'cat' => 'content'),
	'acl_f_flash'		=> array('lang' => '可以發表Flash', 'cat' => 'content'),

	'acl_f_edit'		=> array('lang' => '可以編輯自己的文章', 'cat' => 'actions'),
	'acl_f_delete'		=> array('lang' => '可以刪除自己的文章', 'cat' => 'actions'),
	'acl_f_user_lock'	=> array('lang' => '可以鎖定自己的主題', 'cat' => 'actions'),
	'acl_f_bump'		=> array('lang' => '可以頂主題', 'cat' => 'actions'),
	'acl_f_report'		=> array('lang' => '可以舉報文章', 'cat' => 'actions'),
	'acl_f_subscribe'	=> array('lang' => '可以訂閱版面', 'cat' => 'actions'),
	'acl_f_print'		=> array('lang' => '可以列印主題', 'cat' => 'actions'),
	'acl_f_email'		=> array('lang' => '可以email主題', 'cat' => 'actions'),

	'acl_f_search'		=> array('lang' => '可以搜尋版面', 'cat' => 'misc'),
	'acl_f_ignoreflood' => array('lang' => '可以不受灌水間隔限制', 'cat' => 'misc'),
	'acl_f_postcount'	=> array('lang' => '增加文章數<br /><em>請注意這個設定只對新文章有效.</em>', 'cat' => 'misc'),
	'acl_f_noapprove'	=> array('lang' => '可以不經審閱發表主題', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'acl_m_edit'		=> array('lang' => '可以編輯文章', 'cat' => 'post_actions'),
	'acl_m_delete'		=> array('lang' => '可以刪除文章', 'cat' => 'post_actions'),
	'acl_m_approve'		=> array('lang' => '可以審閱文章', 'cat' => 'post_actions'),
	'acl_m_report'		=> array('lang' => '可以關閉和刪除舉報', 'cat' => 'post_actions'),
	'acl_m_chgposter'	=> array('lang' => '可以更改文章作者', 'cat' => 'post_actions'),

	'acl_m_move'	=> array('lang' => '可以移動主題', 'cat' => 'topic_actions'),
	'acl_m_lock'	=> array('lang' => '可以鎖定主題', 'cat' => 'topic_actions'),
	'acl_m_split'	=> array('lang' => '可以分割主題', 'cat' => 'topic_actions'),
	'acl_m_merge'	=> array('lang' => '可以合併主題', 'cat' => 'topic_actions'),

	'acl_m_info'	=> array('lang' => '可以查看主題細節', 'cat' => 'misc'),
	'acl_m_warn'	=> array('lang' => '可以簽發警告', 'cat' => 'misc'),
	'acl_m_ban'		=> array('lang' => '可以管理封鎖', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'acl_a_board'		=> array('lang' => '可以修改討論區設置/檢查更新', 'cat' => 'settings'),
	'acl_a_server'		=> array('lang' => '可以修改伺服器/通訊設置', 'cat' => 'settings'),
	'acl_a_jabber'		=> array('lang' => '可以修改Jabber設定', 'cat' => 'settings'),
	'acl_a_phpinfo'		=> array('lang' => '可以查看php設定', 'cat' => 'settings'),

	'acl_a_forum'		=> array('lang' => '可以管理版面', 'cat' => 'forums'),
	'acl_a_forumadd'	=> array('lang' => '可以添加新版面', 'cat' => 'forums'),
	'acl_a_forumdel'	=> array('lang' => '可以刪除版面', 'cat' => 'forums'),
	'acl_a_prune'		=> array('lang' => '可以裁減版面', 'cat' => 'forums'),

	'acl_a_icons'		=> array('lang' => '可以修改主題圖示和表情符號', 'cat' => 'posting'),
	'acl_a_words'		=> array('lang' => '可以修改敏感詞設定', 'cat' => 'posting'),
	'acl_a_bbcode'		=> array('lang' => '可以設定BBCode標籤', 'cat' => 'posting'),
	'acl_a_attach'		=> array('lang' => '可以修改附加檔案相關設定', 'cat' => 'posting'),

	'acl_a_user'		=> array('lang' => '可以管理會員', 'cat' => 'user_group'),
	'acl_a_userdel'		=> array('lang' => '可以刪除/修剪會員', 'cat' => 'user_group'),
	'acl_a_group'		=> array('lang' => '可以管理群組', 'cat' => 'user_group'),
	'acl_a_groupadd'	=> array('lang' => '可以添加新群組', 'cat' => 'user_group'),
	'acl_a_groupdel'	=> array('lang' => '可以刪除群組', 'cat' => 'user_group'),
	'acl_a_ranks'		=> array('lang' => '可以管理等級', 'cat' => 'user_group'),
	'acl_a_profile'		=> array('lang' => '可以管理自定義會員資料', 'cat' => 'user_group'),
	'acl_a_names'		=> array('lang' => '可以管理禁用會員名稱', 'cat' => 'user_group'),
	'acl_a_ban'			=> array('lang' => '可以管理封鎖', 'cat' => 'user_group'),

	'acl_a_viewauth'	=> array('lang' => '可以查看權限偽裝', 'cat' => 'permissions'),
	'acl_a_authgroups'	=> array('lang' => '可以修改單獨的群組權限', 'cat' => 'permissions'),
	'acl_a_authusers'	=> array('lang' => '可以修改單獨的會員權限', 'cat' => 'permissions'),
	'acl_a_fauth'		=> array('lang' => '可以修改版面權限類', 'cat' => 'permissions'),
	'acl_a_mauth'		=> array('lang' => '可以修改版主權限類', 'cat' => 'permissions'),
	'acl_a_aauth'		=> array('lang' => '可以修改管理員權限類', 'cat' => 'permissions'),
	'acl_a_uauth'		=> array('lang' => '可以修改會員權限類', 'cat' => 'permissions'),
	'acl_a_roles'		=> array('lang' => '可以管理角色', 'cat' => 'permissions'),
	'acl_a_switchperm'	=> array('lang' => '可以使用其他權限', 'cat' => 'permissions'),

	'acl_a_styles'		=> array('lang' => '可以管理風格', 'cat' => 'misc'),
	'acl_a_viewlogs'	=> array('lang' => '可以查看日誌', 'cat' => 'misc'),
	'acl_a_clearlogs'	=> array('lang' => '可以清空日誌', 'cat' => 'misc'),
	'acl_a_modules'		=> array('lang' => '可以管理模組', 'cat' => 'misc'),
	'acl_a_language'	=> array('lang' => '可以管理語系包', 'cat' => 'misc'),
	'acl_a_email'		=> array('lang' => '可以發送大量email', 'cat' => 'misc'),
	'acl_a_bots'		=> array('lang' => '可以管理機器人會員', 'cat' => 'misc'),
	'acl_a_reasons'		=> array('lang' => '可以管理舉報/否決原因', 'cat' => 'misc'),
	'acl_a_backup'		=> array('lang' => '可以備份/還原資料庫', 'cat' => 'misc'),
	'acl_a_search'		=> array('lang' => '可以管理搜尋後端和設定', 'cat' => 'misc'),
));

?>