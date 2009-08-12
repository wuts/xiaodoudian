<?php
/** 
*
* search [Chinese Traditional]
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
	'ALL_AVAILABLE'			=> '所有的',
	'ALL_RESULTS'			=> '所有文章',

	'DISPLAY_RESULTS'		=> '顯示結果為',

	'FOUND_SEARCH_MATCH'		=> '有 %d 筆資料符合您搜尋的條件',
	'FOUND_SEARCH_MATCHES'		=> '有 %d 筆資料符合您搜尋的條件',
	'FOUND_MORE_SEARCH_MATCHES'	=> '多於 %d 筆資料符合您搜尋的條件',

	'GLOBAL'				=> '全站公告',

	'IGNORED_TERMS'			=> '忽略',
	'IGNORED_TERMS_EXPLAIN'	=> '您輸入的以下字詞將被忽略：<strong>%s</strong>',

	'JUMP_TO_POST'			=> '跳到文章',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> '您需要登入後才能檢視您的文章.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'   => '您輸入了過多的檢索詞. 允許搜尋的最多關鍵詞為 %1$d 個.',
	
	'NO_KEYWORDS'			=> '您必須指定至少一個關鍵詞，且每個關鍵詞必須為 %d 到 %d 個字元（包含萬用字元）。',
	'NO_RECENT_SEARCHES'	=> '最近沒有執行文章搜尋',
	'NO_SEARCH'				=> '對不起您不能使用搜尋系統。',
	'NO_SEARCH_RESULTS'		=> '沒有相關主題或文章符合您要搜尋的條件。',
	'NO_SEARCH_TIME'		=> '對不起您暫時不能使用搜尋功能，請幾分鐘後再試。',
	'WORD_IN_NO_POST'		=> '沒有搜尋到任何結果，因為 <strong>%s</strong> 不在任何文章內。',
	'WORDS_IN_NO_POST'		=> '沒有搜尋到任何結果，因為 <strong>%s</strong> 不在任何文章內。',

	'POST_CHARACTERS'		=> '個字元',

	'RECENT_SEARCHES'		=> '最近的搜尋結果',
	'RESULT_DAYS'			=> '時間範圍',
	'RESULT_SORT'			=> '將搜尋結果按此排序',
	'RETURN_FIRST'			=> '搜尋結果顯示',
	'RETURN_TO_SEARCH_ADV'	=> '返回進階搜尋',

	'SEARCHED_FOR'				=> '使用搜尋條件',
	'SEARCHED_TOPIC'			=> '搜尋主題',
	'SEARCH_ALL_TERMS'			=> '搜尋符合以上所有關鍵字的資料',
	'SEARCH_ANY_TERMS'			=> '搜尋符合任一所有關鍵字的資料',
	'SEARCH_AUTHOR'				=> '搜尋發表人',
	'SEARCH_AUTHOR_EXPLAIN'		=> '使用 * 作為萬用字元。',
	'SEARCH_FIRST_POST'			=> '只檢查主題的第一篇文章',
	'SEARCH_FORUMS'				=> '搜尋版面',
	'SEARCH_FORUMS_EXPLAIN'		=> '選擇您想搜尋的版面。如果您打開了“搜尋子版面”選項，選取版面的子版面也會被一併搜尋。',
	'SEARCH_IN_RESULTS'			=> '搜尋這些結果',
	'SEARCH_KEYWORDS_EXPLAIN'	=> '在必須存在的搜尋詞前放置 <strong>+</strong> 號，在必須不存在的搜尋詞前面放置 <strong>-</strong> 號。如果一系列搜尋詞中只需要出現一個，在括號中間放置搜尋詞列表，詞與詞間用 <strong>|</strong> 隔開。使用 * 作為萬用字元。',
	'SEARCH_MSG_ONLY'			=> '只搜尋文章內容',
	'SEARCH_OPTIONS'			=> '搜尋選項',
	'SEARCH_QUERY'				=> '搜尋文章',
	'SEARCH_SUBFORUMS'			=> '搜尋子版面',
	'SEARCH_TITLE_MSG'			=> '搜尋文章標題和內容',
	'SEARCH_TITLE_ONLY'			=> '只搜尋文章標題',
	'SEARCH_WITHIN'				=> '搜尋範圍',
	'SORT_ASCENDING'			=> '依序遞增',
	'SORT_AUTHOR'				=> '作者',
	'SORT_DESCENDING'			=> '依序遞減',
	'SORT_FORUM'				=> '版面',
	'SORT_POST_SUBJECT'			=> '文章標題',
	'SORT_TIME'					=> '發表時間',

	'TOO_FEW_AUTHOR_CHARS'	=> '作者名字必須至少 %d 個字元。',
));

?>