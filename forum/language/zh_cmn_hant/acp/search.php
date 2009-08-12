<?php
/**
*
* acp_search [Chinese Traditional]
*
* @package language
* @version $Id: search.php 8479 2008-03-29 00:22:48Z naderman $
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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> '這裡您可以管理內容索引. 因為一般只使用一個後台, 您可以刪除所有不用的索引. 在改變搜尋設置(例如最小/最大字元串長度)後, 建議重新產生索引以體現修改.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> '這裡您可以設置如何使用搜尋和檢索文章. 您可以設置選項限制搜尋動作的處理器負載. 一部分設定和和搜尋引擎的設定是一樣的.',

	'COMMON_WORD_THRESHOLD'					=> '詞頻閾值',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> '在所有的文章中都頻繁出現的單詞將被識別為高頻詞. 高頻詞在搜尋中將被忽略. 設置0則取消這項功能. 只有當文章數大於100時這個設置才能生效.',
	'CONFIRM_SEARCH_BACKEND'				=> '您確認更換搜尋後端嗎? 更換後您需要重新建立索引. 如果您不打算再切換回舊的後端, 您可以刪除原先的索引以釋放空間.',
	'CONTINUE_DELETING_INDEX'				=> '繼續前次的索引刪除',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> '存在一個已經開始的索引刪除. 要訪問索引頁面您必須先完成它.',
	'CONTINUE_INDEXING'						=> '繼續前次的索引產生',
	'CONTINUE_INDEXING_EXPLAIN'				=> '存在一個已經開始的索引產生. 要訪問索引頁面您必須先完成它.',
	'CREATE_INDEX'							=> '建立索引',

	'DELETE_INDEX'							=> '刪除索引',
	'DELETING_INDEX_IN_PROGRESS'			=> '刪除索引進行中',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> '搜尋後端正在清除索引, 這需要幾分鐘的時間.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_VERSION'	=> 'MySQL全文檢索後端只能在MySQL4或更高的版本中使用.',
	'FULLTEXT_MYSQL_NOT_MYISAM'				=> 'MySQL全文檢索只能在MyISAM格式表單中使用.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> '索引文章總數',
	'FULLTEXT_MYSQL_MBSTRING'				=> '支援非拉丁 UTF-8 字元使用mbstring:',
	'FULLTEXT_MYSQL_PCRE'					=> '支援非拉丁 UTF-8 字元使用 PCRE:',
	'FULLTEXT_MYSQL_MBSTRING_EXPLAIN'		=> '如果PCRE沒有unicode字元屬性, 搜尋後端會嘗試使用mbstring的正則表達式機制.',
	'FULLTEXT_MYSQL_PCRE_EXPLAIN'			=> '這個搜尋後端需要使用PCRE unicode字元屬性, 這只在PHP 版本 4.4, 5.1 或更高中可用, 如果您需要搜尋非拉丁字元.',

	'GENERAL_SEARCH_SETTINGS'				=> '綜合搜尋設定',
	'GO_TO_SEARCH_INDEX'					=> '前往索引頁面',

	'INDEX_STATS'							=> '索引統計',
	'INDEXING_IN_PROGRESS'					=> '索引進行中',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> '搜尋後端正在檢索討論區的所有文章. 取決於討論區資料量的大小, 這可能需要幾分鐘的時間.',

	'LIMIT_SEARCH_LOAD'						=> '搜尋頁面系統負載限制',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> '如果一分鐘內系統負載超過這個值, 搜尋頁面將不可用, 1.0 約等於100% 的處理器負載. 這個功能只在基於UNIX/Linux系統的伺服器上有效.',

	'MAX_SEARCH_CHARS'						=> '索引的最大字元長度',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> '大於這個長度的字詞將不會被檢索.',
	'MAX_NUM_SEARCH_KEYWORDS'            => '搜尋的關鍵詞個數上限',
    'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'      => '用于限制會員搜尋時使用的關鍵詞個數. 填寫0則不作限制.',
	'MIN_SEARCH_CHARS'						=> '索引的最小字元長度',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> '小於這個長度的字詞將不會被檢索.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> '最小會員名稱長度',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> '會員在搜尋作者姓名時必須輸入的字元串長度. 如果作者會員名稱長度小於這個數字, 您仍然可以輸入完整會員名稱搜尋會員的文章.',

	'PROGRESS_BAR'							=> '進度條',

	'SEARCH_GUEST_INTERVAL'					=> '訪客搜尋間隔',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> '在多次搜尋中訪客必須等待的間隔時間(秒).',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> '所有id不高於 %1$d 的文章都已經建立索引, 這一操作中處理了 %2$d 篇文章.<br />速度接近 %3$.1f 文章每秒.<br />索引正在進行中…',
	'SEARCH_INDEX_DELETE_REDIRECT'			=> '所有id不高於 %1$d 的文章都已經從搜尋索引中刪除.<br />刪除正在進行中…',
	'SEARCH_INDEX_CREATED'					=> '已經對資料庫中的所有文章建立了索引.',
	'SEARCH_INDEX_REMOVED'					=> '成功清除了這個後端的索引資料.',
	'SEARCH_INTERVAL'						=> '會員搜尋間隔',
	'SEARCH_INTERVAL_EXPLAIN'				=> '會員搜尋的最短間隔時間(秒).',
	'SEARCH_STORE_RESULTS'					=> '搜尋結果快取存活時間',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> '快取的結果在這個時間(秒)後將失效. 設置為0則禁用快取.',
	'SEARCH_TYPE'							=> '搜尋後端',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB允許您選擇用於全文檢索的後端類型. 預設後端是phpBB自帶的全文檢索.',
	'SWITCHED_SEARCH_BACKEND'				=> '您已經更換了檢索後端. 要使用新的後端, 您必須確認新的後端包含建好的索引.',

	'TOTAL_WORDS'							=> '已檢索關鍵詞總數',
	'TOTAL_MATCHES'							=> '與文章索引關聯的關鍵詞總數',

	'YES_SEARCH'							=> '啟用檢索功能',
	'YES_SEARCH_EXPLAIN'					=> '允許會員使用搜尋功能, 包括會員搜尋.',
	'YES_SEARCH_UPDATE'						=> '啟用全文更新',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> '當文章發表時更新全文索引, 如果禁用檢索這個功能將停用.',
));

?>