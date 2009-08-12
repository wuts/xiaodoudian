<?php
/**
*
* acp_common [Chinese Traditional]
*
* @package language
* @version $Id: common.php 8591 2008-06-04 11:40:53Z Kellanved $
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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> '管理員',
	'ACP_ADMIN_LOGS'			=> '管理日誌',
	'ACP_ADMIN_ROLES'			=> '管理員角色',
	'ACP_ATTACHMENTS'			=> '附加檔案',
	'ACP_ATTACHMENT_SETTINGS'	=> '附加檔案設置',
	'ACP_AUTH_SETTINGS'			=> '認證設置',
	'ACP_AUTOMATION'			=> '自動操作',
	'ACP_AVATAR_SETTINGS'		=> '頭像設置',

	'ACP_BACKUP'				=> '備份',
	'ACP_BAN'					=> '封鎖',
	'ACP_BAN_EMAILS'			=> '封鎖email位址',
	'ACP_BAN_IPS'				=> '封鎖IP位址',
	'ACP_BAN_USERNAMES'			=> '封鎖會員名稱',
	'ACP_BBCODES'				=> 'BBCode',
	'ACP_BOARD_CONFIGURATION'	=> '討論區配置',
	'ACP_BOARD_FEATURES'		=> '討論區功能',
	'ACP_BOARD_MANAGEMENT'		=> '討論區管理',
	'ACP_BOARD_SETTINGS'		=> '討論區設置',
	'ACP_BOTS'					=> '爬蟲/機器人',

	'ACP_CAPTCHA'				=> '驗證圖片',

	'ACP_CAT_DATABASE'			=> '資料庫',
	'ACP_CAT_DOT_MODS'			=> '外掛',
	'ACP_CAT_FORUMS'			=> '版面',
	'ACP_CAT_GENERAL'			=> '綜合',
	'ACP_CAT_MAINTENANCE'		=> '維護',
	'ACP_CAT_PERMISSIONS'		=> '權限',
	'ACP_CAT_POSTING'			=> '文章',
	'ACP_CAT_STYLES'			=> '風格',
	'ACP_CAT_SYSTEM'			=> '系統',
	'ACP_CAT_USERGROUP'			=> '會員和群組',
	'ACP_CAT_USERS'				=> '會員',
	'ACP_CLIENT_COMMUNICATION'	=> '客戶端通信',
	'ACP_COOKIE_SETTINGS'		=> 'Cookie設置',
	'ACP_CRITICAL_LOGS'			=> '錯誤日誌',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> '自定義資料欄位',

	'ACP_DATABASE'				=> '資料庫管理',
	'ACP_DISALLOW'				=> '禁止',
	'ACP_DISALLOW_USERNAMES'	=> '禁止註冊的會員名稱',

	'ACP_EMAIL_SETTINGS'		=> 'Email設置',
	'ACP_EXTENSION_GROUPS'		=> '管理副檔名群組',

	'ACP_FORUM_BASED_PERMISSIONS'	=> '版面基本權限',
	'ACP_FORUM_LOGS'				=> '版面日誌',
	'ACP_FORUM_MANAGEMENT'			=> '版面管理',
	'ACP_FORUM_MODERATORS'			=> '版面版主',
	'ACP_FORUM_PERMISSIONS'			=> '版面權限',
	'ACP_FORUM_ROLES'				=> '版面角色',

	'ACP_GENERAL_CONFIGURATION'		=> '綜合設置',
	'ACP_GENERAL_TASKS'				=> '一般任務',
	'ACP_GLOBAL_MODERATORS'			=> '超級版主',
	'ACP_GLOBAL_PERMISSIONS'		=> '全局權限',
	'ACP_GROUPS'					=> '群組',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> '群組的版面權限',
	'ACP_GROUPS_MANAGE'				=> '管理群組',
	'ACP_GROUPS_MANAGEMENT'			=> '群組管理',
	'ACP_GROUPS_PERMISSIONS'		=> '群組權限',

	'ACP_ICONS'					=> '主題圖示',
	'ACP_ICONS_SMILIES'			=> '主題圖示/表情符號',
	'ACP_IMAGESETS'				=> '圖片組',
	'ACP_INACTIVE_USERS'		=> '凍結的會員',
	'ACP_INDEX'					=> '管理員控制面板首頁',

	'ACP_JABBER_SETTINGS'		=> 'Jabber設置',

	'ACP_LANGUAGE'				=> '語系管理',
	'ACP_LANGUAGE_PACKS'		=> '語系包',
	'ACP_LOAD_SETTINGS'			=> '負載設置',
	'ACP_LOGGING'				=> '記錄',

	'ACP_MAIN'					=> '管理員控制面板首頁',
	'ACP_MANAGE_EXTENSIONS'		=> '管理副檔名',
	'ACP_MANAGE_FORUMS'			=> '管理版面',
	'ACP_MANAGE_RANKS'			=> '管理等級',
	'ACP_MANAGE_REASONS'		=> '管理 舉報/封鎖 原因',
	'ACP_MANAGE_USERS'			=> '管理會員',
	'ACP_MASS_EMAIL'			=> '大量發送email',
	'ACP_MESSAGES'				=> '私人訊息',
	'ACP_MESSAGE_SETTINGS'		=> '私人訊息設置',
	'ACP_MODULE_MANAGEMENT'		=> '模組管理',
	'ACP_MOD_LOGS'				=> '版主日誌',
	'ACP_MOD_ROLES'				=> '版主角色',

	'ACP_NO_ITEMS'				=> '項目為空.',

	'ACP_ORPHAN_ATTACHMENTS'	=> '幽靈檔案',

	'ACP_PERMISSIONS'			=> '權限',
	'ACP_PERMISSION_MASKS'		=> '權限偽裝',
	'ACP_PERMISSION_ROLES'		=> '權限角色',
	'ACP_PERMISSION_TRACE'		=> '權限追蹤',
	'ACP_PHP_INFO'				=> 'PHP 資訊',
	'ACP_POST_SETTINGS'			=> '發表文章設置',
	'ACP_PRUNE_FORUMS'			=> '裁減版面',
	'ACP_PRUNE_USERS'			=> '裁減會員',
	'ACP_PRUNING'				=> '裁減',

	'ACP_QUICK_ACCESS'			=> '快速訪問',

	'ACP_RANKS'					=> '等級',
	'ACP_REASONS'				=> '舉報/封鎖 原因',
	'ACP_REGISTER_SETTINGS'		=> '會員註冊設置',

	'ACP_RESTORE'				=> '還原',

	'ACP_SEARCH'				=> '搜尋配置',
	'ACP_SEARCH_INDEX'			=> '搜尋索引',
	'ACP_SEARCH_SETTINGS'		=> '搜尋設置',

	'ACP_SECURITY_SETTINGS'		=> '安全設置',
	'ACP_SERVER_CONFIGURATION'	=> '伺服器配置',
	'ACP_SERVER_SETTINGS'		=> '伺服器設置',
	'ACP_SIGNATURE_SETTINGS'	=> '簽名檔設置',
	'ACP_SMILIES'				=> '表情符號',
	'ACP_STYLE_COMPONENTS'		=> '風格組件',
	'ACP_STYLE_MANAGEMENT'		=> '風格管理',
	'ACP_STYLES'				=> '風格',

	'ACP_TEMPLATES'				=> '樣板',
	'ACP_THEMES'				=> '風格主題',

	'ACP_UPDATE'					=> '更新中',
	'ACP_USERS_FORUM_PERMISSIONS'	=> '會員的版面權限',
	'ACP_USERS_LOGS'				=> '會員日誌',
	'ACP_USERS_PERMISSIONS'			=> '會員的權限',
	'ACP_USER_ATTACH'				=> '附加檔案',
	'ACP_USER_AVATAR'				=> '頭像',
	'ACP_USER_FEEDBACK'				=> '意見/反應',
	'ACP_USER_GROUPS'				=> '群組',
	'ACP_USER_MANAGEMENT'			=> '會員管理',
	'ACP_USER_OVERVIEW'				=> '縱覽',
	'ACP_USER_PERM'					=> '權限',
	'ACP_USER_PREFS'				=> '偏好設置',
	'ACP_USER_PROFILE'				=> '資料',
	'ACP_USER_RANK'					=> '等級',
	'ACP_USER_ROLES'				=> '會員角色',
	'ACP_USER_SECURITY'				=> '會員安全',
	'ACP_USER_SIG'					=> '簽名檔',

	'ACP_VC_SETTINGS'					=> '可視化確認設置',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'CAPTCHA 圖片預覽',
	'ACP_VERSION_CHECK'					=> '檢查更新',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> '查看管理員權限',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> '查看版主權限',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> '查看版面權限',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> '查看超級版主權限',
	'ACP_VIEW_USER_PERMISSIONS'			=> '查看會員權限',

	'ACP_WORDS'					=> '敏感詞過濾',

	'ACTION'				=> '操作',
	'ACTIONS'				=> '操作',
	'ACTIVATE'				=> '啟用',
	'ADD'					=> '添加',
	'ADMIN'					=> '管理',
	'ADMIN_INDEX'			=> '管理首頁',
	'ADMIN_PANEL'			=> '管理員控制面板',

	'ADM_LOGOUT'			=> '退出控制面板',
	'ADM_LOGGED_OUT'		=> '成功退出管理員控制面板',

	'BACK'					=> '上一頁',

	'COLOUR_SWATCH'			=> '網頁安全色取色板',
	'CONFIG_UPDATED'		=> '配置更新完成.',

	'DEACTIVATE'				=> '凍結',
	'DIRECTORY_DOES_NOT_EXIST'	=> '輸入的路徑 "%s" 不存在.',
	'DIRECTORY_NOT_DIR'			=> '輸入的路徑 "%s" 不是目錄.',
	'DIRECTORY_NOT_WRITABLE'	=> '輸入的路徑 “%s” 不可寫.',
	'DISABLE'					=> '禁止',
	'DOWNLOAD'					=> '下載',
	'DOWNLOAD_AS'				=> '下載為',
	'DOWNLOAD_STORE'			=> '下載或儲存檔案',
	'DOWNLOAD_STORE_EXPLAIN'	=> '您可以直接下載檔案或保存到您的 <samp>store/</samp> 目錄.',

	'EDIT'					=> '編輯',
	'ENABLE'				=> '啟用',
	'EXPORT_DOWNLOAD'		=> '下載',
	'EXPORT_STORE'			=> '儲存',

	'GENERAL_OPTIONS'		=> '綜合選項',
	'GENERAL_SETTINGS'		=> '綜合設置',
	'GLOBAL_MASK'			=> '全局權限偽裝',

	'INSTALL'				=> '安裝',
	'IP'					=> '會員 IP',
	'IP_HOSTNAME'			=> 'IP 位址或主機名稱',

	'LOGGED_IN_AS'			=> '您登入的身份為:',
	'LOGIN_ADMIN'			=> '您必須是已授權的會員才能管理討論區.',
	'LOGIN_ADMIN_CONFIRM'	=> '您需要再次登入才能進入管理面板.',
	'LOGIN_ADMIN_SUCCESS'	=> '您已經成功登入, 稍後將進入管理員控制面板',
	'LOOK_UP_FORUM'			=> '選擇一個版面',
	'LOOK_UP_FORUMS_EXPLAIN'=> '您可以選擇一個或多個版面.',

	'MANAGE'				=> '管理',
	'MENU_TOGGLE'			=> '隱藏或顯示側邊選單',
	'MOVE_DOWN'				=> '下移',
	'MOVE_UP'				=> '上移',

	'NOTIFY'				=> '通知',
	'NO_ADMIN'				=> '您未被授權管理這個討論區.',
	'NO_EMAILS_DEFINED'		=> '沒有發現可用的email位址',
	'NO_PASSWORD_SUPPLIED'	=> '您需要輸入您的密碼後才能訪問管理員控制面板.',	

	'OFF'					=> '關',
	'ON'					=> '開',

	'PARSE_BBCODE'						=> '解析 BBCode',
	'PARSE_SMILIES'						=> '解析表情符號',
	'PARSE_URLS'						=> '解析連結格式',
	'PERMISSIONS_TRANSFERRED'			=> '權限已經傳遞',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> '您現在使用來自於 %1$s 的權限. 您可以以這個會員的權限瀏覽版面但是不能訪問管理員控制面板因為管理員權限沒有被傳遞. 您可以隨時 <a href="%2$s"><strong>還原您的權限設置</strong></a>.',
	'PIXEL'							=> '像素',	
	'PROCEED_TO_ACP'					=> '%s 進入管理員控制面板%s',

	'REMIND'							=> '提醒',
	'RESYNC'							=> '重新同步',
	'RETURN_TO'							=> '回到…',

	'SELECT_ANONYMOUS'		=> '選擇訪客會員',
	'SELECT_OPTION'			=> '選擇選項',

	'SETTING_TOO_LOW'		=> '對設定項 “%1$s” 輸入的數值過小. 允許的最小數值為 %2$d.',
	'SETTING_TOO_BIG'		=> '對設定項 “%1$s” 輸入的數值過大. 允許的最大數值為 %2$d.',	
	'SETTING_TOO_LONG'		=> '對設定項 “%1$s” 輸入的長度過長. 允許的最大長度為 %2$d.',
	'SETTING_TOO_SHORT'		=> '對設定項 “%1$s” 輸入的長度過短. 允許的最小長度為 %2$d.',

	'UCP'					=> '會員控制面板',
	'USERNAMES_EXPLAIN'		=> '在同一行上分開排列會員名稱',
	'USER_CONTROL_PANEL'	=> '會員控制面板',

	'WARNING'				=> '警告',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> '這個頁面列出了這個伺服器上所安裝的PHP版本資訊. 這包括裝載的模組, 可用的變量和預設設置, 在診斷問題時這些訊息可能會有用. 請注意一些主機服務商可能會因為安全因素禁止顯示某些訊息. 您盡可能不要洩露這些訊息, 除非在技術支援中 <a href="http://www.phpbb.com/about/">官方開發成員</a> 需要這些訊息.',

	'NO_PHPINFO_AVAILABLE'	=> 'PHP訊息無法獲取, Phpinfo() 因為安全原因被禁用.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> '這裡列出了討論區管理員執行的操作. 您可以按會員名稱、日期、IP位址或操作排序. 如果您有合適的權限, 您也可以清除部分或全部日誌記錄.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> '這裡列出了討論區自身的操作. 這些日誌為您解決特定問題提供有用訊息, 例如無法投遞的email. 您可以按會員名稱、日期、IP位址或操作排序. 如果您有足夠的權限, 您也可以清除部分或全部日誌記錄.',
	'ACP_MOD_LOGS_EXPLAIN'		=> '這裡列出了討論區版主執行的操作, 在下拉框中選擇一個版面. 您可以按會員名稱、日期、IP位址或操作排序. 如果您有足夠的權限, 您也可以清除部分或全部日誌記錄.',
	'ACP_USERS_LOGS_EXPLAIN'	=> '這裡列出了會員執行的操作以及作用於會員的操作.',
	'ALL_ENTRIES'				=> '所有項目',

	'DISPLAY_LOG'	=> '從頭顯示項目',

	'NO_ENTRIES'	=> '沒有記錄',

	'SORT_IP'		=> 'IP位址',
	'SORT_DATE'		=> '日期',
	'SORT_ACTION'	=> '操作',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> '感謝您選擇phpBB作為討論區解決方案. 這個界面將顯示您的討論區的總體統計訊息. 左邊的連結允許您從各個方面管理討論區, 每個分頁有如何使用管理工具的提示.',
	'ADMIN_LOG'					=> '記錄管理員的操作',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> '這裡顯示了管理員進行的最後五個操作. 完整的操作日誌可以通過下面的連結查看.',
	'AVATAR_DIR_SIZE'			=> '頭像資料夾大小',

	'BOARD_STARTED'		=> '討論區啟用日期',
	'BOARD_VERSION'		=> '討論區版本',

	'DATABASE_SERVER_INFO'	=> '資料庫伺服器',
	'DATABASE_SIZE'			=> '資料庫大小',

	'FILES_PER_DAY'		=> '每天的附加檔案量',
	'FORUM_STATS'		=> '討論區統計',

	'GZIP_COMPRESSION'	=> 'GZip壓縮',

	'NOT_AVAILABLE'		=> '不可用',
	'NUMBER_FILES'		=> '附加檔案數量',
	'NUMBER_POSTS'		=> '文章數量',
	'NUMBER_TOPICS'		=> '主題數量',
	'NUMBER_USERS'		=> '會員數量',
	'NUMBER_ORPHAN'		=> '幽靈檔案',

	'POSTS_PER_DAY'		=> '每日文章數',

	'PURGE_CACHE'			=> '清除快取',
	'PURGE_CACHE_CONFIRM'	=> '您確認要清除快取嗎?',
	'PURGE_CACHE_EXPLAIN'	=> '清除所有快取相關的項目, 這包含被快取的樣板和資料庫查詢結果.',

	'RESET_DATE'			=> '重新設定日期',
	'RESET_DATE_CONFIRM'			=> '您確認要重新設定討論區的啟用時間嗎?',
	'RESET_ONLINE'			=> '重新設定在線人數',
	'RESET_ONLINE_CONFIRM'			=> '您確認要重新設定這個討論區的最大在線人數嗎?',
	'RESYNC_POSTCOUNTS'		=> '同步文章統計',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> '只有存在的文章才會被計入. 已經裁減掉的文章將不予統計.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> '您確認要重新同步文章統計嗎?',
	'RESYNC_POST_MARKING'	=> '同步主題數',
	'RESYNC_POST_MARKING_CONFIRM'	=> '您確認要重新統計帶標記的主題嗎?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> '首先取消標記所有的主題, 然後重新標記在六個月內有操作的主題.',
	'RESYNC_STATS'			=> '同步統計值',
	'RESYNC_STATS_CONFIRM'			=> '您確認要重新同步統計嗎?',
	'RESYNC_STATS_EXPLAIN'			=> '重新計算文章/主題/會員和檔案的總數.',
	'RUN'							=> '現在執行',

	'STATISTIC'			=> '統計',
	'STATISTIC_RESYNC_OPTIONS'	=> '重新同步/重新設定統計',

	'TOPICS_PER_DAY'	=> '每日主題',

	'UPLOAD_DIR_SIZE'	=> '發表的附加檔案大小',
	'USERS_PER_DAY'		=> '每日的註冊會員',

	'VALUE'					=> '值',
	'VIEW_ADMIN_LOG'		=> '查看管理員日誌',
	'VIEW_INACTIVE_USERS'	=> '查看凍結帳號',

	'WELCOME_PHPBB'			=> '歡迎來到phpBB',
	'WRITABLE_CONFIG'      => '您的論壇配置文件 (config.php) 處于可寫狀態. 我們強烈建議您將權限更改為640, 或者至少為644(例如: <a href="http://en.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php).',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> '凍結日期',
	'INACTIVE_REASON'				=> '原因',
	'INACTIVE_REASON_MANUAL'		=> '會員被管理員凍結',
	'INACTIVE_REASON_PROFILE'		=> '個人資料變更',
	'INACTIVE_REASON_REGISTER'		=> '新註冊的帳號',
	'INACTIVE_REASON_REMIND'		=> '強制帳號啟用',
	'INACTIVE_REASON_UNKNOWN'		=> '未知',
	'INACTIVE_USERS'				=> '凍結的會員',
	'INACTIVE_USERS_EXPLAIN'		=> '這是已經註冊但是沒有啟用的會員列表. 您可以刪除或提醒 (發送email) 他們.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> '這是最近十個未啟用的會員列表. 您可以通過下面的連結查看完整列表並進行啟用、刪除或email通知操作.',

	'NO_INACTIVE_USERS'	=> '沒有凍結的會員',

	'SORT_INACTIVE'		=> '凍結日期',
	'SORT_LAST_VISIT'	=> '最後訪問',
	'SORT_REASON'		=> '原因',
	'SORT_REG_DATE'		=> '註冊日期',

	'USER_IS_INACTIVE'		=> '會員被凍結',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>添加或編輯會員的會員權限</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>添加或編輯群組的會員權限</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>添加或編輯會員的超級版主權限</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>添加或編輯群組的超級版主權限</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>添加或編輯會員的管理員權限</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>添加或編輯群組的管理員權限</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>添加或編輯管理員</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>添加或編輯超級版主</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>添加或編輯會員的版面訪問</strong> 自 %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>添加或編輯會員的版主訪問</strong> 自 %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>添加或編輯群組的版面訪問</strong> 自 %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>添加或編輯群組的版面版主訪問</strong> 自 %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>添加或編輯版主</strong> 自 %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>添加或編輯版面權限</strong> 自 %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>刪除管理員</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>刪除超級版主</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>刪除版主</strong> 自 %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>刪除會員/群組版面權限</strong> 自 %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>權限傳遞自</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>還原自己的權限, 在使用完畢權限來自</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>失敗的管理員登入嘗試</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>管理員登入</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>已移除的附加檔案</strong><br />» %s',
	
	'LOG_ATTACH_EXT_ADD'		=> '<strong>添加或編輯附加檔案副檔名</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>刪除附加檔案副檔名</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>更新附加檔案副檔名</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>添加副檔名群組</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>編輯副檔名群組</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>刪除副檔名群組</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>幽靈檔案上傳至文章</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>幽靈檔案刪除</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>解除會員名稱封鎖</strong> 原因: "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>解除 IP 封鎖</strong> 原因: "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>解除 email 封鎖</strong> 原因: "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_USER'			=> '<strong>已封鎖會員名稱</strong> 原因: "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_IP'			=> '<strong>已封鎖IP</strong> 原因: "<em>%1$s</em>"<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>已封鎖email</strong> 原因: "<em>%1$s</em>"<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>已解除會員名稱封鎖</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>已解除 IP 封鎖</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>已解除 email 封鎖</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>添加新BBCode</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>編輯BBCode</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>刪除BBCode</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>添加新機器人</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>刪除機器人</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>更新機器人</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>清空管理員日誌</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>清空錯誤日誌</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>清空版主日誌</strong>',
	'LOG_CLEAR_USER'		=> '<strong>清空會員日誌</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>清空多個會員日誌</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>更改附加檔案設置</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>更改身份驗證設置</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>更改頭像設置</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>更改cookie設置</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>更改email設置</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>更改討論區功能</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>更改負載設置</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>更改私人訊息設置</strong>',
	'LOG_CONFIG_POST'			=> '<strong>更改文章設置</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>更改會員註冊設置</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>更改搜尋設置</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>更改安全設置</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>更改伺服器設置</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>更改討論區設置</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>更改簽名檔設置</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>更改可視化確認設置</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>批准主題</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>會員推舉主題</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>刪除文章</strong><br />» %s',
	'LOG_DELETE_SHADOW_TOPIC'   => '<strong>刪除影子主題</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>刪除主題</strong><br />» %s',
	'LOG_FORK'					=> '<strong>複製主題</strong><br />» from %s',
	'LOG_LOCK'					=> '<strong>鎖定主題</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>鎖定文章</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>合併文章</strong> 至主題<br />» %s',
	'LOG_MOVE'					=> '<strong>移動主題</strong><br />» 自 %1$s 至 %2$s',
	'LOG_POST_APPROVED'			=> '<strong>審核文章</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>駁回文章 “%1$s” 因為如下的原因</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>編輯文章 “%1$s” 由</strong><br />» %2$s',
	'LOG_REPORT_CLOSED'			=> '<strong>關閉舉報</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>刪除舉報</strong><br />» %s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>分割並移動主題</strong><br />» 至 %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>風格文章</strong><br />» 自 %s',

	'LOG_TOPIC_APPROVED'		=> '<strong>審核主題</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>駁回主題 “%1$s” 因為如下的原因</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>重新同步主題統計</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>更改主題類型</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>主題解鎖</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>文章解鎖</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>添加禁止註冊的會員名稱</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>刪除禁止註冊的會員名稱</strong>',

	'LOG_DB_BACKUP'			=> '<strong>資料庫備份</strong>',
	'LOG_DB_DELETE'			=> '<strong>刪除資料庫備份</strong>',
	'LOG_DB_RESTORE'		=> '<strong>資料庫還原</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>從允許下載列表中去除IP/主機名稱</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>添加IP/主機名稱到允許下載列表</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>從允許下載列表中刪除IP/主機名稱</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Jabber錯誤</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Email錯誤</strong><br />» %s',
	
	'LOG_FORUM_ADD'							=> '<strong>建立新版面</strong><br />» %s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>刪除版面</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>刪除版面及其子版面</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>刪除版面, 移動子版面</strong> 到 %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>刪除版面, 移動內容 </strong> 到 %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>刪除版面和子版面, 移動內容</strong> 到 %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>刪除版面, 移動內容</strong> 到 %1$s <strong>and subforums</strong> to %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>刪除版面和版面的內容</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>刪除版面和版面的內容及其子版面</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>刪除版面和版面的內容, 移動子版面</strong> 到 %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>編輯版面細節</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>移動版面</strong> %1$s <strong>往下</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>移動版面</strong> %1$s <strong>往上</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>重新同步版面</strong><br />» %s',

	'LOG_GROUP_CREATED'		=> '<strong>建立新群組</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>設置為成員預設群組</strong><br />» %s',
	'LOG_GROUP_DELETE'		=> '<strong>刪除群組</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>群組組長降級為一般成員</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>成員升級為群組組長</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>成員刪除自群組</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>群組細節修改</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>添加新的群組組長至群組</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>會員批准加入群組</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>添加新的成員至群組</strong> %1$s<br />» %2$s',

	'LOG_IMAGESET_ADD_DB'		=> '<strong>添加新圖檔組到資料庫</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'		=> '<strong>添加新圖檔組到檔案系統</strong><br />» %s',
	'LOG_IMAGESET_DELETE'		=> '<strong>刪除圖檔組</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'	=> '<strong>編輯圖檔組細節</strong><br />» %s',
	'LOG_IMAGESET_EDIT'			=> '<strong>編輯圖檔組</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'		=> '<strong>匯出圖檔組</strong><br />» %s',
	'LOG_IMAGESET_LANG_MISSING'		=> '<strong>Imageset misses “%2$s” localisation</strong><br />» %1$s',
	'LOG_IMAGESET_LANG_REFRESHED'	=> '<strong>重新整理 “%2$s” 圖檔組網址</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'	=> '<strong>重新整理圖檔組</strong><br />» %s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>啟用未啟用的帳號</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>刪除未啟用的帳號</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>發送提醒email給未啟用的會員</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>轉換自 %1$s 至 phpBB %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>安裝phpBB %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>對話IP/browser/X_FORWARDED_FOR 檢查失敗</strong><br />»會員IP "<em>%1$s</em>" checked against 對話IP "<em>%2$s</em>", 會員瀏覽器字元串 "<em>%3$s</em>" checked against 對話瀏覽器字元串 "<em>%4$s</em>" and 會員 X_FORWARDED_FOR string "<em>%5$s</em>" checked against 對話 X_FORWARDED_FOR string "<em>%6$s</em>".',

	'LOG_JAB_CHANGED'			=> '<strong>Jabber帳號修改</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Jabber密碼修改</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Jabber帳號註冊</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Jabber設置修改</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>刪除語系檔</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>安裝語系檔</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>更新語系檔細節</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>替換語系檔</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>提交語系檔並放置於store資料夾</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>發送大量email</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>更改主題作者 "%1$s"</strong><br />» 自 %2$s to %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>模組停用</strong>',
	'LOG_MODULE_ENABLE'		=> '<strong>模組啟用</strong>',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>模組下移</strong><br />» %s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>模組上移</strong><br />» %s',
	'LOG_MODULE_REMOVED'	=> '<strong>刪除模組</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>添加模組</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>編輯模組</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>管理員角色添加</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>管理員角色編輯</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>管理員角色刪除</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>版面角色添加</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>版面角色編輯</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>版面角色刪除</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>版主角色添加</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>版主角色編輯</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>版主角色刪除</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>會員角色添加</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>會員角色編輯</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>會員角色刪除</strong><br />» %s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>資料欄位啟用</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>資料欄位添加</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>資料欄位凍結</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>資料欄位修改</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>資料欄位刪除</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>裁減版面</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>自動裁減版面</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>會員凍結</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>裁減會員 刪除文章</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>裁減會員 保留文章</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>清除快取</strong>',

	'LOG_RANK_ADDED'		=> '<strong>添加新等級</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>刪除等級</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>更新等級</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>添加舉報/否決理由</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>刪除舉報/否決理由</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>更新舉報/否決理由</strong><br />» %s',

	'LOG_REFERER_INVALID'		=> '<strong>轉向源驗證錯誤</strong><br />»轉向自 “<em>%1$s</em>”. 請求被拒絕, 此次對話已終止.',
	'LOG_RESET_DATE'			=> '<strong>討論區啟用日期重新設定</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>最大在線會員數量重新設定</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>會員文章數重新統計</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>帶點的主題重新同步</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>文章, 主題和會員統計重新同步</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>建立搜尋索引於</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>刪除搜尋索引於</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>添加新風格</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>刪除風格</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>編輯風格</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>輸出風格</strong><br />» %s',

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>添加新樣板組到資料庫</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>添加新樣板組到檔案系統</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>刪除樣板組中被快取的樣板檔案 <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>刪除樣板組</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>編輯樣板組 <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>編輯樣板細節</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>輸出樣板組</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>重新整理樣板組</strong><br />» %s',

	'LOG_THEME_ADD_DB'			=> '<strong>添加新風格主題至資料庫</strong><br />» %s',
	'LOG_THEME_ADD_FS'			=> '<strong>添加新風格主題至檔案系統</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>風格主題刪除</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>編輯風格主題細節</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>編輯風格主題 <em>%1$s</em></strong><br />» 編輯類型 <em>%2$s</em>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>編輯風格主題 <em>%1$s</em></strong><br />» Modified file <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>匯出風格主題</strong><br />» %s',
	'LOG_THEME_REFRESHED'		=> '<strong>重新整理風格主題</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>升級資料庫自版本 %1$s 至 %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>升級 phpBB 自版本 %1$s 至 %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>會員啟用</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>通過會員管理封鎖會員</strong> 原因: "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>通過會員管理封鎖IP</strong> 原因: "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>通過會員管理封鎖email</strong> 原因: "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>刪除會員</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>刪除這個會員發表的所有附加檔案</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>刪除會員頭像</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>刪除這個會員的所有文章</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>刪除會員簽名檔</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>凍結會員</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>移動會員文章</strong><br />» posts by "%1$s" 至討論區 "%2$s"',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>更改會員密碼</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>強制會員帳號重新啟用</strong><br />» %s',
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>會員 "%1$s" 更改 email</strong><br />» 由  "%2$s" 改為 "%3$s"',
	'LOG_USER_UPDATE_NAME'	=> '<strong>會員名稱更改</strong><br />» 由 "%1$s" 改為 "%2$s"',
	'LOG_USER_USER_UPDATE'	=> '<strong>會員細節更新</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>會員帳號啟用</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>會員頭像刪除</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>會員簽名檔刪除</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>添加會員意見/反應</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '%s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>會員帳號被凍結</strong>',
	'LOG_USER_LOCK'				=> '<strong>會員鎖定自己的主題</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>移動所有文章到版面 "%s"</strong>',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>強制會員帳號重新啟用</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>會員解鎖自己的主題</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>添加會員警告</strong><br />» %s',
	'LOG_USER_WARNING_BODY'		=> '<strong>發給這個會員如下的警告</strong><br />» %s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>會員更改預設群組</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>會員從群組組長職務降級</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>會員加入群組</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>會員加入群組並等待批准</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>會員解除群組成員關係</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>添加敏感詞</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>刪除敏感詞</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>編輯敏感詞</strong><br />» %s',
));

	// Two language keys with the same text were used in different locations
	// LOG_DELETE_TOPIC is the correct one, this line is here so that existing
	// log entries are not broken. Ensure it is included in your language file.
	$lang['LOG_TOPIC_DELETED'] = $lang['LOG_DELETE_TOPIC'];

?>