<?php
/** 
*
* mcp [Chinese Traditional]
*
* @package language
* @version $Id: mcp.php 8479 2008-03-29 00:22:48Z naderman $
* @copyright (c) 2005 phpbbchina.com
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
	'ACTION'				=> '操作',
	'ACTION_NOTE'			=> '操作/提示',
	'ADD_FEEDBACK'			=> '添加意見/反應',
	'ADD_FEEDBACK_EXPLAIN'	=> '如果您需要添加一個報告請填寫下列表格。只可使用文字模式，不允許HTML, BBCode等語法格式.',
	'ADD_WARNING'			=> '發出警告',
	'ADD_WARNING_EXPLAIN'	=> '要對此會員發出一個警告，請首先填寫下表。只能使用文字模式; HTML, BBCode, 等不可使用.',
	'ALL_ENTRIES'			=> '所有項目',
	'ALL_NOTES_DELETED'		=> '成功刪除所有會員消息',
	'ALL_REPORTS'			=> '全部舉報',
	'ALREADY_REPORTED'		=> '這篇文章已經被舉報過了',
	'ALREADY_WARNED'		=> '這篇文章已經被警告過了',
	'APPROVE'				=> '批准發佈',
	'APPROVE_POST'			=> '批准這篇文章',
	'APPROVE_POST_CONFIRM'	=> '您確定要批准這篇文章發佈嗎？',
	'APPROVE_POSTS'			=> '批准這些文章',
	'APPROVE_POSTS_CONFIRM'	=> '您確定要批准這些文章發佈嗎？',

	'CANNOT_MOVE_SAME_FORUM'=> '您不能將主題移動到它所在的版面內',
	'CANNOT_WARN_ANONYMOUS'	=> '您不能警告尚未註冊的訪客',
	'CANNOT_WARN_SELF'		=> '您不能警告您自己',
	'CAN_LEAVE_BLANK'		=> '這裡允許空白。',
	'CHANGE_POSTER'			=> '改變作者',
	'CLOSE_REPORT'			=> '關閉舉報',
	'CLOSE_REPORT_CONFIRM'	=> '您確定要關閉這個舉報嗎？',
	'CLOSE_REPORTS'			=> '關閉舉報',
	'CLOSE_REPORTS_CONFIRM'	=> '您確定要關閉這些舉報嗎？',

	'DELETE_POSTS'				=> '刪除文章',
	'DELETE_POSTS_CONFIRM'		=> '您確定要刪除這些文章嗎？',
	'DELETE_POST_CONFIRM'		=> '您確定要刪除這篇文章嗎？',
	'DELETE_REPORT'				=> '刪除舉報',
	'DELETE_REPORT_CONFIRM'		=> '你確定要刪除這個舉報嗎？',
	'DELETE_REPORTS'			=> '刪除舉報',
	'DELETE_REPORTS_CONFIRM'	=> '您確定要刪除這些舉報嗎？',
	'DELETE_SHADOW_TOPIC'		=> '在舊的版面上刪除已移動的主題',
	'DELETE_TOPICS'				=> '刪除選定主題',
	'DELETE_TOPICS_CONFIRM'		=> '您確定要刪除這些主題嗎？',
	'DELETE_TOPIC_CONFIRM'		=> '您確定要刪除這個主題嗎？',
	'DISAPPROVE'				=> '禁止發佈',
	'DISAPPROVE_REASON'			=> '禁止發佈的理由',
	'DISAPPROVE_POST'			=> '禁止發佈這篇文章',
	'DISAPPROVE_POST_CONFIRM'	=> '您確定要禁止這篇文章發佈嗎？',
	'DISAPPROVE_POSTS'			=> '禁止發佈這些文章',
	'DISAPPROVE_POSTS_CONFIRM'	=> '您確定要禁止這些文章發佈嗎？',
	'DISPLAY_LOG'				=> '顯示記錄',
	'DISPLAY_OPTIONS'			=> '顯示選項',

	'EMPTY_REPORT'					=> '選擇這個理由時您必須手動輸入描述',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> '請注意一個或多個主題因為內容為空白, 已經從資料庫中刪除',

	'FEEDBACK'				=> '意見/反應',
	'FORK'					=> '複製',
	'FORK_TOPIC'			=> '複製主題',
	'FORK_TOPIC_CONFIRM'	=> '您確認要複製這個主題嗎?',
	'FORK_TOPICS'			=> '複製選取的主題',
	'FORK_TOPICS_CONFIRM'	=> '您確認要複製這些主題嗎?',
	'FORUM_DESC'			=> '版面簡介',
	'FORUM_NAME'			=> '版面名稱',
	'FORUM_NOT_EXIST'		=> '您選擇的版面不存在',
	'FORUM_NOT_POSTABLE'	=> '您選擇的版面不能發文',
	'FORUM_STATUS'			=> '版面狀態',
	'FORUM_STYLE'			=> '版面風格',

	'GLOBAL_ANNOUNCEMENT'	=> '全站公告',

	'IP_INFO'				=> 'IP位址訊息',
	'IPS_POSTED_FROM'		=> '這個會員的發文IP位址',

	'LATEST_LOGS'				=> '最近的5個操作記錄',
	'LATEST_REPORTED'			=> '最新的5個舉報',
	'LATEST_UNAPPROVED'			=> '最新5篇等待批准發佈的文章',
	'LATEST_WARNING_TIME'		=> '最近發出的警告',
	'LATEST_WARNINGS'			=> '最近的5個警告記錄',
	'LEAVE_SHADOW'				=> '在舊的版面上保留已移動的主題',
	'LIST_REPORT'				=> '1 個舉報',
	'LIST_REPORTS'				=> '%d 個舉報',
	'LOCK'						=> '鎖定',
	'LOCK_POST_POST'			=> '鎖定這篇文章',
	'LOCK_POST_POST_CONFIRM'	=> '您確定要禁止對這篇文章的編輯操作嗎？',
	'LOCK_POST_POSTS'			=> '鎖定這些文章',
	'LOCK_POST_POSTS_CONFIRM'	=> '您確定要禁止對這些文章的編輯操作嗎？',
	'LOCK_TOPIC_CONFIRM'		=> '您確定要鎖定這個主題嗎？',
	'LOCK_TOPICS'				=> '鎖定這些主題',
	'LOCK_TOPICS_CONFIRM'		=> '您確定要鎖定這些主題嗎？',
	'LOGS_CURRENT_TOPIC'		=> '正在查看日誌:',
	'LOGIN_EXPLAIN_MCP'			=> '您必須登入後才能管理這個版面.',
	'LOGVIEW_VIEWTOPIC'			=> '查看主題',
	'LOGVIEW_VIEWLOGS'			=> '查看主題日誌',
	'LOGVIEW_VIEWFORUM'			=> '查看版面',
	'LOOKUP_ALL'				=> '尋找所有IP位址',
	'LOOKUP_IP'					=> '尋找IP位址',

	'MARKED_NOTES_DELETED'		=> '成功刪除所有選取的會員消息',

	'MCP_ADD'						=> '發出一個警告',

	'MCP_BAN'					=> '禁止操作',
	'MCP_BAN_EMAILS'			=> '禁用Email位址',
	'MCP_BAN_IPS'				=> '禁用IP位址',
	'MCP_BAN_USERNAMES'			=> '禁用會員名稱',

	'MCP_LOGS'						=> '版主活動記錄',
	'MCP_LOGS_FRONT'				=> '首頁',
	'MCP_LOGS_FORUM_VIEW'			=> '版面相關記錄',
	'MCP_LOGS_TOPIC_VIEW'			=> '主題相關記錄',

	'MCP_MAIN'						=> '主要訊息',
	'MCP_MAIN_FORUM_VIEW'			=> '查看版面',
	'MCP_MAIN_FRONT'				=> '首頁',
	'MCP_MAIN_POST_DETAILS'			=> '文章詳細內容',
	'MCP_MAIN_TOPIC_VIEW'			=> '查看主題',
	'MCP_MAKE_ANNOUNCEMENT'			=> '改變為 “公告”',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> '您確定要將這個主題改變為 “公告”嗎？',
	'MCP_MAKE_ANNOUNCEMENTS'		=> '改變為 “公告”',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> '您確定要將這些主題改變為 “公告” 嗎？',
	'MCP_MAKE_GLOBAL'				=> '改變為 “全站公告”',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> '您確定要將這個主題改變為 “全站公告” 嗎？',
	'MCP_MAKE_GLOBALS'				=> '改變為 “全站公告”',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> '您確定要將這些主題改變為 “全站公告” 嗎？',
	'MCP_MAKE_STICKY'				=> '改變為 “置頂”',
	'MCP_MAKE_STICKY_CONFIRM'		=> '您確定要將這個主題改變為 “置頂” 嗎？',
	'MCP_MAKE_STICKIES'				=> '改變為 “置頂”',
	'MCP_MAKE_STICKIES_CONFIRM'		=> '您確定要將這些主題改變為 “置頂” 嗎？',
	'MCP_MAKE_NORMAL'				=> '改變為 “普通主題”',
	'MCP_MAKE_NORMAL_CONFIRM'		=> '您確定要將這個主題改變為 “普通主題” 嗎？',
	'MCP_MAKE_NORMALS'				=> '改變為 “普通主題”',
	'MCP_MAKE_NORMALS_CONFIRM'		=> '您確定要將這些主題改變為 “普通主題” 嗎？',

	'MCP_NOTES'						=> '會員消息',
	'MCP_NOTES_FRONT'				=> '首頁',
	'MCP_NOTES_USER'				=> '會員詳細資料',

	'MCP_POST_REPORTS'				=> '有關這篇文章的舉報',

	'MCP_REPORTS'					=> '查看舉報',
	'MCP_REPORT_DETAILS'			=> '舉報詳細內容',
	'MCP_REPORTS_CLOSED'			=> '已經審查的舉報',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> '這是已經處理過的文章舉報列表',
	'MCP_REPORTS_OPEN'				=> '等待審查的舉報',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> '這是等待處理的文章舉報列表',

	'MCP_QUEUE'								=> '批准發佈',
	'MCP_QUEUE_APPROVE_DETAILS'				=> '批覆說明',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> '等待批准發佈的文章',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> '這是需要批准後會員才可見的文章列表',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> '等待批准發佈的主題',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> '這是需要批准後會員才可見的主題列表',

	'MCP_VIEW_USER'			=> '查看特定會員的警告',

	'MCP_WARN'				=> '警告操作',
	'MCP_WARN_FRONT'		=> '首頁',
	'MCP_WARN_LIST'			=> '警告列表',
	'MCP_WARN_POST'			=> '警告這篇文章',
	'MCP_WARN_USER'			=> '警告會員',

	'MERGE_POSTS'			=> '合併文章',
	'MERGE_POSTS_CONFIRM'	=> '您確定要合併選取的這些文章嗎？',
	'MERGE_TOPIC_EXPLAIN'	=> '使用下面的表格您可以將選取的文章合併到另一個主題中. 這些文章將不會被記錄下原有訊息, 就像會員將其發表在一個新主題中一樣.<br />請輸入目標主題ID或者點擊 "選擇" 按鈕來尋找一個主題',
	'MERGE_TOPIC_ID'		=> '目標主題ID號',
	'MERGE_TOPICS'			=> '合併主題',
	'MERGE_TOPICS_CONFIRM'	=> '您確認要合併選取的主題嗎?',
	'MODERATE_FORUM'		=> '管理版面',
	'MODERATE_TOPIC'		=> '管理主題',
	'MODERATE_POST'			=> '管理文章',
	'MOD_OPTIONS'			=> '版主選項',
	'MORE_INFO'				=> '更多訊息',
	'MOST_WARNINGS'			=> '被警告次數最多的會員',
	'MOVE_TOPIC_CONFIRM'	=> '您確認將主題移動到新版面嗎?',
	'MOVE_TOPICS'			=> '移動選取的主題',
	'MOVE_TOPICS_CONFIRM'	=> '您確認將這些主題移動到新版面嗎?',

	'NOTIFY_POSTER_APPROVAL'		=> '通知作者關於通過批准的訊息嗎?',
	'NOTIFY_POSTER_DISAPPROVAL'		=> '通知作者關於未通過批准的訊息嗎?',
	'NOTIFY_USER_WARN'				=> '通知會員關於警告的訊息嗎?',
	'NOT_MODERATOR'					=> '您不是這個版面的版主',
	'NO_DESTINATION_FORUM'			=> '請選擇一個版面作為目標',
	'NO_DESTINATION_FORUM_FOUND'	=> '沒有可用的目標版面.',
	'NO_ENTRIES'					=> '沒有記錄',
	'NO_FEEDBACK'					=> '沒有這個會員的意見/反應',
	'NO_FINAL_TOPIC_SELECTED'		=> '您必須選取一個主題作為合併文章的目標',
	'NO_MATCHES_FOUND'				=> '沒有找到相符的結果',
	'NO_POST'						=> '您必須選取一篇文章作為警告會員的根據',
	'NO_POST_REPORT'				=> '這篇文章沒有被舉報.',
	'NO_POST_SELECTED'				=> '您必須選取一個或更多的文章來完成這項操作',
	'NO_REASON_DISAPPROVAL'			=> '請輸入一個合理的陳述作為不予批准的理由',
	'NO_REPORT'						=> '沒有舉報',
	'NO_REPORTS'					=> '沒有舉報',	
	'NO_REPORT_SELECTED'			=> '您必須選擇至少一個舉報來完成這個操作.',
	'NO_TOPIC_ICON'					=> '空',
	'NO_TOPIC_SELECTED'				=> '您必須選擇至少一個主題來完成這個操作',
	'NO_TOPICS_QUEUE'				=> '沒有主題',

	'ONLY_TOPIC'			=> '只有主題  “%s”',
	'OTHER_USERS'			=> '會員發表文章的IP位址',

	'POSTER'					=> '作者',
	'POSTS_APPROVED_SUCCESS'	=> '成功地批准了這些文章發佈',
	'POSTS_DELETED_SUCCESS'		=> '成功地刪除了這些文章',
	'POSTS_DISAPPROVED_SUCCESS'	=> '成功地禁止了這些文章發佈',
	'POSTS_LOCKED_SUCCESS'		=> '成功地鎖定了這些文章',
	'POSTS_MERGED_SUCCESS'		=> '成功地合併了這些文章',
	'POSTS_UNLOCKED_SUCCESS'	=> '成功地解除了這些文章的鎖定',
	'POSTS_PER_PAGE'			=> '每頁文章數',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(設成 0 查看所有文章)',
	'POST_APPROVED_SUCCESS'		=> '成功批准這篇文章發佈',
	'POST_DELETED_SUCCESS'		=> '成功刪除這篇文章',
	'POST_DISAPPROVED_SUCCESS'	=> '成功禁止這篇文章發佈',
	'POST_LOCKED_SUCCESS'		=> '成功鎖定這篇文章',
	'POST_NOT_EXIST'			=> '您請求的文章不存在',
	'POST_REPORTED_SUCCESS'		=> '成功舉報這篇文章',
	'POST_UNLOCKED_SUCCESS'		=> '成功解除這篇文章鎖定',

	'READ_USERNOTES'			=> '會員消息',
	'READ_WARNINGS'				=> '會員警告',
	'REPORTER'					=> '舉報人',
	'REPORTED'					=> '舉報',
	'REPORTED_BY'				=> '舉報自',
	'REPORTED_ON_DATE'			=> '於',
	'REPORTS_CLOSED_SUCCESS'	=> '選取的這些舉報已被成功關閉。',
	'REPORTS_DELETED_SUCCESS'	=> '選取的這些舉報已被成功刪除。',
	'REPORTS_TOTAL'				=> '目前共有 <strong>%d</strong> 筆舉報等待審查',
	'REPORTS_ZERO_TOTAL'		=> '目前沒有等待審查的舉報',
	'REPORT_CLOSED'				=> '這個舉報已經關閉.',
	'REPORT_CLOSED_SUCCESS'		=> '選取的這筆舉報已被成功關閉。',
	'REPORT_DELETED_SUCCESS'	=> '選取的這筆舉報已被成功刪除。',
	'REPORT_DETAILS'			=> '舉報細節',
	'REPORT_MESSAGE'			=> '舉報這些內容',
	'REPORT_MESSAGE_EXPLAIN'	=> '使用這個表單來向討論區管理員舉報選取的內容. 舉報一般用於違反版面規則的情況.',
	'REPORT_NOTIFY'				=> '通知您',
	'REPORT_NOTIFY_EXPLAIN'		=> '通知您當您的舉報有關',
	'REPORT_POST_EXPLAIN'		=> '使用這個表單來向版主和討論區管理員舉報選取的文章. 舉報一般用於違反版面規則的情況.',
	'REPORT_REASON'				=> '舉報理由',
	'REPORT_TIME'				=> '舉報時間',
	'REPORT_TOTAL'				=> '一共有 <strong>1</strong> 筆舉報需要復審',
	'RESYNC'					=> '重新同步',
	'RETURN_MESSAGE'			=> '%s返回至主旨%s',
	'RETURN_NEW_FORUM'			=> '%s前往新版面%s',
	'RETURN_NEW_TOPIC'			=> '%s前往新文章%s',
	'RETURN_POST'				=> '%s返回文章%s',
	'RETURN_QUEUE'				=> '%s返回列表%s',
	'RETURN_REPORTS'			=> '%s返回舉報%s',
	'RETURN_TOPIC_SIMPLE'		=> '%s返回主題%s',

	'SEARCH_POSTS_BY_USER'				=> '按作者搜尋文章',
	'SELECT_ACTION'						=> '選擇操作',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> '請選擇您希望顯示全站通告的版面.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> '一個或多個選取的主題是全站通告. 請選擇您希望這些通告出現的版面.',
	'SELECT_MERGE'						=> '選擇合拼',
	'SELECT_TOPICS_FROM'				=> '選擇主題來自',
	'SELECT_TOPIC'						=> '選擇主題',
	'SELECT_USER'						=> '選擇會員',
	'SORT_ACTION'						=> '日誌操作',
	'SORT_DATE'							=> '日期',
	'SORT_IP'							=> 'IP 位址',
	'SORT_WARNINGS'						=> '警告',
	'SPLIT_AFTER'						=> '分割未選取的文章',
	'SPLIT_FORUM'						=> '新主題的版面',
	'SPLIT_POSTS'						=> '分割選取的文章',
	'SPLIT_SUBJECT'						=> '新主題',
	'SPLIT_TOPIC_ALL'					=> '分割未選取的文章為新主題',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> '您確認分割這個主題嗎?',
	'SPLIT_TOPIC_BEYOND'				=> '分割選取的文章為新主題',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> '您確認要分割這個主題嗎?',
	'SPLIT_TOPIC_EXPLAIN'				=> '使用下面的表單您可以將一個主題分割為兩個, 可以分割選取文章也可以分割未選取的文章',

	'THIS_POST_IP'				=> '這篇文章的IP位址',
	'TOPICS_APPROVED_SUCCESS'	=> '成功地批准了這些主題發佈',
	'TOPICS_DELETED_SUCCESS'	=> '成功地刪除了這些主題',
	'TOPICS_DISAPPROVED_SUCCESS'=> '成功地禁止了這些主題發佈',
	'TOPICS_FORKED_SUCCESS'		=> '成功地複製了這些主題',
	'TOPICS_LOCKED_SUCCESS'		=> '成功地鎖定了這些主題',
	'TOPICS_MOVED_SUCCESS'		=> '成功地轉移了這些主題',
	'TOPICS_RESYNC_SUCCESS'		=> '成功地重新同步了這些主題',
	'TOPICS_TYPE_CHANGED'		=> '成功地改變了主題類型',
	'TOPICS_UNLOCKED_SUCCESS'	=> '成功地解除了這些主題的鎖定',
	'TOPIC_APPROVED_SUCCESS'	=> '成功批准此主題發佈',
	'TOPIC_DELETED_SUCCESS'		=> '成功刪除此主題',
	'TOPIC_DISAPPROVED_SUCCESS'	=> '成功禁止此主題發佈',
	'TOPIC_FORKED_SUCCESS'		=> '成功複製此主題',
	'TOPIC_LOCKED_SUCCESS'		=> '成功鎖定此主題',
	'TOPIC_MOVED_SUCCESS'		=> '成功轉移此主題',
	'TOPIC_NOT_EXIST'			=> '您選擇的主題不存在',
	'TOPIC_RESYNC_SUCCESS'		=> '成功重新同步此主題',
	'TOPIC_SPLIT_SUCCESS'		=> '成功分割此主題',
	'TOPIC_TIME'				=> '發表時間',
	'TOPIC_TYPE_CHANGED'		=> '成功改變此主題類型',
	'TOPIC_UNLOCKED_SUCCESS'	=> '成功解除此主題鎖定',
	'TOTAL_WARNINGS'			=> '警告次數',

	'UNAPPROVED_POSTS_TOTAL'		=> '目前共有 <strong>%d</strong> 篇文章等待批准發佈',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> '目前沒有等待批准發佈的文章',
	'UNAPPROVED_POST_TOTAL'			=> '目前共有 <strong>1</strong> 篇文章等待批准發佈',
	'UNLOCK'						=> '解鎖',
	'UNLOCK_POST'					=> '解鎖文章',
	'UNLOCK_POST_EXPLAIN'			=> '允許編輯',
	'UNLOCK_POST_POST'				=> '解鎖這篇文章',
	'UNLOCK_POST_POST_CONFIRM'		=> '您確定要允許對這篇文章的編輯操作嗎？',
	'UNLOCK_POST_POSTS'				=> '解鎖這些文章',
	'UNLOCK_POST_POSTS_CONFIRM'		=> '您確定要允許對這些文章的編輯操作嗎？',
	'UNLOCK_TOPIC'					=> '解鎖此主題',
	'UNLOCK_TOPIC_CONFIRM'			=> '您確定要解除對這個主題的鎖定嗎？',
	'UNLOCK_TOPICS'					=> '解鎖這些主題',
	'UNLOCK_TOPICS_CONFIRM'			=> '您確定要解除對這些主題的鎖定嗎？',
	'USER_CANNOT_POST'				=> '您不能在這個版面發文',
	'USER_CANNOT_REPORT'			=> '您不能在這個版面舉報文章',
	'USER_FEEDBACK_ADDED'			=> '成功添加會員意見/反應.',
	'USER_WARNING_ADDED'			=> '成功地發出了會員警告。',

	'VIEW_DETAILS'			=> '查看詳情',
	'VIEW_POST'            => '查看文章',

	'WARNED_USERS'			=> '被警告的會員',
	'WARNED_USERS_EXPLAIN'	=> '警告未到期的會員列表',
	'WARNING_PM_BODY'		=> '以下是這個討論區的管理員或版主對您的警告[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> '討論區警告標題',
	'WARNING_POST_DEFAULT'	=> '這個警告是由於以下您發表的文章: %s',
	'WARNINGS_ZERO_TOTAL'	=> '沒有警告',

	'YOU_SELECTED_TOPIC'	=> '您選擇了主題編號 %d: %s',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> '非法連結',
			'SPAM'		=> '垃圾廣告',
			'OFF_TOPIC'	=> '偏離主題內容',
			'OTHER'		=> '其他'
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> '這篇文章包含了非法或流氓軟體的連結',
			'SPAM'		=> '這篇文章的唯一目的是為其它網站或軟體做廣告',
			'OFF_TOPIC'	=> '這篇文章跑題了',
			'OTHER'		=> '舉報原因不符合其他的項目，請填入備註訊息'
		)
	),
));

?>
