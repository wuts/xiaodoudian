<?php
/**
*
* acp_attachments [Chinese Traditional]
*
* @package language
* @version $Id: attachments.php 8555 2008-05-15 14:10:11Z Kellanved $
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
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> '這裡您可以配置附加檔案和相關的附加檔案分類.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> '這裡您可以添加, 刪除, 修改或禁用副檔名群組. 選項包括設定附加檔案類別, 更改下載機制和定義附加檔案群組的簡明圖示.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> '這裡您可以管理您允許的附加檔案副檔名. 要啟用某個副檔名, 請到副檔名類別管理面板. 請注意不要允許 Scripting 副檔名 (例如 <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>等類型…)',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> '這裡您可以看見附加檔案上傳目錄中存在但是沒有發表在文章中的檔案. 這很可能因為會員添加了附加檔案但是最後沒提交文章. 您可以刪除這些附加檔案或者將其添加到存在的文章中. 添加附加檔案到文章中需要一個有效的文章ID, 您需要自己添加這個ID, 這個功能主要是幫助那些希望通過其他方式上傳檔案的人們, 可以把附加檔案(通常會很大)添加到已經發表的文章中.',
	'ADD_EXTENSION'						=> '添加副檔名',
	'ADD_EXTENSION_GROUP'				=> '添加副檔名群組',
	'ADMIN_UPLOAD_ERROR'				=> '添加檔案中出錯: %s',
	'ALLOWED_FORUMS'					=> '允許的版面',
	'ALLOWED_FORUMS_EXPLAIN'			=> '允許在選取的版面中發表指定的附加檔案',
	'ALLOWED_IN_PM_POST'				=> '允許',
	'ALLOW_ATTACHMENTS'					=> '允許附加檔案',
	'ALLOW_ALL_FORUMS'					=> '所有版面中允許',
	'ALLOW_IN_PM'						=> '私人訊息中允許',
	'ALLOW_PM_ATTACHMENTS'				=> '允許在私人訊息中添加附加檔案',
	'ALLOW_SELECTED_FORUMS'				=> '只允許在下列選取的版面',
	'ASSIGNED_EXTENSIONS'				=> '指定的副檔名',
	'ASSIGNED_GROUP'					=> '指定的副檔名群組',
	'ATTACH_EXTENSIONS_URL'				=> '副檔名',
	'ATTACH_EXT_GROUPS_URL'				=> '副檔名群組',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> '附加檔案最大尺寸',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> '每個附加檔案的最大尺寸, 0表示無限制.',
	'ATTACH_MAX_PM_FILESIZE'			=> '私人訊息附加檔案的最大尺寸',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> '每個會員訊息附加檔案的大小上限, 0表示無限制.',
	'ATTACH_ORPHAN_URL'					=> '幽靈檔案',
	'ATTACH_POST_ID'					=> '文章ID',
	'ATTACH_QUOTA'						=> '合計附加檔案空間',
	'ATTACH_QUOTA_EXPLAIN'				=> '整個討論區可用的最大附加檔案空間, 0表示無限制.',
	'ATTACH_TO_POST'					=> '添加附加檔案到文章',

	'CAT_FLASH_FILES'			=> 'Flash檔案',
	'CAT_IMAGES'				=> '圖片',
	'CAT_QUICKTIME_FILES'		=> 'Quicktime多媒體檔案',
	'CAT_RM_FILES'				=> 'RealMedia多媒體檔案',
	'CAT_WM_FILES'				=> 'Windows Media多媒體檔案',
	'CHECK_CONTENT'				=> '檢查附加檔案',
	'CHECK_CONTENT_EXPLAIN'		=> '某些瀏覽器會被一些檔案誤導至錯誤的檔案類型. 此設定確保此類檔案不會被上載.',
	'CREATE_GROUP'				=> '建立新類別',
	'CREATE_THUMBNAIL'			=> '建立縮略圖',
	'CREATE_THUMBNAIL_EXPLAIN'	=> '在所有可能的情況下建立縮略圖.',

	'DEFINE_ALLOWED_IPS'			=> '設置允許的IP位址/主機',
	'DEFINE_DISALLOWED_IPS'			=> '設置封鎖的IP位址/主機',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> '設置多個IP或主機, 請使用多行輸入. 設置IP位址範圍, 請在起止間用破折號 (-), 萬用字元請用 * 號',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> '您可以在瀏覽器中使用合適的鍵盤和滑鼠操作組合刪除 (或 取消排除) 多個IP位址, 排除的IP位址背景為藍色.',
	'DISPLAY_INLINED'				=> '文章中插入圖片',
	'DISPLAY_INLINED_EXPLAIN'		=> '如果設置為否, 圖片將顯示為一個連結.',
	'DISPLAY_ORDER'					=> '附加檔案顯示順序',
	'DISPLAY_ORDER_EXPLAIN'			=> '按時間顯示附加檔案.',
	
	'EDIT_EXTENSION_GROUP'			=> '編輯副檔名類別',
	'EXCLUDE_ENTERED_IP'			=> '選取這個以排除輸入的IP位址/主機.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> '從允許的IP位址/主機中排除IP',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> '從封鎖的IP位址/主機中排除IP',
	'EXTENSIONS_UPDATED'			=> '副檔名更新完成',
	'EXTENSION_EXIST'				=> '副檔名 %s 已經存在',
	'EXTENSION_GROUP'				=> '副檔名類別',
	'EXTENSION_GROUPS'				=> '副檔名類別',
	'EXTENSION_GROUP_DELETED'		=> '副檔名類別刪除完成.',
	'EXTENSION_GROUP_EXIST'			=> '副檔名類別 %s 已經存在',

	'GO_TO_EXTENSIONS'		=> '前往副檔名管理界面',
	'GROUP_NAME'			=> '類別名稱',

	'IMAGE_LINK_SIZE'			=> '圖片連結尺寸',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> '當圖片大於這個時在文章中插入的圖片會顯示為一個連結. 要禁用這個功能請將值設為長 0px 寬 0px.',
	'IMAGICK_PATH'				=> 'Imagemagick路徑',
	'IMAGICK_PATH_EXPLAIN'		=> 'Imagemagick程式的完整路徑, 例如 <samp>/usr/bin/</samp>',

	'MAX_ATTACHMENTS'				=> '每篇文章的最大附加檔案數量',
	'MAX_ATTACHMENTS_PM'			=> '每個訊息的最大附加檔案數量',
	'MAX_EXTGROUP_FILESIZE'			=> '最大檔案尺寸',
	'MAX_IMAGE_SIZE'				=> '最大圖片尺寸',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> '圖片附加檔案的最大尺寸. 值都設為0px將禁用這個功能.',
	'MAX_THUMB_WIDTH'				=> '縮略圖的最大寬度(像素值)',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> '產生的縮略圖將不會超過這裡設置的寬度',
	'MIN_THUMB_FILESIZE'			=> '最小縮略尺寸',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> '當圖片尺寸小於這個時不建立縮略圖.',
	'MODE_INLINE'					=> '圖文混排',
	'MODE_PHYSICAL'					=> '物理',

	'NOT_ALLOWED_IN_PM'			=> '只在文章中允許',
	'NOT_ALLOWED_IN_PM_POST'	=> '不允許',
	'NOT_ASSIGNED'				=> '沒有指定',
	'NO_EXT_GROUP'				=> '無',
	'NO_EXT_GROUP_NAME'			=> '沒有輸入類別名稱',
	'NO_EXT_GROUP_SPECIFIED'	=> '沒有指定副檔名類別.',
	'NO_FILE_CAT'				=> '無',
	'NO_IMAGE'					=> '沒有圖片',
	'NO_THUMBNAIL_SUPPORT'		=> '縮略圖功能被禁用因為沒有可支援的GD庫函數和imagemagick可執行模組.',
	'NO_UPLOAD_DIR'				=> '您指定的上傳目錄不存在.',
	'NO_WRITE_UPLOAD'			=> '您指定的上傳目錄不可寫入. 請更改目錄權限使web伺服器可以作寫的操作.',

	'ONLY_ALLOWED_IN_PM'	=> '只在私人訊息中允許',
	'ORDER_ALLOW_DENY'		=> '允許',
	'ORDER_DENY_ALLOW'		=> '禁止',

	'REMOVE_ALLOWED_IPS'		=> '刪除或排除 <em>允許</em> 的IP位址/主機',
	'REMOVE_DISALLOWED_IPS'		=> '刪除或排除 <em>禁止</em> 的IP位址/主機',

	'SEARCH_IMAGICK'				=> '搜尋 Imagemagick',
	'SECURE_ALLOW_DENY'				=> '允許/拒絕 列表',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> '當防盜鏈功能啟用後 - <strong>允許列表</strong> 和 <strong>拒絕列表</strong> 用于設定特例情況',
	'SECURE_DOWNLOADS'				=> '啟用附加檔案防盜鏈',
	'SECURE_DOWNLOADS_EXPLAIN'		=> '當開啟選項後, 下載將僅限於您自己的網域和設定的IP位址/主機.',
	'SECURE_DOWNLOAD_NOTICE'		=> '防盜鏈功能沒有啟用. 下面的設置將在啟用後生效.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'IP 列表更新完成.',
	'SECURE_EMPTY_REFERRER'			=> '允許空轉向',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> '防盜鏈基於判斷轉向來源. 您希望允許轉向來源為空的下載嗎?',
	'SETTINGS_CAT_IMAGES'			=> '圖片類別設置',
	'SPECIAL_CATEGORY'				=> '特殊類別',
	'SPECIAL_CATEGORY_EXPLAIN'		=> '特殊類別區別於在文章中顯示的方式不同.',
	'SUCCESSFULLY_UPLOADED'			=> '上傳成功',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> '副檔名類別添加完成',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> '副檔名類別更新完成',

	'UPLOADING_FILES'				=> '上傳檔案中',
	'UPLOADING_FILE_TO'				=> '上傳檔案 “%1$s” 到文章ID %2$d…',
	'UPLOAD_DENIED_FORUM'			=> '您沒有上傳檔案到版面 “%s” 的權限',
	'UPLOAD_DIR'					=> '上傳目錄',
	'UPLOAD_DIR_EXPLAIN'			=> '附加檔案的儲存路徑.',
	'UPLOAD_ICON'					=> '上傳圖示',
	'UPLOAD_NOT_DIR'				=> '您指定的上傳位址不是一個目錄.',
));

?>