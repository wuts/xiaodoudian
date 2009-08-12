<?php
/**
*
* acp_prune [Chinese Traditional]
*
* @package language
* @version $Id: prune.php 8479 2008-03-29 00:22:48Z naderman $
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

// User pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> '這裡您可以將討論區中的會員刪除（或者凍結）。 你可以有多種形式搜尋，然後刪除。如：發文數量和最後一次的時間等等... 這些方式可以自由組合， 如：你可以選用2001年1月1日之前發文量少於10篇的會員來刪除。 你也可以選擇批量刪除，只需要將會員名單放進刪除欄位中即可。 此功能須小心使用！ 一旦會員被刪除後將無法再恢復。',

	'DEACTIVATE_DELETE'			=> '凍結或者刪除',
	'DEACTIVATE_DELETE_EXPLAIN'	=> '選擇凍結會員或者刪除會員，註：此操作無法恢復！',
	'DELETE_USERS'				=> '刪除',
	'DELETE_USER_POSTS'			=> '被刪除會員所發表的文章也刪除',
	'DELETE_USER_POSTS_EXPLAIN' => '移動被刪除會員發表的文章。若會員被凍結將不會被移動。',

	'JOINED_EXPLAIN'			=> '輸入日期，使用 <kbd>YYYY-MM-DD</kbd> 格式。',

	'LAST_ACTIVE_EXPLAIN'		=> '輸入日期，使用<kbd>YYYY-MM-DD</kbd> 格式。',

	'PRUNE_USERS_LIST'				=> '將被刪除的會員',
	'PRUNE_USERS_LIST_DELETE'		=> '使用選取的條件, 如下的會員帳號將被刪除.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> '使用選取的條件, 如下的會員帳號將被凍結.',

	'SELECT_USERS_EXPLAIN'		=> '在這裡輸入特定會員，他們將會用於上述的設定標準。',

	'USER_DEACTIVATE_SUCCESS'	=> '被選擇的會員已經成功凍結',
	'USER_DELETE_SUCCESS'		=> '被選擇的會員已經成功刪除',
	'USER_PRUNE_FAILURE'		=> '沒有適合條件的會員.',

	'WRONG_ACTIVE_JOINED_DATE'	=> '輸入的日期錯誤. 正確的格式是 <kbd>YYYY-MM-DD</kbd>.',
));

// Forum Pruning
$lang = array_merge($lang, array(
	'ACP_PRUNE_FORUMS_EXPLAIN'	=> '這將刪除所有在規定的時間內沒有新回覆的主題. 若你不輸入數字, 那麼所有的文章將會被刪除. 預設情況下, 這不會刪除投票依然在進行的主題, 置頂的主題和公告.',

	'FORUM_PRUNE'		=> '刪除版面',

	'NO_PRUNE'			=> '沒有版面被刪除',

	'SELECTED_FORUM'	=> '已選版面',
	'SELECTED_FORUMS'	=> '已選版面',

	'POSTS_PRUNED'					=> '文章已刪除',
	'PRUNE_ANNOUNCEMENTS'			=> '刪除公告',
	'PRUNE_FINISHED_POLLS'			=> '刪除已關閉的投票',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> '移除已經結束的投票主題',
	'PRUNE_FORUM_CONFIRM'			=> '您確認要以指定的設置刪除選取的版面嗎? 一旦開始刪除, 滿足條件的文章和主題將被永遠刪除.',
	'PRUNE_NOT_POSTED'				=> '從最後發表的天數算起',
	'PRUNE_NOT_VIEWED'				=> '從最後查看的天數算起',
	'PRUNE_OLD_POLLS'				=> '刪除較舊的投票',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> '刪除在規定的時間內沒有新投票的主題',
	'PRUNE_STICKY'					=> '刪除置頂主題',
	'PRUNE_SUCCESS'					=> '版面刪除成功',

	'TOPICS_PRUNED'		=> '主題已刪除',
));

?>