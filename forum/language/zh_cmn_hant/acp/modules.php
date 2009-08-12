<?php
/**
*
* acp_modules [Chinese Traditional]
*
* @package language
* @version $Id: modules.php 8479 2008-03-29 00:22:48Z naderman $
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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> '這裡您可以管理各種模組. 請注意管理員控制面板使用的是三層選單結構 (分類 -> 分類 -> 模組) 而其他使用的是兩層選單結構 (分類 -> 模組) . 請同樣注意的是您有可能會把自己給鎖在模組外面, 如果您刪除或禁用了涉及模組自身管理的模組.',
	'ADD_MODULE'					=> '添加模組',
	'ADD_MODULE_CONFIRM'			=> '您確認用選取的模式添加選取的模組嗎?',
	'ADD_MODULE_TITLE'				=> '添加模組',

	'CANNOT_REMOVE_MODULE'	=> '無法刪除模組, 因為有下層的引用. 請先刪除或移除所有下層引用.',
	'CATEGORY'				=> '分類',
	'CHOOSE_MODE'			=> '選擇模組模式',
	'CHOOSE_MODE_EXPLAIN'	=> '選擇使用的模組模式.',
	'CHOOSE_MODULE'			=> '選擇模組',
	'CHOOSE_MODULE_EXPLAIN'	=> '選擇這個模組使用的檔案.',
	'CREATE_MODULE'			=> '建立新模組',

	'DEACTIVATED_MODULE'	=> '凍結模組',
	'DELETE_MODULE'			=> '刪除模組',
	'DELETE_MODULE_CONFIRM'	=> '您確認刪除這個模組嗎?',

	'EDIT_MODULE'			=> '編輯模組',
	'EDIT_MODULE_EXPLAIN'	=> '這裡您可以輸入模組特有設置',

	'HIDDEN_MODULE'			=> '隱藏模組',

	'MODULE'					=> '模組',
	'MODULE_ADDED'				=> '模組添加完成.',
	'MODULE_DELETED'			=> '模組移除完成.',
	'MODULE_DISPLAYED'			=> '顯示模組',
	'MODULE_DISPLAYED_EXPLAIN'	=> '如果您不希望顯示這個模組又想使用它, 設置為否.',
	'MODULE_EDITED'				=> '模組編輯完成.',
	'MODULE_ENABLED'			=> '模組啟用',
	'MODULE_LANGNAME'			=> '模組語言名稱',
	'MODULE_LANGNAME_EXPLAIN'	=> '輸入顯示的模組名稱. 如果語言由語系檔提供請使用語系常數.',
	'MODULE_TYPE'				=> '模組類型',

	'NO_CATEGORY_TO_MODULE'	=> '無法轉變分類為模組. 請先刪除或移除所有子模組.',
	'NO_MODULE'				=> '沒有發現模組.',
	'NO_MODULE_ID'			=> '沒有指定模組ID.',
	'NO_MODULE_LANGNAME'	=> '沒有指定模組語言.',
	'NO_PARENT'				=> '沒有父類別',

	'PARENT'				=> '父類別',
	'PARENT_NO_EXIST'		=> '父類別不存在.',

	'SELECT_MODULE'			=> '選擇一個模組',
));

?>