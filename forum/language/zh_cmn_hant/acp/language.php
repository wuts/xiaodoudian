<?php
/**
*
* acp_language [Chinese Traditional]
*
* @package language
* @version $Id: language.php 8479 2008-03-29 00:22:48Z naderman $
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
	'ACP_FILES'						=> '管理語系檔',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> '這裡您可以安裝/刪除語系檔',

	'EMAIL_FILES'			=> 'Email 檔案',

	'FILE_CONTENTS'				=> '檔案內容',
	'FILE_FROM_STORAGE'			=> '儲存資料夾中的檔案',

	'HELP_FILES'				=> '說明檔案',

	'INSTALLED_LANGUAGE_PACKS'	=> '已安裝的語系檔',
	'INVALID_LANGUAGE_PACK'		=> '選取的語系檔無效. 請校驗語系檔並重新上傳.',
	'INVALID_UPLOAD_METHOD'		=> '選取的上傳方式無效, 請選擇其他方式.',

	'LANGUAGE_DETAILS_UPDATED'			=> '語言細節更新完成.',
	'LANGUAGE_ENTRIES'					=> '語言項目',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> '這裡您可以改變現有的語系檔或翻譯尚未翻譯的項目.<br /><strong>注意:</strong> 您修正語系檔後, 改動將儲存在一個單獨的資料夾中用於下載. 改變對於會員是不可見的, 除非您上傳覆蓋原來的語系檔.',
	'LANGUAGE_FILES'					=> '語系檔',
	'LANGUAGE_KEY'						=> '語言字鍵',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> '這個語系檔已經安裝過了.',
	'LANGUAGE_PACK_DELETED'				=> '語系檔 <strong>%s</strong> 已經被刪除. 所有使用這個語系的會員將被重新設定到討論區預設語系.',
	'LANGUAGE_PACK_DETAILS'				=> '語系檔細節',
	'LANGUAGE_PACK_INSTALLED'			=> '語系檔 <strong>%s</strong> 安裝完成.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> '本地名稱',
	'LANGUAGE_PACK_NAME'				=> '名稱',
	'LANGUAGE_PACK_NOT_EXIST'			=> '選取的語系檔不存在.',
	'LANGUAGE_PACK_USED_BY'				=> '使用者 (包括機器人)',
	'LANGUAGE_VARIABLE'					=> '語系變量',
	'LANG_AUTHOR'						=> '語系檔作者',
	'LANG_ENGLISH_NAME'					=> '英文名稱',
	'LANG_ISO_CODE'						=> 'ISO 代號',
	'LANG_LOCAL_NAME'					=> '本地名稱',

	'MISSING_LANGUAGE_FILE'		=> '找不到語系檔: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> '找不到語系變量',
	'MODS_FILES'				=> '外掛的語系檔',

	'NO_FILE_SELECTED'				=> '您沒有指定一個語系檔.',
	'NO_LANG_ID'					=> '您沒有指定一個語系檔.',
	'NO_REMOVE_DEFAULT_LANG'		=> '您不能刪除預設的語系檔.<br />如果您確實想刪除它, 請先設置另一種語系為預設語系.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> '沒有未安裝的語系檔',

	'REMOVE_FROM_STORAGE_FOLDER'		=> '從儲存資料夾種刪除',

	'SELECT_DOWNLOAD_FORMAT'	=> '選擇下載格式',
	'SUBMIT_AND_DOWNLOAD'		=> '提交並下載檔案',
	'SUBMIT_AND_UPLOAD'			=> '提交並上傳檔案',

	'THOSE_MISSING_LANG_FILES'			=> '位於 %s 語系資料夾中的語系檔缺少如下檔案',
	'THOSE_MISSING_LANG_VARIABLES'		=> '在 <strong>%s</strong> 語系檔中缺少如下語系變量',

	'UNINSTALLED_LANGUAGE_PACKS'	=> '未安裝的語系檔',

	'UNABLE_TO_WRITE_FILE'		=> '檔案無法寫入 %s.',
	'UPLOAD_COMPLETED'			=> '上傳完成.',
	'UPLOAD_FAILED'				=> '上傳因為未知的原因失敗. 您可能需要手動替換相關檔案.',
	'UPLOAD_METHOD'				=> '上傳方式',
	'UPLOAD_SETTINGS'			=> '上傳設定',

	'WRONG_LANGUAGE_FILE'		=> '選取的語系檔無效.',
));

?>