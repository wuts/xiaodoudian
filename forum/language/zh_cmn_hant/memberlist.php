<?php
/** 
*
* memberlist [Chinese Traditional]
*
* @package language
* @version $Id: memberlist.php 8574 2008-05-29 13:59:47Z Kellanved $
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
	'ABOUT_USER'			=> '其它相關',
	'ACTIVE_IN_FORUM'		=> '活躍於版面',
	'ACTIVE_IN_TOPIC'		=> '活躍於話題',
	'ADD_FOE'				=> '添加損友',
	'ADD_FRIEND'			=> '添加好友',
	'AFTER'					=> '之後',

	'ALL'					=> '全部',

	'BEFORE'				=> '之前',

	'CC_EMAIL'				=> '給您自己發送一份這個 Email 的備份',
	'CONTACT_USER'			=> '聯絡方式',

	'DEST_LANG'				=> '語系',
	'DEST_LANG_EXPLAIN'		=> '選擇一個合適的語系（如果可用）。',

	'EMAIL_BODY_EXPLAIN'	=> '郵件將以文字模式的形式發送，請不要添加任何 HTML 或 BBCode。這個郵件的返回位址將設置為您的 Email 位址。',
	'EMAIL_DISABLED'		=> '對不起 Email 相關的功能都已經被關閉。',
	'EMAIL_SENT'			=> 'Email 已經發送。',
	'EMAIL_TOPIC_EXPLAIN'	=> '內容將以文字模式的形式發送，請不要包含任何 HTML 或 BBCode。請注意主題的訊息已經包含在郵件內。這個郵件的返回位址將設置為您的 Email 位址。',
	'EMPTY_ADDRESS_EMAIL'	=> '您必須提供一個有效的郵件接收位址。',
	'EMPTY_MESSAGE_EMAIL'	=> '您必須填入郵件內容',
	'EMPTY_MESSAGE_IM'		=> '您必須填入信件內容',
	'EMPTY_NAME_EMAIL'		=> '您必須填入收件人的會員名稱',
	'EMPTY_SUBJECT_EMAIL'	=> '您必須填入郵件主題',
	'EQUAL_TO'				=> '等於',

	'FIND_USERNAME_EXPLAIN'	=> '用這個表單尋找特定的會員。您不必填寫所有的表格。匹配部分字元可以使用 * 萬用字元。當輸入日期時請使用格式 <kbd>YYYY-MM-DD</kbd>，如: <samp>2004-02-29</samp>。使用多重選框選擇一個或多個會員名稱（是否接受多個會員名稱取決於表單本身）並點擊選擇選取的按鈕回到原先的表單。',
	'FLOOD_EMAIL_LIMIT'		=> '您現在不能發送 Email。請稍後再試。',

	'GROUP_LEADER'			=> '群組組長',

	'HIDE_MEMBER_SEARCH'	=> '隱藏會員搜尋',

	'IM_ADD_CONTACT'		=> '添加聯絡方式',
	'IM_AIM'				=> '請注意您需要安裝 AOL Instant Messenger 後才能使用這個功能。',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> '下載程式',
	'IM_ICQ'				=> '請注意會員可能不會接收到未被請求的即時訊息。',
	'IM_JABBER'				=> '請注意會員可能不會接收到未被請求的即時訊息。',
	'IM_JABBER_SUBJECT'		=> '這是一個自動訊息，請不要回覆！訊息由會員 %1$s 於 %2$s 發出。',
	'IM_MESSAGE'			=> '您的訊息',
	'IM_MSNM'				=> '請注意您需要安裝 MSN Messenger 後才能使用這個功能。',
	'IM_MSNM_BROWSER'		=> '您的瀏覽器不支援這個功能。',
	'IM_MSNM_CONNECT'		=> 'MSNM 未連接。\n您需要連上 MSNM 後才能繼續。',		
	'IM_NAME'				=> '您的名字',
	'IM_NO_DATA'			=> '這位會員並沒有合適的聯絡方式',
	'IM_NO_JABBER'			=> '對不起，這個討論區不支援對 Jabber 會員的直接訊息發送。您需要安裝一個 Jabber 客戶端來聯絡上面的會員。',
	'IM_RECIPIENT'			=> '收件人',
	'IM_SEND'				=> '發送訊息',
	'IM_SEND_MESSAGE'		=> '發送訊息',
	'IM_SENT_JABBER'		=> '您發往 %1$s 的訊息已經發送。',
	'IM_USER'				=> '發送一個即時訊息',
	
	'LAST_ACTIVE'				=> '最後活動',
	'LESS_THAN'					=> '少於',
	'LIST_USER'					=> '1 位會員',
	'LIST_USERS'				=> '%d 位會員',
	'LOGIN_EXPLAIN_LEADERS'		=> '您需要註冊並登入後才能訪問群組列表。',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> '您需要註冊並登入後才能訪問會員列表。',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> '您需要註冊並登入後才能搜尋會員。',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> '您需要註冊並登入後才能查看會員資料。',

	'MORE_THAN'				=> '多於',

	'NO_EMAIL'				=> '您不允許給這個會員發 Email。',
	'NO_VIEW_USERS'			=> '您未被授權查看會員列表或會員資料。',

	'ORDER'					=> '順序',
	'OTHER'					=> '其他',

	'POST_IP'				=> '發文 IP/域名',

	'RANK'					=> '等級',
	'REAL_NAME'				=> '收信人名字',
	'RECIPIENT'				=> '收信人',
	'REMOVE_FOE'			=> '刪除損友',
	'REMOVE_FRIEND'			=> '刪除好友',

	'SEARCH_USER_POSTS'		=> '列出會員文章',
	'SELECT_MARKED'			=> '選擇已標記',
	'SELECT_SORT_METHOD'	=> '會員排列方式 ',
	'SEND_AIM_MESSAGE'		=> '發送 AIM 訊息',
	'SEND_ICQ_MESSAGE'		=> '發送 ICQ 訊息',
	'SEND_IM'				=> '即時訊息',
	'SEND_JABBER_MESSAGE'	=> '發送 Jabber 訊息',
	'SEND_MESSAGE'			=> '訊息',
	'SEND_MSNM_MESSAGE'		=> '發送 MSNM/WLM 訊息',
	'SEND_YIM_MESSAGE'		=> '發送 YIM 訊息',
	'SORT_EMAIL'			=> 'Email',
	'SORT_LAST_ACTIVE'		=> '最後活動',
	'SORT_POST_COUNT'		=> '發文總數',

	'USERNAME_BEGINS_WITH'	=> '會員名稱首字母 ',
	'USER_ADMIN'			=> '管理會員',
	'USER_BAN'				=> '封禁',
	'USER_FORUM'			=> '會員統計',
	'USER_ONLINE'			=> '在線',
	'USER_PRESENCE'			=> '討論區形象',

	'VIEWING_PROFILE'		=> '查看資料 - %s',
	'VISITED'				=> '最後訪問',

	'WWW'					=> '主頁',
));

?>