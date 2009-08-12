<?php
/**
*
* acp_profile [Chinese Traditional]
*
* @package language
* @version $Id: profile.php 8479 2008-03-29 00:22:48Z naderman $
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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> '成功添加會員自定義資料欄位.',
	'ALPHA_ONLY'			=> '只允許數字與字母',
	'ALPHA_SPACERS'			=> '數字, 字母和空格',
	'ALWAYS_TODAY'			=> '總是當前日期',

	'BOOL_ENTRIES_EXPLAIN'	=> '輸入您的選項',
	'BOOL_TYPE_EXPLAIN'		=> '定義類型, 或者是多選框, 或者是單選按鈕',

	'CHANGED_PROFILE_FIELD'		=> '會員個人資料欄位更新完成.',
	'CHARS_ANY'					=> '任何字元',
	'CHECKBOX'					=> '勾選框',
	'COLUMNS'					=> '列',
	'CP_LANG_DEFAULT_VALUE'		=> '預設值',
	'CP_LANG_EXPLAIN'			=> '欄位描述',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> '顯示給會員的欄位描述',
	'CP_LANG_NAME'				=> '顯示給會員的名稱/標題',
	'CP_LANG_OPTIONS'			=> '選項',
	'CREATE_NEW_FIELD'			=> '建立新欄位',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> '有一個或多個欄位沒有對應的翻譯. 請輸入對應的翻譯並點擊 &quot;翻譯&quot; 連結.',

	'DEFAULT_ISO_LANGUAGE'			=> '預設語系 [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> '尚未輸入此欄位對應的預設語系項目.',
	'DEFAULT_VALUE'					=> '預設值',
	'DELETE_PROFILE_FIELD'			=> '刪除資料欄位',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> '您確認刪除這個資料欄位嗎?',
	'DISPLAY_AT_PROFILE'			=> '在會員的控制面板中顯示',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> '會員可以在會員控制面板中更改這個資料欄.',
	'DISPLAY_AT_REGISTER'			=> '註冊時顯示',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> '啟用這個選項後, 會員註冊時會顯示此欄位.',
	'DISPLAY_PROFILE_FIELD'			=> '會員公開資料中顯示',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> '在查看文章, 查看資料, 查看會員列表時顯示, 如果在負載設置中啟用. 預設只顯示在查看會員資料中.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> '輸入您的選項, 一行一個',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> '請注意您可以更改選項內容, 也可以在最後添加新選項, 但是不推薦在現有的選項中間添加新選項或刪除選項 - 這樣可能會給會員顯示錯誤的選項. 刪除選項時需要從最後一個選項開始, 選過這個選項的會員將自動重新設定到預設選項上.',
	'EMPTY_FIELD_IDENT'				=> '欄位定義空白',
	'EMPTY_USER_FIELD_NAME'			=> '請輸入欄位名稱/標題',
	'ENTRIES'						=> '項目',
	'EVERYTHING_OK'					=> '一切正常',

	'FIELD_BOOL'				=> '正反判斷 (是/否)',
	'FIELD_DATE'				=> '日期',
	'FIELD_DESCRIPTION'			=> '欄位描述',
	'FIELD_DESCRIPTION_EXPLAIN'	=> '顯示給會員的欄位描述',
	'FIELD_DROPDOWN'			=> '下拉框',
	'FIELD_IDENT'				=> '欄位定義',
	'FIELD_IDENT_ALREADY_EXIST'	=> '選擇的欄位定義已經存在, 請選擇另外一個名稱.',
	'FIELD_IDENT_EXPLAIN'		=> '欄位定義是在資料庫和風格中區分欄位的標記.',
	'FIELD_INT'					=> '數字',
	'FIELD_LENGTH'				=> '輸入框長度',
	'FIELD_NOT_FOUND'			=> '資料欄位未找到.',
	'FIELD_STRING'				=> '單行文字輸入框',
	'FIELD_TEXT'				=> '文本編輯框',
	'FIELD_TYPE'				=> '欄位類型',
	'FIELD_TYPE_EXPLAIN'		=> '設置欄位類型後將不可修改.',
	'FIELD_VALIDATION'			=> '欄位驗證',
	'FIRST_OPTION'				=> '第一選項',

	'HIDE_PROFILE_FIELD'			=> '隱藏資料欄位',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> '只有管理員和版主可以查看/填寫這個欄位. 如果未啟用顯示在用戶控制面板選項, 會員將無法看見這個欄位, 并且只能由管理員修改.',

	'INVALID_CHARS_FIELD_IDENT'	=> '欄位定義只能包含小寫 a-z 和 _',
	'INVALID_FIELD_IDENT_LEN'	=> '欄位定義字元長度不能超過17',
	'ISO_LANGUAGE'				=> '語系 [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> '語系特定選項 [<strong>%s</strong>]',

	'MAX_FIELD_CHARS'		=> '最大字元串長度',
	'MAX_FIELD_NUMBER'		=> '最大允許數字',
	'MIN_FIELD_CHARS'		=> '最小字元串長度',
	'MIN_FIELD_NUMBER'		=> '最小允許數字',

	'NO_FIELD_ENTRIES'			=> '沒有定義的項目',
	'NO_FIELD_ID'				=> '沒有指定欄位ID.',
	'NO_FIELD_TYPE'				=> '沒有指定欄位類型.',
	'NO_VALUE_OPTION'			=> '空白輸入的等價選項',
	'NO_VALUE_OPTION_EXPLAIN'	=> '空項目的值. 如果欄位是必填的而且會員選擇了這個選項, 會員將得到一個錯誤提示',
	'NUMBERS_ONLY'				=> '只允許數字 (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> '基本選項',
	'PROFILE_FIELD_ACTIVATED'	=> '資料欄位啟用完成.',
	'PROFILE_FIELD_DEACTIVATED'	=> '資料欄位已經凍結.',
	'PROFILE_LANG_OPTIONS'		=> '特定語系選項',
	'PROFILE_TYPE_OPTIONS'		=> '特定資料類型選項',

	'RADIO_BUTTONS'				=> '單選框',
	'REMOVED_PROFILE_FIELD'		=> '資料欄位刪除完成.',
	'REQUIRED_FIELD'			=> '必填欄位',
	'REQUIRED_FIELD_EXPLAIN'	=> '強制會員填寫的欄位. 這將在註冊過程和會員控制面板中顯示這個欄位, 如果設定為不顯示于註冊過程, 則在會員編輯資料時要求填寫.',
	'ROWS'						=> '行',

	'SAVE'							=> '保存',
	'SECOND_OPTION'					=> '第二選項',
	'STEP_1_EXPLAIN_CREATE'			=> '這裡您可以輸入新資料欄的第一個基本參數, 以便於下一步填寫和設置更詳細的欄位資料.',
	'STEP_1_EXPLAIN_EDIT'			=> '這裡您可以更改資料欄的基本參數. 相關的選項將在第二步重新計算.',
	'STEP_1_TITLE_CREATE'			=> '添加資料欄',
	'STEP_1_TITLE_EDIT'				=> '編輯資料欄',
	'STEP_2_EXPLAIN_CREATE'			=> '這裡您可以設置一些綜合選項. 進一步您可以預覽新欄位, 您需要多次調試以使欄位符合自己的要求.',
	'STEP_2_EXPLAIN_EDIT'			=> '這裡您可以更改一些綜合選項. 進一步您可以預覽更改的欄位, 多次調試直至滿意.<br /><strong>請注意更改資料欄將不會影響會員已經輸入的資料.</strong>',
	'STEP_2_TITLE_CREATE'			=> '特定資料類型選項',
	'STEP_2_TITLE_EDIT'				=> '特定資料類型選項',
	'STEP_3_EXPLAIN_CREATE'			=> '因為討論區安裝了多種語系, 您必須填寫下面的語系設置. 資料欄將工作於預設的語系下, 您可以以後再完成剩下的語系設置.',
	'STEP_3_EXPLAIN_EDIT'			=> '因為討論區安裝了多種語系, 您必須填寫下面的語系設置. 資料欄將工作於預設的語系下, 您可以以後再完成剩下的語系設置.',
	'STEP_3_TITLE_CREATE'			=> '保留語系定義',
	'STEP_3_TITLE_EDIT'				=> '語系定義',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> '輸入預設顯示字元. 如果您希望開始顯示空白則留空.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> '輸入顯示的預設文字和預設值. 如果留空則顯示空白.',
	'TRANSLATE'						=> '翻譯',

	'USER_FIELD_NAME'	=> '顯示給會員的欄位名稱/標題',

	'VISIBILITY_OPTION'				=> '可視化選項',
));

?>