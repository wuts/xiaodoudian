<?php
/**
*
* acp_forums [Chinese Traditional]
*
* @package language
* @version $Id: forums.php 8479 2008-03-29 00:22:48Z naderman $
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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> '自動刪除未回覆文章的時間',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> '在最後一篇文章發表後多少天這個主題會被刪除.',
	'AUTO_PRUNE_FREQ'			=> '自動刪除頻率',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> '執行刪除動作的間隔天數.',
	'AUTO_PRUNE_VIEWED'			=> '自動刪除已檢視文章的時間',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> '自從主題被最後一次檢視後多少天, 這個主題會被刪除.',

	'COPY_PERMISSIONS'				=> '複製權限自',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> '一旦建立, 這個版面將行使您選擇的版面同樣的權限. 如果沒有選取, 新的版面在權限設置前將是不可見的.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> '如果您選擇了複製權限, 版面將行使您選擇的版面同樣的權限. 這將覆蓋您原先設置的權限. 如果沒有選取, 將保留原有權限.',
	'CREATE_FORUM'					=> '建立新版面',

	'DECIDE_MOVE_DELETE_CONTENT'		=> '刪除或移動到版面',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> '刪除子版面或移動到版面',
	'DEFAULT_STYLE'						=> '預設風格',
	'DELETE_ALL_POSTS'					=> '刪除文章',
	'DELETE_SUBFORUMS'					=> '刪除子版面和文章',
	'DISPLAY_ACTIVE_TOPICS'				=> '顯示活躍文章',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> '如果設置為是, 在選取的子版面中活躍的文章將會顯示在這個分區下.',

	'EDIT_FORUM'					=> '編輯版面',
	'ENABLE_INDEXING'				=> '允許搜尋索引',
	'ENABLE_INDEXING_EXPLAIN'		=> '如果設置為是, 這個版面的文章將被記入搜尋索引.',
	'ENABLE_POST_REVIEW'			=> '允許預覽文章',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> '如果設置為是, 當會員在編寫文章時有新的文章發佈, 會員可以預覽他們的文章. 這在交談版面中應該禁用.',
	'ENABLE_RECENT'					=> '顯示活躍文章',
	'ENABLE_RECENT_EXPLAIN'			=> '如果設置為是, 這個版面的話題將顯示在活躍文章列表中.',
	'ENABLE_TOPIC_ICONS'			=> '允許主題圖示',

	'FORUM_ADMIN'						=> '版面管理',
	'FORUM_ADMIN_EXPLAIN'				=> '在phpBB3中沒有分區, 所有都是基於版面. 每個版面可以擁有無限的子版面, 並且您可以設置哪些能發文哪些不能. (例如是否顯示為分區). 這裡您能添加, 編輯, 刪除, 鎖定, 解鎖各個版面並設置一些額外控制. 如果您的文章和主題統計失去同步, 您可以重新統計一下版面.',
	'FORUM_AUTO_PRUNE'					=> '開啟自動刪除',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> '刪除版面的主題, 在下面設置頻率/時間參數.',
	'FORUM_CREATED'						=> '版面建立完成.',
	'FORUM_DATA_NEGATIVE'				=> '刪除參數不能為負.',
	'FORUM_DESC_TOO_LONG'				=> '版面描述太長, 不能超過4000字元.',
	'FORUM_DELETE'						=> '刪除版面',
	'FORUM_DELETE_EXPLAIN'				=> '下面的表單允許您刪除一個版面. 如果這個版面可以發表文章, 您可以決定如何處置這個版面中的子版面和文章.',
	'FORUM_DELETED'						=> '版面刪除完成.',
	'FORUM_DESC'						=> '描述',
	'FORUM_DESC_EXPLAIN'				=> '任何這裡的文字都會原樣顯示.',
	'FORUM_EDIT_EXPLAIN'				=> '下面的表單允許您自定這個版面. 請注意版面管理和文章數控制要通過每個會員或群組的權限來控制.',
	'FORUM_IMAGE'						=> '版面圖示',
	'FORUM_IMAGE_EXPLAIN'				=> '和版面關聯的圖示位址, 使用討論區根目錄的相對路徑.',
	'FORUM_IMAGE_NO_EXIST'            => '設定的版面圖示不存在',
	'FORUM_LINK_EXPLAIN'				=> '會員點擊這個版面後前往的完整URL (包含協議頭, 例如 <samp>http://</samp>).',
	'FORUM_LINK_TRACK'					=> '追蹤連結指向',
	'FORUM_LINK_TRACK_EXPLAIN'			=> '記錄版面連結的點擊次數.',
	'FORUM_NAME'						=> '版面名稱',
	'FORUM_NAME_EMPTY'					=> '您必須為這個版面取個名字.',
	'FORUM_PARENT'						=> '父版面',
	'FORUM_PASSWORD'					=> '版面密碼',
	'FORUM_PASSWORD_CONFIRM'			=> '確認版面密碼',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> '您輸入了版面密碼才需要在這裡再次輸入.',
	'FORUM_PASSWORD_EXPLAIN'			=> '設置這個版面的訪問密碼, 或者使用權限系統.',
	'FORUM_PASSWORD_UNSET'				=> '移除版面密碼',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> '如果您需要移除這個版面的密碼, 請勾選此處.',
	'FORUM_PASSWORD_OLD'				=> '目前版面密碼使用的是舊的加密方式, 需要立即更改.',
	'FORUM_PASSWORD_MISMATCH'			=> '您輸入的密碼不相符.',
	'FORUM_PRUNE_SETTINGS'				=> '版面刪除設定',
	'FORUM_RESYNCED'					=> '版面 “%s” 同步完成',
	'FORUM_RULES_EXPLAIN'				=> '版面規則將在版面的任何頁面顯示.',
	'FORUM_RULES_LINK'					=> '版面規則連結',
	'FORUM_RULES_LINK_EXPLAIN'			=> '您可以在這裡輸入包含版面規則的連結. 這個設定將覆蓋版面文字規則.',
	'FORUM_RULES_PREVIEW'				=> '版面規則預覽',
	'FORUM_RULES_TOO_LONG'				=> '版面規則不能超過4000個字元.',
	'FORUM_SETTINGS'					=> '版面設定',
	'FORUM_STATUS'						=> '版面狀態',
	'FORUM_STYLE'						=> '版面風格',
	'FORUM_TOPICS_PAGE'					=> '每頁主題數',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> '如果非0, 這個數值將覆蓋預設的每頁主題數.',
	'FORUM_TYPE'						=> '版面類型',
	'FORUM_UPDATED'						=> '版面訊息更新完成.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> '您正試圖將一個擁有子版面的普通版面改變為連結。請在繼續之前將全部子版面移出，因為在您將它變為連結之後將無法看到它的子版面。',
	
	'GENERAL_FORUM_SETTINGS'	=> '版面綜合設置',

	'LINK'						=> '連結',
	'LIST_INDEX'				=> '在子版面列表中顯示',
	'LIST_INDEX_EXPLAIN'		=> '在父版面的子版面列表中顯示一個指向本版面的連結.',
	'LIST_SUBFORUMS'			=> '在圖例中顯示子版面',
	'LIST_SUBFORUMS_EXPLAIN'	=> '如果開啟此選項, 就會在首頁或其他頁面的圖例中顯示子版面的連結.',
	'LOCKED'				=> '鎖定',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> '您選取移動的目標版面不可發表文章. 請選擇其他的版面.',
	'MOVE_POSTS_TO'		=> '移動文章到',
	'MOVE_SUBFORUMS_TO'	=> '移動子版面到',

	'NO_DESTINATION_FORUM'			=> '您沒有指定移動操作的目標版面',
	'NO_FORUM_ACTION'				=> '沒有在版面處理中指定操作',
	'NO_PARENT'						=> '沒有父版面',
	'NO_PERMISSIONS'				=> '不複製權限',
	'NO_PERMISSION_FORUM_ADD'		=> '您沒有添加版面的權限.',
	'NO_PERMISSION_FORUM_DELETE'	=> '您沒有刪除版面的權限.',

	'PARENT_IS_LINK_FORUM'		=> '您指定的版面是一個版面連結. 版面連結不能包含其他的版面, 請指定其他分區或版面作為父版面.',
	'PARENT_NOT_EXIST'			=> '父版面不存在.',
	'PRUNE_ANNOUNCEMENTS'		=> '刪除公告',
	'PRUNE_STICKY'				=> '刪除置頂',
	'PRUNE_OLD_POLLS'			=> '刪除舊投票',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> '移除在文章的活躍天數內沒有新投票的投票.',
	
	'REDIRECT_ACL'	=> '下一步您可以對這個討論區 %s設置權限%s.',

	'SYNC_IN_PROGRESS'			=> '正在同步版面',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> '正在同步主題範圍 %1$d/%2$d.',

	'TYPE_CAT'			=> '分區',
	'TYPE_FORUM'		=> '版面',
	'TYPE_LINK'			=> '連結',

	'UNLOCKED'			=> '未鎖定',
));

?>