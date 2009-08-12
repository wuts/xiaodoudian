<?php
/**
*
* acp_database [Chinese Traditional]
*
* @package language
* @version $Id: database.php 8479 2008-03-29 00:22:48Z naderman $
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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> '這裡您可以備份所有phpBB相關的資料. 您可以將備份保存在 <samp>store/</samp> 資料夾或者直接下載. 如果您的伺服器支援檔案壓縮, 您可以將檔案壓縮成好幾種格式.',
	'ACP_RESTORE_EXPLAIN'	=> '這將使用備份檔案進行一次所有phpBB資料表的完整還原. 如果您的伺服器支援您可以使用gzip或bzip2格式壓縮的純文字檔案. <strong>警告</strong> 這將覆蓋所有現在的資料. 還原可能需要一段很長的時間, 在完成前請不要動這個頁面.',

	'BACKUP_DELETE'		=> '備份檔案已經被刪除.',
	'BACKUP_INVALID'	=> '選擇的備份檔案無效.',
	'BACKUP_OPTIONS'	=> '備份選項',
	'BACKUP_SUCCESS'	=> '備份建立完成.',
	'BACKUP_TYPE'		=> '備份類型',

	'DATABASE'			=> '資料庫工具',
	'DATA_ONLY'			=> '僅資料',
	'DELETE_BACKUP'		=> '刪除備份',
	'DELETE_SELECTED_BACKUP'	=> '您確認要刪除選取的備份嗎?',
	'DESELECT_ALL'		=> '取消全部',
	'DOWNLOAD_BACKUP'	=> '下載備份',

	'FILE_TYPE'			=> '檔案類型',
	'FULL_BACKUP'		=> '完整',

	'RESTORE_FAILURE'		=> '備份檔案已損壞.',
	'RESTORE_OPTIONS'		=> '還原選項',
	'RESTORE_SUCCESS'		=> '資料庫已經成功還原.<br /><br />您的討論區回到了備份前的狀態.',

	'SELECT_ALL'			=> '選擇全部',
	'SELECT_FILE'			=> '選擇一個檔案',
	'START_BACKUP'			=> '開始備份',
	'START_RESTORE'			=> '開始還原',
	'STORE_AND_DOWNLOAD'	=> '儲存並下載',
	'STORE_LOCAL'			=> '本地儲存檔案',
	'STRUCTURE_ONLY'		=> '僅結構',

	'TABLE_SELECT'		=> '資料表選擇',
	'TABLE_SELECT_ERROR'=> '您必須選取至少一個資料表.',
));

?>