<?php
/** 
*
* install [Chinese Traditional]
*
* @package language
* @version $Id: install.php 8598 2008-06-04 15:37:06Z naderman $
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
	'ADMIN_CONFIG'				=> '管理員設定',
	'ADMIN_PASSWORD'			=> '管理員密碼',
	'ADMIN_PASSWORD_CONFIRM'	=> '確認管理員密碼',
	'ADMIN_PASSWORD_EXPLAIN'	=> '請輸入一個 6 到 30 字元的密碼',
	'ADMIN_TEST'				=> '測試管理員設定',
	'ADMIN_USERNAME'			=> '管理員名稱',
	'ADMIN_USERNAME_EXPLAIN'	=> '請輸入一個 3 到 20 字元的會員名稱',
	'APP_MAGICK'				=> 'Imagemagick 支援 [附加檔案]',
	'AUTHOR_NOTES'				=> '作者提示<br />» %s',
	'AVAILABLE'					=> '可用',
	'AVAILABLE_CONVERTORS'		=> '可用的轉換程式',

	'BEGIN_CONVERT'					=> '開始轉換',
	'BLANK_PREFIX_FOUND'			=> '對資料庫的掃瞄顯示存在可用的無首碼表單.',
	'BOARD_NOT_INSTALLED'			=> '沒有發現已安裝的phpBB',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> '為了進行轉換您必須預先安裝一個全新的 phpBB3. 請注意新的安裝資料要和舊的資料存在同一個資料庫裡, 請進行[<a href="%s">全新安裝</a>]',

	'CATEGORY'					=> '分區',
	'CACHE_STORE'				=> '快取類型',
	'CACHE_STORE_EXPLAIN'		=> '資料快取的路徑, 請優先使用檔案系統. ',
	'CAT_CONVERT'				=> '轉換操作',
	'CAT_INSTALL'				=> '全新安裝',
	'CAT_OVERVIEW'				=> '綜合訊息',
	'CAT_UPDATE'				=> '升級',
	'CHANGE'					=> '改變',
	'CHECK_TABLE_PREFIX'		=> '請檢查您的資料表字首後重試',
	'CLEAN_VERIFY'				=> '正在清理並校驗最終結構',
	'CLEANING_USERNAMES'		=> '清理會員名稱',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> 來自清理中的如下會員名:',
	'COLLIDING_USERNAMES_FOUND'	=> '在舊的討論區中發現會員名稱衝突. 為了完成討論區轉換, 請刪除或重新命名這些會員使得只有一個使用該會員名稱的會員存在.',
	'COLLIDING_USER'			=> '» 會員 id: <strong>%d</strong> 會員名稱: <strong>%s</strong> (%d posts)',
	'CONFIG_CONVERT'			=> '正在轉換配置內容',
	'CONFIG_FILE_UNABLE_WRITE'	=> '寫入設定檔案失敗, 建立這個檔案的其他方式如下: ',
	'CONFIG_FILE_WRITTEN'		=> '寫入設定檔案成功, 您現在可以繼續進行下一步. ',
	'CONFIG_PHPBB_EMPTY'		=> '缺少 phpBB3 的設定訊息“%s”. ',
	'CONFIG_RETRY'				=> '重試',
	'CONTACT_EMAIL_CONFIRM'		=> '確認Email位址',
	'CONTINUE_CONVERT'			=> '繼續轉換',
	'CONTINUE_CONVERT_BODY'		=> '檢測到曾經進行過轉換, 您可以選擇進行重新轉換還是繼續上一次的轉換. ',
	'CONTINUE_LAST'				=> '繼續進行操作',
	'CONTINUE_OLD_CONVERSION'	=> '繼續進行以前的轉換',
	'CONVERT'					=> '轉換',
	'CONVERT_COMPLETE'			=> '轉換完成',
	'CONVERT_COMPLETE_EXPLAIN'	=> '您已經將您的討論區成功轉換為 phpBB 3.0, 您現在可以 <a href="../">訪問您的討論區</a>. 請在啟用新討論區前確認參數都已經正確設置. phpBB 的線上使用說明位於 <a href="http://www.phpbb.com/support/documentation/3.0/">會員指南</a> 和 <a href="http://www.phpbb.com/phpBB/viewforum.php?f=46">技術支援版面</a>',
	'CONVERT_INTRO'				=> '歡迎使用 phpBB 統一轉換架構',
	'CONVERT_INTRO_BODY'		=> '這裡您可以從其它(已安裝)的討論區導入資料, 下表列出的是所有可用的轉換模組. 如果其中沒有您想要的轉換模組, 請訪問我們的網站, 那裡可能會提供更多的轉換模組下載.',
	'CONVERT_NEW_CONVERSION'	=> '新的轉換',
	'CONVERT_NOT_EXIST'			=> '指定的轉換程式不存在',
	'CONVERT_OPTIONS'			=> '選項',
	'CONVERT_SETTINGS_VERIFIED'	=> '您輸入的訊息已經被校驗, 要開始轉換, 請點擊下面的按鈕.',
	'CONV_ERR_FATAL'					=> '嚴重錯誤',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> '原討論區允許使用FTP上傳附加檔案, 請停用FTP上傳並確認設定了有效的上傳資料夾, 所有附加檔案將被拷貝到這個新的資料夾. 完成後, 請重新開始轉換程式.',
	'CONV_ERROR_CONFIG_EMPTY'			=> '轉換程式沒有可用的設定訊息. ',
	'CONV_ERROR_FORUM_ACCESS'			=> '無法得到版面的訪問訊息.',
	'CONV_ERROR_GET_CATEGORIES'			=> '無法得到分區訊息.',
	'CONV_ERROR_GET_CONFIG'				=> '無法找到您的版面設置訊息.',
	'CONV_ERROR_COULD_NOT_READ'			=> '無法讀寫 “%s”.',
	'CONV_ERROR_GROUP_ACCESS'			=> '無法得到群組權限訊息.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> '在add_bots()中檢測到群組資料表中的矛盾資料 - 如果手動設置過您需要添加所有特殊群組.',
	'CONV_ERROR_INSERT_BOT'				=> '無法在群組中加入bot.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> '無法在bots資料表中加入bot.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> '無法在群組資料表中加入會員.',
	'CONV_ERROR_MESSAGE_PARSER'			=> '內容解析錯誤',
	'CONV_ERROR_NO_AVATAR_PATH'			=> '開發者注意: 您必須指定 $convertor[\'avatar_path\'] 以使用 %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> '指向原討論區的相對路徑未指定.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> '開發者注意: 您必須指定 $convertor[\'avatar_gallery_path\'] 以使用 %s.',
	'CONV_ERROR_NO_GROUP'				=> '群組 "%1$s" 在 %2$s 中無法找到.',
	'CONV_ERROR_NO_RANKS_PATH'			=> '開發者注意: 您必須指定 $convertor[\'ranks_path\'] 以使用 %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> '開發者注意: 您必須指定 $convertor[\'smilies_path\'] 以使用 %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> '開發者注意: 您必須指定 $convertor[\'upload_path\'] 以使用 %s.',
	'CONV_ERROR_PERM_SETTING'			=> '無法加入/更改權限設置.',
	'CONV_ERROR_PM_COUNT'				=> '無法選擇私人訊息數量.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> '無法在新討論區中替換舊分區.',
	'CONV_ERROR_REPLACE_FORUM'			=> '無法在新討論區中替換舊版面.',
	'CONV_ERROR_USER_ACCESS'			=> '無法得到會員權限訊息.',
	'CONV_ERROR_WRONG_GROUP'			=> '錯誤的群組 "%1$s" 定義在 %2$s.',
	'CONV_OPTIONS_BODY'					=> '這個頁面用於收集訪問原討論區所需要的資料. 輸入原討論區資料庫參數, 轉換程式不會對原資料庫作任何更改. 原討論區必須暫時停用以確保轉換能正確完成.',
	'CONV_SAVED_MESSAGES'				=> '保存訊息',

	'COULD_NOT_COPY'			=> '無法複製檔案 <strong>%1$s</strong> 到 <strong>%2$s</strong><br /><br />請檢查目標資料夾是否存在並是否可以被web伺服器寫入',
	'COULD_NOT_FIND_PATH'		=> '無法找到您以前討論區的路徑. 請檢查您的設定並再試一次.<br />? 指定的路徑是 %s',

	'DBMS'						=> '資料庫類型',
	'DB_CONFIG'					=> '資料庫設置',
	'DB_CONNECTION'				=> '資料庫連接',
	'DB_ERR_INSERT'				=> '執行 <code>INSERT</code> 語句時發生錯誤. ',
	'DB_ERR_LAST'				=> '執行 <var>query_last</var> 時發生錯誤. ',
	'DB_ERR_QUERY_FIRST'		=> '執行 <var>query_first</var> 時發生錯誤. ',
	'DB_ERR_QUERY_FIRST_TABLE'	=> '執行 <var>query_first</var> 時發生錯誤：%s (“%s”). ',
	'DB_ERR_SELECT'				=> '執行 <code>SELECT</code> 語句時發生錯誤. ',
	'DB_HOST'					=> '資料庫伺服器地址, 或 DSN',
	'DB_HOST_EXPLAIN'			=> 'DSN 表示 Data Source Name, 它只與 ODBC 有關. ',
	'DB_NAME'					=> '資料庫名稱',
	'DB_PASSWORD'				=> '資料庫密碼',
	'DB_PORT'					=> '資料庫伺服器連接埠',
	'DB_PORT_EXPLAIN'			=> '不用填寫, 除非您確定伺服器監聽一個非標準埠. ',
	'DB_USERNAME'				=> '資料庫使用者名稱',
	'DB_TEST'					=> '連線測試',
	'DEFAULT_LANG'				=> '預設討論區語系',
	'DEFAULT_PREFIX_IS'			=> '根據提供的字首, 轉換器無法找到可用的資料表. 請確認您在同一資料庫中存在舊的資料表. %1$s 預設的資料表字首是 <strong>%2$s</strong>',
	'DEV_NO_TEST_FILE'			=> '在轉換器中沒有指定test_file變量的值. 如果您是轉換器的使用者, 您不應該看到這個錯誤, 請聯繫轉換器的作者並報告這個錯誤. 如果您是轉換器的作者, 您必須指定一個源討論區中存在的檔案名稱, 使得路徑校驗能正常進行.',
	'DIRECTORIES_AND_FILES'		=> '設定資料夾與檔案',
	'DISABLE_KEYS'				=> '停用關鍵字...',
	'DLL_FIREBIRD'				=> 'Firebird',
	'DLL_FTP'					=> 'FTP 支援[安裝phpBB]',
	'DLL_GD'					=> 'GD 支援[圖形確認碼]',	
	'DLL_MBSTRING'				=> '多位元組字元支援',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ via ODBC',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL (MySQLi 擴展)',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL 7.x/8.x',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_XML'					=> 'XML 支援[ Jabber ]',
	'DLL_ZLIB'					=> 'zlib 壓縮支援[ 壓縮檔案：.gz .tar.gz .zip ]',
	'DL_CONFIG'					=> '下載設定',
	'DL_CONFIG_EXPLAIN'			=> '您應該將完整的 config.php 下載到您的個人電腦中, 然後手動上傳它, 覆蓋 phpBB 3.0 根目錄中已經存在的檔案. 請注意以 ASCII 格式上傳(如果您不確定如何辦到, 請閱讀您的FTP軟體文件). 上傳完成之後, 請點擊 “完成” 以進行下一步. ',
	'DL_DOWNLOAD'				=> '下載',
	'DONE'						=> '完成',

	'ENABLE_KEYS'				=> '重新啟用關鍵字. 這需要一段時間',

	'FILES_OPTIONAL'			=> '可選的檔案與資料夾',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>可選的</strong> - 這些檔案、資料夾及權限不是必需的. 如果它們不存在或不可寫入, 安裝程式將會嘗試使用一些技術手段來建立它們. 但如果存在, 將會使安裝加速. ',
	'FILES_REQUIRED'			=> '檔案與資料夾',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>必需的</strong> - 為了正常運行, phpBB需要針對特定檔案或資料夾的寫入權限. 如果下面出現“不存在”, 您就需要建立相應的檔案或資料夾; 如果出現“不可寫入”, 您就需要改變相應的檔案或資料夾的權限以允許phpBB對其進行寫入操作. ',
	'FILLING_TABLE'				=> '正在填充表格: <strong>%s</strong>',
	'FILLING_TABLES'			=> '正在填充表格',
	'FINAL_STEP'				=> '正在執行最後一步',
	'FORUM_ADDRESS'				=> '討論區位址',
	'FORUM_ADDRESS_EXPLAIN'		=> '這是指向您的舊討論區根目錄的連結位址, 例如：<samp>http://www.example.com/phpBB3/</samp>. 如果您填入了一個網址, 所有在信件、私人訊息及簽名檔中與前面示例相同的位址都將被替換為新的討論區位址. ',
	'FORUM_PATH'				=> '討論區路徑',
	'FORUM_PATH_EXPLAIN'		=> '這是在磁碟上對應與您<strong>現在的phpBB根目錄</strong>的原討論區 <strong>相對</strong> 路徑',
	'FOUND'						=> '存在',
	'FTP_CONFIG'				=> '通過 FTP 傳輸設定',
	'FTP_CONFIG_EXPLAIN'		=> 'phpBB已經在伺服器上檢測到 FTP 模組, 如果您希望, 那麼您可以嘗試透過它安裝您的 config.php. 您將需要提供以下訊息, 請注意會員名稱和密碼是用來登入伺服器的(如果您不確定這是什麼, 聯絡您的服務供應商)',
	'FTP_PATH'					=> 'FTP 路徑',
	'FTP_PATH_EXPLAIN'			=> '這是從FTP根目錄至phpBB目錄的相對路徑, 例如：htdocs/phpBB3/',
	'FTP_UPLOAD'				=> '上傳',

	'GPL'						=> 'General Public License(GPL協議)',
	
	'INITIAL_CONFIG'			=> '基本設定',
	'INITIAL_CONFIG_EXPLAIN'	=> '安裝程式認為您的伺服器可以運行phpBB, 您需要提供一些具體訊息. 如果您不知道如何連接您的資料庫, 請首先考慮聯繫您的服務供應商, 或是訪問phpBB支援討論區. 在繼續下一步之前, 請仔細檢查您輸入的訊息. ',
	'INSTALL_CONGRATS'			=> '恭喜！',
	'INSTALL_CONGRATS_EXPLAIN'	=> '
		<p>您已經成功安裝 phpBB %1$s. 從這裡, 您有兩個選項可以設置您新安裝的 phpBB3:</p>
		<h2>轉換一個已經存在的討論區到 phpBB3</h2>
		<p>phpBB 統一轉換框架支援從 phpBB 2.0.x 和其他討論區軟體到 phpBB3 的轉換. 如果您有一個舊的討論區需要轉換, 請 <a href="%2$s">運行轉換程式</a>.</p>
		<h2>使用您的 phpBB3!</h2>
		<p>點選下面的連結將帶您到管理員控制面板 (ACP). 花一些時間檢查設置選項是否可用. 記住可以使用線上說明文件檔位於 <a href="http://www.phpbb.com/support/documentation/3.0/">文件</a> 和 <a href="http://www.phpbb.com/community/viewforum.php?f=46">技術支援版面</a>, 檢視 <a href="%3$s">README</a> 以得到更多的訊息.</p><p><strong>請在使用討論區前刪除, 移動或重新命名install資料夾. 如果這個資料夾存在, 只有管理員控制面板才可以訪問.</strong></p>',
	'INSTALL_INTRO'				=> '歡迎安裝！',

	'INSTALL_INTRO_BODY'		=> '使用這個選項, 應該可以在您的伺服器上安裝 phpBB.</p><p>為了繼續安裝, 您需要知道您的資料庫設置. 如果您不清楚這些, 請聯絡您的網站空間提供者. 沒有這些訊息安裝將不能繼續. 您需要:</p>

	<ul>
		<li>資料庫類型 - 您將使用的資料庫.</li>
		<li>資料庫伺服器主機名或 DSN - 資料庫伺服器網址.</li>
		<li>資料庫伺服器連接埠 - 資料庫伺服器連接埠 (一般情況下不需要輸入).</li>
		<li>資料庫名稱 - 資料庫伺服器上的資料庫名稱.</li>
		<li>會員名稱和密碼 - 用於登入並訪問上述資料庫的會員資料.</li>
	</ul>

	<p><strong>注意:</strong> 如果您使用 SQLite, 您應該在DSN框中輸入資料庫的完整路徑並保持會員名稱和密碼空白. 為了安全的原因, 您應該確保資料庫檔案不會存放在一個可以被公眾訪問的檔案夾下.</p>

	<p>phpBB3 支援如下的資料庫:</p>
	<ul>
		<li>MySQL 3.23 或更高 (支援MySQLi)</li>
		<li>PostgreSQL 7.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>Firebird 2.0+</li>
		<li>MS SQL Server 2000 或更高 (直接訪問或通過 ODBC)</li>
		<li>Oracle</li>
	</ul>
	
	<p>只有您的伺服器支援的資料庫才會被顯示.',
	'INSTALL_INTRO_NEXT'		=> '要開始安裝, 點選下面的按鈕. ',
	'INSTALL_LOGIN'				=> '登入討論區',
	'INSTALL_NEXT'				=> '下一步',
	'INSTALL_NEXT_FAIL'			=> '某些檢測未能通過, 您應該在進行下一步之前修正這些問題, 不然可能會導致安裝無法完成. ',
	'INSTALL_NEXT_PASS'			=> '全部的基礎檢測都已經通過, 您可以進行下一步了. 如果您改變了一些設定比如權限、模組等等, 您可以選擇重新檢測. ',
	'INSTALL_PANEL'				=> '安裝面板',
	'INSTALL_SEND_CONFIG'		=> '很抱歉, phpBB沒能將配置訊息直接寫入您的 config.php 檔案. 這可能是由於此檔案不存在或不可寫入. 下面將給出一些選項幫助您完成config.php設定. ',
	'INSTALL_START'				=> '開始安裝',
	'INSTALL_TEST'				=> '重新檢測',
	'INST_ERR'					=> '安裝過程出錯',
	'INST_ERR_DB_CONNECT'		=> '連接資料庫失敗, 錯誤訊息如下',
	'INST_ERR_DB_FORUM_PATH'	=> '指定的資料庫檔案位於討論區目錄內, 您應該把它放在一個無法通過網絡訪問的位置. ',
	'INST_ERR_DB_NO_ERROR'		=> '沒有得到相應的錯誤訊息',
	'INST_ERR_DB_NO_MYSQLI'		=> '伺服器內安裝的 MySQL 版本與您選擇的 “MySQL with MySQLi Extension” 選項不相容, 請嘗試 “MySQL” 選項. ',
	'INST_ERR_DB_NO_SQLITE'		=> '您安裝的 SQLite 版本太古老, 請升級至最低 2.8.2 版. ',
	'INST_ERR_DB_NO_ORACLE'		=> '伺服器內安裝的 Oracle 版本需要您將參數 <var>NLS_CHARACTERSET</var> 設置為 <var>UTF8</var>. 請設置此參數, 或將 Oracle 升級至最低 9.2 版. ',
	'INST_ERR_DB_NO_FIREBIRD'	=> '您安裝的 Firebird 版本太古老, 請升級至最低 2.0 版. ',
	'INST_ERR_DB_NO_FIREBIRD_PS'=> '您為 Firebird 選擇的資料庫的頁面容量小於 8192, 它必須至少為 8192. ',
	'INST_ERR_DB_NO_POSTGRES'	=> '您選擇的資料庫不是 <var>UNICODE</var> 或 <var>UTF8</var> 編碼, 請使用 <var>UNICODE</var> 或 <var>UTF8</var> 編碼的資料庫. ',
	'INST_ERR_DB_NO_NAME'		=> '沒有指定資料庫名稱',
	'INST_ERR_EMAIL_INVALID'	=> '您輸入的Email位址無效',
	'INST_ERR_EMAIL_MISMATCH'	=> '您輸入的兩個Email位址不相符',
	'INST_ERR_FATAL'			=> '安裝過程出現嚴重錯誤',
	'INST_ERR_FATAL_DB'			=> '資料庫出現了一個嚴重且不可回復的錯誤. 這可能是由於您指定的會員沒有 <code>CREATE TABLES</code> 或 <code>INSERT</code> 資料的適當權限, 下面可能會提供您更進一步的資訊. 請首先考慮聯繫您的服務供應商, 或是訪問phpBB支援討論區, 以得到進一步幫助. ',
	'INST_ERR_FTP_PATH'			=> '無法轉換到指定資料夾, 請檢查路徑訊息. ',
	'INST_ERR_FTP_LOGIN'		=> '無法登入 FTP 伺服器, 請檢查會員名稱和密碼. ',
	'INST_ERR_MISSING_DATA'		=> '您必須填完此表格的全部欄位',
	'INST_ERR_NO_DB'			=> '無法找到指定資料庫類型的 PHP 模組',
	'INST_ERR_PASSWORD_MISMATCH'	=> '您輸入的兩個密碼不相符. ',
	'INST_ERR_PASSWORD_TOO_LONG'	=> '您輸入的密碼過長, 請輸入最多30個字元. ',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> '您輸入的密碼太短, 請輸入最少6個字元. ',
	'INST_ERR_PREFIX'			=> '已經存在使用指定字首的資料表, 請指定另一個. ',
	'INST_ERR_PREFIX_INVALID'	=> '您指定的資料表字首無效, 請嘗試另一個, 去掉諸如連字元之類的字元. ',
	'INST_ERR_PREFIX_TOO_LONG'	=> '您指定的資料表字首過長, 上限為 %d 個字元. ',
	'INST_ERR_USER_TOO_LONG'	=> '您輸入的會員名稱過長, 請輸入最多20個字元. ',
	'INST_ERR_USER_TOO_SHORT'	=> '您輸入的會員名稱太短, 請輸入最少3個字元. ',
	'INVALID_PRIMARY_KEY'		=> '無效的主鍵 : %s',

	'LONG_SCRIPT_EXECUTION'		=> '請注意這需要處理一段時間... 請不要終止此程式.',
	
	// mbstring
	'MBSTRING_CHECK'						=> '<samp>mbstring</samp> 延伸功能檢測',
	'MBSTRING_CHECK_EXPLAIN'				=> '<samp>mbstring</samp> 是一個 PHP 延伸功能, 它提供多位元組字串處理功能. 某些 mbstring 的功能與phpBB不相容, 因此必須被禁用. ',
	'MBSTRING_FUNC_OVERLOAD'				=> '程式過載',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> 必須被設置為 0 或 4',
	'MBSTRING_ENCODING_TRANSLATION'			=> '字元編碼',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> 必須被設置為 0',
	'MBSTRING_HTTP_INPUT'					=> 'HTTP 輸入字元轉換',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> '<var>mbstring.http_input</var> 必須被設定為 <samp>pass</samp>',
	'MBSTRING_HTTP_OUTPUT'					=> 'HTTP 輸出字元轉換',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> 必須被設定為 <samp>pass</samp>',

	'MAKE_FOLDER_WRITABLE'		=> '請確認此資料夾存在並且可以被網絡伺服器寫入, 然後重試：<br />»<strong>%s</strong>',
	'MAKE_FOLDERS_WRITABLE'		=> '請確認這些資料夾存在並且可以被網絡伺服器寫入, 然後重試：<br />»<strong>%s</strong>',
	
	'MYSQL_SCHEMA_UPDATE_REQUIRED'   => '您的phpBB資料庫結構失效. phpBB檢測到您的資料庫結構源于MySQL 3.x/4.x版本, 但當前伺服器使用為MySQL %2$s.<br /><strong>在您繼續下一步之前, 您需要升級您的資料庫結構.</strong><br /><br />請參閱<a href="http://www.phpbb.com/kb/article/doesnt-have-a-default-value-errors/">關于MySQL資料庫升級的教學資料</a>. 如果您遇到問題, 請訪問<a href="http://www.phpbb.com/community/viewforum.php?f=46">我們的技術支援版面</a>.',

	'NAMING_CONFLICT'			=> '命名衝突: %s 與 %s 都是別名<br /><br />%s',
	'NEXT_STEP'					=> '繼續進行下一步',
	'NOT_FOUND'					=> '不存在',
	'NOT_UNDERSTAND'			=> '無法理解 %s #%d, 表格 %s (“%s”)',
	'NO_CONVERTORS'				=> '沒有可用的轉換程式',
	'NO_CONVERT_SPECIFIED'		=> '沒有指定轉換程式',
	'NO_LOCATION'				=> '無法確定位置. 如果您確定 Imagemagick 已經安裝, 請於討論區安裝完成之後, 在管理員控制台中指定它的位置. ',
	'NO_TABLES_FOUND'			=> '沒有找到任何表格',

	'OVERVIEW_BODY'					=> '歡迎安裝phpBB3!<br /><br />phpBB™ 是世界上使用最為廣泛的自由軟體討論區程式. phpBB3是自2000年以來這一系列的最新產品. 與之前的版本相比, phpBB3 具有更豐富的功能特性, 更友善的操作界面, 並擁有 phpBB Team 的完整技術支援. phpBB3 大幅提升了 phpBB2 受人歡迎的效能, 而且更增加了在之前的版本沒有但普遍需要的功能. 我們深切盼望 phpBB3 能夠滿足您的期望. <br /><br />安裝模組將指引您安裝的全過程, 并且指導您升級或轉換不同的論壇(包括phpBB2)到phpBB3. 要得到更多的資訊, 我們推薦您閱讀 <a href="../docs/INSTALL.html">安裝指示</a>.<br /><br />從側面的菜單中點擊不同的內容, 閱讀phpBB3授權使用協議以了解支持和我們對此的要求. 繼續下一步操作, 請從上方點擊相應的頁面.',

	'PCRE_UTF_SUPPORT'				=> 'PCRE UTF-8 支援',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> '如果PHP的PCRE擴展功能不支援UTF-8, phpBB 將 <strong>無法</strong> 運行. ',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP 函數 getimagesize() 可用',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>必需的</strong> - 為了讓phpBB正常運作,  需要啟用 getimagesize 函數.',
	'PHP_OPTIONAL_MODULE'			=> '可選模組',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>可選的</strong> - 這些模組或程式不是必需的. 但如果它們可用, 您將可以使用額外的功能. ',
	'PHP_SUPPORTED_DB'				=> '支援的資料庫',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>必需的</strong> - 您必須為PHP提供至少一個相容的資料庫. 如果下面沒有可用的資料庫模組, 您應該聯繫服務供應商, 或者查閱相關的PHP安裝文件. ',
	'PHP_REGISTER_GLOBALS'			=> 'PHP 設置 <var>register_globals</var> 已禁用',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> '如果此設置被允許, phpBB仍然會運行. 但出於安全考慮, 如果條件允許, 建議您將 register_globals 禁用. ',
	'PHP_SAFE_MODE'					=> '安全模式',
	'PHP_SETTINGS'					=> 'PHP 版本和設定',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>必需的</strong> - 要安裝phpBB, 您必需使用最低 4.3.3 版本的PHP. 如果下面出現 <var>safe mode</var>, 您的PHP正在運行於安全模式, 這將給遠程管理及類似功能帶來限制. ',
	'PHP_URL_FOPEN_SUPPORT'			=> 'PHP 設定 <var>allow_url_fopen</var> 為啟用狀態',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>可選項</strong> - 這個設置是可選的, 不過某些phpBB的功能例如外部頭像可能會因為沒有這個功能而無法正常工作. ',
	'PHP_VERSION_REQD'				=> 'PHP 版本 >= 4.3.3',
	'POST_ID'						=> '文章 ID',
	'PREFIX_FOUND'					=> '對資料表的掃瞄顯示一組有效的資料表正在使用 <strong>%s</strong> 作為字首. ',
	'PREPROCESS_STEP'				=> '正在執行轉換準備操作',
	'PRE_CONVERT_COMPLETE'			=> '全部的轉換準備步驟都已被成功完成, 您現在可以開始進行實際的轉換操作. ',
	'PROCESS_LAST'					=> '正在執行最後的指令',

	'REFRESH_PAGE'				=> '重新整理頁面以繼續轉換',
	'REFRESH_PAGE_EXPLAIN'		=> '如果設定為“是”, 轉換程式將會在完成每一步之後重新整理頁面, 然後繼續. 如果這是您為了測試目的而進行的第一次轉換, 我們建議您將此設定為“否”. ',
	'REQUIREMENTS_TITLE'		=> '伺服器相容性',
	'REQUIREMENTS_EXPLAIN'		=> '在完整安裝之前, phpBB需要對您的伺服器設置及所需檔案進行檢測, 以確定您是否可以安裝和運行phpBB. 請仔細瀏覽以下結果, 並在繼續進行之前確保所有必需的檢測都已通過. 如果您希望使用任何基於非必需檢測的功能, 請同時確保相關檢測已通過. ',
	'RETRY_WRITE'				=> '重新嘗試寫入配置',
	'RETRY_WRITE_EXPLAIN'		=> '如果您想允許phpBB寫入config.php, 您可以改變它的權限, 然後點擊下面的[重試]按鈕. 請記得在安裝完成之後恢復config.php的權限設定. ',

	'SCRIPT_PATH'				=> '系統程式存放路徑',
	'SCRIPT_PATH_EXPLAIN'		=> 'phpBB 根目錄與域名指向目錄的相對路徑, 例如：<samp>/phpBB3</samp>',
	'SELECT_LANG'				=> '選擇語系',
	'SERVER_CONFIG'				=> '伺服器設置',
	'SEARCH_INDEX_UNCONVERTED'	=> '搜尋索引沒有被轉換',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> '您的舊搜尋索引沒有被轉換. 搜尋將總是得到空結果. 如果需要建立一個新索引, 請到管理員控制台, 選擇維護, 然後從子選單中選擇搜尋索引.',
	'SOFTWARE'					=> '討論區軟體',
	'SPECIFY_OPTIONS'			=> '設定轉換選項',
	'STAGE_ADMINISTRATOR'		=> '管理員詳細資料',
	'STAGE_ADVANCED'			=> '進階設定',
	'STAGE_ADVANCED_EXPLAIN'	=> '只有您確定需要一些非預設設定時, 您才有必要更改此頁的內容. 如果您不確定, 請繼續至下一頁, 因為這些設定可以隨時在管理員控制台中更改. ',
	'STAGE_CONFIG_FILE'			=> '設定檔案',
	'STAGE_CREATE_TABLE'		=> '建立資料表',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'phpBB 3.0 所使用的資料庫表格已經被建立並被填入一些初始資料, 請繼續至下一頁以完成安裝. ',
	'STAGE_DATABASE'			=> '資料庫設定',
	'STAGE_FINAL'				=> '完成',
	'STAGE_INTRO'				=> '簡介',
	'STAGE_IN_PROGRESS'			=> '進行轉換',
	'STAGE_REQUIREMENTS'		=> '檢測需求',
	'STAGE_SETTINGS'			=> '設定',
	'STARTING_CONVERT'			=> '開始轉換操作',
	'STEP_PERCENT_COMPLETED'	=> '第 <strong>%d</strong> 步 / 共 <strong>%d</strong> 步',
	'SUB_INTRO'					=> '簡介',
	'SUB_LICENSE'				=> '授權',
	'SUB_SUPPORT'				=> '支援',
	'SUCCESSFUL_CONNECT'		=> '連接成功',
	'SUPPORT_BODY'				=> '我們為此次發布的phpBB3穩定版本提供免費的技術支援. 這包括:</p><ul><li>安裝</li><li>設定</li><li>技術答疑</li><li>與軟體中潛在Bug相關的問題</li><li>從先前發布的候選(RC)版本升級至最新版本</li><li>從phpBB 2.0.x 轉換至 phpBB3</li><li>從其他的討論區軟體轉換至 phpBB3 (請訪問 <a href="http://www.phpbb.com/community/viewforum.php?f=65">轉換討論版面</a>)</li></ul><p>我們建議還在使用beta版本的用戶使用最新版本替換他們的系統.</p><h2>MOD / 風格</h2><p>與MOD相關的問題, 請發布在相應的 <a href="http://www.phpbb.com/community/viewforum.php?f=81">插件討論版面</a>.<br />風格相關的問題, 請發布在相應的<a href="http://www.phpbb.com/community/viewforum.php?f=80">風格討論版面</a>.<br /><br />如果您的問題與特定的插件或風格相關, 請直接在相應程式的主題后跟帖.</p><h2>獲取支援</h2><p><a href="http://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">phpBB歡迎頁面</a><br /><a href="http://www.phpbb.com/support/">技術支援</a><br /><a href="http://www.phpbb.com/support/documentation/3.0/quickstart/">快速上手教程</a><br /><br />為了確保您獲得最新版本的相關訊息, 請<a href="http://www.phpbb.com/support/">訂閱我們的郵件組</a>.<br /><br />',
	'SYNC_FORUMS'				=> '開始同步版面',
	'SYNC_POST_COUNT'			=> '正在同步文章',
	'SYNC_POST_COUNT_ID'		=> '正在同步<var>序號</var>為 %1$s 到 %2$s 的文章.',
	'SYNC_TOPICS'				=> '開始同步主題',
	'SYNC_TOPIC_ID'				=> '正在同步主題：<var>topic_id</var> %1$s 至 %2$s',

	'TABLES_MISSING'			=> '無法找到這些資料表<br />» <strong>%s</strong>',
	'TABLE_PREFIX'				=> '為資料庫中的資料表名稱添加字首',
	'TABLE_PREFIX_SAME'			=> '資料表字首需要與轉換之前所使用的相同. <br />»  之前所使用的資料表字首是 %s',
	'TESTS_PASSED'				=> '檢測通過',
	'TESTS_FAILED'				=> '檢測未通過',

	'UNABLE_WRITE_LOCK'			=> '無法寫入鎖定檔案',
	'UNAVAILABLE'				=> '不可用',
	'UNWRITABLE'				=> '不可寫',
	'UPDATE_TOPICS_POSTED'		=> '正在產生主題發表訊息',
	'UPDATE_TOPICS_POSTED_ERR'	=> '在產生主題訊息時發生錯誤. 您可以在轉換結束後在管理員控制台中重試這個操作.',
	'VERIFY_OPTIONS'			=> '驗證轉換選項',
	'VERSION'					=> '版本',

	'WELCOME_INSTALL'			=> '歡迎安裝 phpBB 3',
	'WRITABLE'					=> '可寫',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> '所有的檔案都已經升級到最新版本. 現在您應該 <a href="../ucp.php?mode=login">登入到討論區</a> 並檢查系統是否正常工作. 不要忘記刪除或者重新命名（移動）install安裝目錄！',
	'ARCHIVE_FILE'				=> '原始檔案',

	'BACK'				=> '後退',
	'BINARY_FILE'		=> '二進制檔案',
	'BOT'				=> '爬蟲/機器人',

	'CHANGE_CLEAN_NAMES'			=> '這方法將確認會員名稱沒有被重複使用. 當使用這新的方法做比對時, 一些會員會得到相同的名稱. 在繼續之前, 您必須將這些會員刪除或改名以確保每個會員名稱只有一個會員使用. ',
	'CHECK_FILES'					=> '檢查檔案',
	'CHECK_FILES_AGAIN'				=> '再次檢查檔案',
	'CHECK_FILES_EXPLAIN'			=> '在下面的步驟中相關聯的檔案都將被檢查 - 如果這是第一次檔案檢查, 將花費一定的時間. ',
	'CHECK_FILES_UP_TO_DATE'		=> '依照您資料庫的版本已是最新. 您需要處理一個檔案檢查確信所有的檔案已經更新到了phpBB最近版本的檔案. ',
	'CHECK_UPDATE_DATABASE'			=> '繼續升級過程',
	'COLLECTED_INFORMATION'			=> '已經收集到的檔案資訊',
	'COLLECTED_INFORMATION_EXPLAIN'	=> '下面的列表顯示需要更新的檔案資訊. 請閱讀每個區塊前的訊息並理解其意義, 以及瞭解您需要做的事情以確保升級成功. ',
	'COLLECTING_FILE_DIFFS'			=> '收集文件差異',
	'COMPLETE_LOGIN_TO_BOARD'		=> '現在您應該 <a href="../ucp.php?mode=login">登入討論區</a> 並檢查系統是否正常工作. 不要忘記刪除或者重新命名（移動）install目錄！',
	'CONTINUE_UPDATE_NOW'			=> '現在繼續升級過程', // Shown within the database update script at the end if called from the updater
	'CONTINUE_UPDATE'				=> '現在繼續升級',					// Shown after file upload to indicate the update process is not yet finished
	'CURRENT_FILE'					=> '目前原始檔案的開端 - 差異部分',
	'CURRENT_VERSION'				=> '目前的版本',

	'DATABASE_TYPE'						=> '資料庫類型',
	'DATABASE_UPDATE_INFO_OLD'			=> '在安裝資料夾中的資料庫升級檔案是過時的. 請確認您上傳的是正確版本的檔案. ',
	'DELETE_USER_REMOVE'				=> '刪除會員並刪除他的文章',
	'DELETE_USER_RETAIN'				=> '刪除會員但保留他的文章',
	'DESTINATION'						=> '目標檔案',
	'DIFF_INLINE'						=> '行內',
	'DIFF_RAW'							=> '簡略的比對差異',
	'DIFF_SEP_EXPLAIN'					=> '新已更新檔案使用的程式段',
	'DIFF_SIDE_BY_SIDE'					=> '對齊',
	'DIFF_UNIFIED'						=> '標準對比',
	'DO_NOT_UPDATE'						=> '不要上傳這個檔案',
	'DONE'								=> '完成',
	'DOWNLOAD'							=> '下載',
	'DOWNLOAD_AS'						=> '下載為',
	'DOWNLOAD_UPDATE_METHOD_BUTTON'      => '下載已修改的檔案 (推薦)',
	'DOWNLOAD_CONFLICTS'            => '下載此檔案的差異部分',
	'DOWNLOAD_CONFLICTS_EXPLAIN'      => '搜尋 &lt;&lt;&lt; 標出差異',
	'DOWNLOAD_UPDATE_METHOD'			=> '下載已修改的檔案',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> '當您下載並解壓縮檔案後, 您需要上傳檔案到 phpBB 根目錄. 請上傳檔案到分別的位置. 當你完成所有檔案的上傳後, 請再用下面的按鈕檢查檔案. ',

	'ERROR'		=> '錯誤',
	'EDIT_USERNAME'	=> '編輯會員名稱',

	'FILE_ALREADY_UP_TO_DATE'		=> '檔案已經是最新',
	'FILE_DIFF_NOT_ALLOWED'			=> '檔案不允許是不同',
	'FILE_USED'						=> '訊息來自於',			// Single file
	'FILES_CONFLICT'				=> '有衝突的檔案',
	'FILES_CONFLICT_EXPLAIN'		=> '下面的檔案已經修改過, 不是舊版本的原始檔案. phpBB 認為合併這些檔案會產生衝突. 請檢查衝突並嘗試手工的解決, 或者選擇一種合併的方式繼續更新. 如果您手動修改消除了衝突, 請再次運行檔案檢查. 您也可以選擇為每個檔案自動手選合併. 這將拋棄舊版本檔案的衝突代碼而丟失您於這個檔案上的修改. ',
	'FILES_MODIFIED'				=> '已修改的檔案',
	'FILES_MODIFIED_EXPLAIN'		=> '下面的檔案已經修改, 不是舊版本的原始檔案. 更新檔案將合併你修改過的檔案. ',
	'FILES_NEW'						=> '新檔案',
	'FILES_NEW_EXPLAIN'				=> '以下的檔案在安裝中不存在.',
	'FILES_NEW_CONFLICT'			=> '新的衝突檔案',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> '下面的檔案在新版本中已更新, 但是在對應目錄已經存在同名檔案, 這個檔案將被新檔案覆蓋. ',
	'FILES_NOT_MODIFIED'			=> '未修改的檔案',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> '下面的檔案沒有被修改. ',
	'FILES_UP_TO_DATE'				=> '已經升級的檔案',
	'FILES_UP_TO_DATE_EXPLAIN'		=> '以下的檔案已經是最新的, 不需升級.',
	'FTP_SETTINGS'					=> 'FTP 設定',
	'FTP_UPDATE_METHOD'				=> 'FTP 上傳',

	'INCOMPATIBLE_UPDATE_FILES'		=> '找到的升級檔案不適用於您目前的版本. 您的安裝版本是 %1$s 而升級檔案是用於升級 phpBB %2$s 到 %3$s.',
	'INCOMPLETE_UPDATE_FILES'		=> '上傳的檔案不完全',
	'INLINE_UPDATE_SUCCESSFUL'		=> '資料庫升級成功. 現在您需要繼續升級過程.',

	'KEEP_OLD_NAME'		=> '保留會員名稱',
	
	'LATEST_VERSION'		=> '最新版本',
	'LINE'					=> '行',
	'LINE_ADDED'			=> '已加入',
	'LINE_MODIFIED'			=> '已修改',
	'LINE_REMOVED'			=> '已刪除',
	'LINE_UNMODIFIED'		=> '未修改',
	'LOGIN_UPDATE_EXPLAIN'	=> '您必須登入後才能升級您的討論區.',

	'MAPPING_FILE_STRUCTURE'	=> '為了方便上傳, 這裡有安裝檔案位置的對應表.',

	'MERGE_MODIFICATIONS_OPTION'	=> '合併修改',

	'MERGE_NO_MERGE_NEW_OPTION'	=> '不要合併 - 使用新檔案',
	'MERGE_NO_MERGE_MOD_OPTION'	=> '不要合併 - 使用目前安裝的檔案',
	'MERGE_MOD_FILE_OPTION'		=> '合併不同之處並使用修改過的代碼替代衝突代碼',
	'MERGE_NEW_FILE_OPTION'		=> '合併不同之處並使用新檔案的代碼替代衝突代碼',
	'MERGE_SELECT_ERROR'		=> '沒有正確選擇衝突檔案合併方式.',
	'MERGING_FILES'				=> '合併差異',
	'MERGING_FILES_EXPLAIN'		=> '現在正收集最後所需要改變的檔案.<br /><br />請稍後直到 phpBB 將所有已改變的檔案處理完成.',

	'NEW_FILE'						=> '新升級的檔案末端',
	'NEW_USERNAME'					=> '新的會員名稱',
	'NO_AUTH_UPDATE'				=> '無權進行升級',
	'NO_ERRORS'						=> '沒有錯誤',
	'NO_UPDATE_FILES'				=> '不要升級以下檔案',
	'NO_UPDATE_FILES_EXPLAIN'		=> '以下的檔案有更新或者修改過的版本, 但是在您安裝的資料夾中找到. 如果列表中包含了除了language/或者styles/ 目錄以外的檔案, 可能您曾經修改過目錄結構, 升級程式可能沒有執行完全. ',
	'NO_UPDATE_FILES_OUTDATED'		=> '沒有發現有效的更新目錄, 請確認上傳了相關的升級檔案. <br /><br />您的安裝似乎 <strong>不是</strong> 最新版本. 版本 %1$s 的phpBB的更新程式已經提供下載, 請訪問 <a href="http://www.phpbb.com/downloads.php" rel="external">http://www.phpbb.com/downloads.php</a> 獲得正確的從版本%2$s 到版本%3$s 升級檔案. ',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> '您的版本已經是最新版本. 沒有必要進行升級. 如果您想要徹底地檢查您的檔案, 請確信您上傳了正確的更新檔案. ',
	'NO_UPDATE_INFO'				=> '無法找到升級的檔案訊息.',
	'NO_UPDATES_REQUIRED'			=> '不需要升級',
	'NO_VISIBLE_CHANGES'			=> '沒有明顯的更改',
	'NOTICE'						=> '注意',
	'NUM_CONFLICTS'					=> '衝突的數量',
	'NUMBER_OF_FILES_COLLECTED'		=> '正在檢查 %2$d 個檔案中 %1$d 個檔案的差異.<br />請等待直到檔案檢查完成.',

	'OLD_UPDATE_FILES'		=> '升級檔案已經過期. 找到的升級檔案是用於 phpBB %1$s 到 phpBB %2$s 的升級, 但是最新的 phpBB 版本是 %3$s.',

	'PACKAGE_UPDATES_TO'				=> '目前的升級包更新版本到',
	'PERFORM_DATABASE_UPDATE'			=> '進行資料庫升級',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> '在下面是資料庫升級腳本的按紐. 這個腳本需要分開執行, 因為資料庫升級中可能會產生不可預見的結果. 資料庫升級要花費一定時間, 在這期間看起來沒有反應, 但是不要在半途停止執行.  當您處理完資料庫的升級後, 請關閉資料庫升級的視窗並繼續升級程式. ',
	'PREVIOUS_VERSION'					=> '上一個版本',
	'PROGRESS'							=> '進度',

	'RESULT'					=> '結果',
	'RUN_DATABASE_SCRIPT'		=> '現在升級我的資料庫',

	'SELECT_DIFF_MODE'			=> '選擇對比模式',
	'SELECT_DOWNLOAD_FORMAT'	=> '選擇下載檔案格式',
	'SELECT_FTP_SETTINGS'		=> '選擇 FTP 設定',
	'SHOW_DIFF_CONFLICT'		=> '顯示差異/衝突',
	'SHOW_DIFF_FINAL'			=> '顯示檔案比對結果',
	'SHOW_DIFF_MODIFIED'		=> '顯示合併的差異',
	'SHOW_DIFF_NEW'				=> '顯示檔案內容',
	'SHOW_DIFF_NEW_CONFLICT'	=> '顯示有衝突的差異',
	'SHOW_DIFF_NOT_MODIFIED'	=> '顯示差異',
	'SOME_QUERIES_FAILED'		=> '部分查詢失敗, 失敗的語句列出如下',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> '這不需要太多擔心, 更新會繼續. 如果想解決這個問題您需要到我們的技術支援討論區中查看或尋求幫助. 請查看 <a href="../docs/README.html">README</a> 瞭解如何獲取更多建議. ',
	'STAGE_FILE_CHECK'			=> '檢查檔案',
	'STAGE_UPDATE_DB'			=> '升級資料庫',
	'STAGE_UPDATE_FILES'		=> '升級檔案',
	'STAGE_VERSION_CHECK'		=> '版本檢查',
	'STATUS_CONFLICT'			=> '修改的檔案產生衝突',
	'STATUS_MODIFIED'			=> '已修改的檔案',
	'STATUS_NEW'				=> '新檔案',
	'STATUS_NEW_CONFLICT'		=> '有衝突的新檔案',
	'STATUS_NOT_MODIFIED'		=> '未修改的檔案',
	'STATUS_UP_TO_DATE'			=> '已升級的檔案',
	
	'TOGGLE_DISPLAY'			=> '檢視/隱藏檔案列表',
	'TRY_DOWNLOAD_METHOD'      => '您也許想嘗試下載已修改檔案的方式.<br />這是一種較穩妥并被推薦的方式.',
    'TRY_DOWNLOAD_METHOD_BUTTON'=> '嘗試此方式',

	'UPDATE_COMPLETED'				=> '升級完成',
	'UPDATE_DATABASE'				=> '更新資料庫',
	'UPDATE_DATABASE_EXPLAIN'		=> '下一步資料庫將被更新.',
	'UPDATE_DATABASE_SCHEMA'		=> '升級資料庫結構',
	'UPDATE_FILES'					=> '升級檔案',
	'UPDATE_FILES_NOTICE'			=> '請確認您已經升級了討論區檔案, 這個檔案僅用於升級您的討論區資料庫.',
	'UPDATE_INSTALLATION'			=> '升級安裝',
	'UPDATE_INSTALLATION_EXPLAIN'	=> '本選項將升級您的phpBB安裝到最新版本. <br />在升級處理期間所有的檔案都將被檢查是否完整. 您可以查看檔案和升級前的變化. <br /><br />檔案自動升級有兩種不同的方式. </p><h2>手動升級</h2><p>這個選項, 您只需要下載有改動的檔案以確保不會丟失你對其他檔案的修改. 下載後將檔案上傳到phpBB目錄的相應位置. 之後, 您可以再次進行檔案檢查, 檢查是否將檔案放到了正確的位置. </p><h2>通過FTP自動升級</h2><p>這個方法和第一個類似, 但是不需要下載有變動的檔案和手動上傳它們. 系統將為你自動做這個工作. 用這個方法進行升級您需要知道您的FTP登入的詳細訊息.  一旦完成設置, 系統將重新定向到檔案檢查功能完成系統升級. .<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>發佈公告</h1>

		<p>在您繼續更新過程之前, 請閱讀<a href="%1$s" title="%1$s">最新版本的發佈公告</a> , 它包含很多有用的資訊. 它也包含完整的下載連結和代碼變動日誌. </p>

		<br />

		<h1>如何使用自動升級程式升級您的討論區</h1>

		<p>下面列出的是推薦的升級方法, 它只對自動升級包有效. 您也可以採用 INSTALL.html 中列出的方式升級. 自動升級 phpBB3 的步驟是：</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>前往 <a href="http://www.phpbb.com/downloads.php" title="http://www.phpbb.com/downloads.php">phpBB.com 下載頁面</a> 下載 "Automatic Update Package" 檔案.<br /><br /></li>
			<li>解壓縮檔案.<br /><br /></li>
			<li>上傳解壓完成的檔案到您的phpBB安裝的根資料夾（即config.php檔案所在資料夾）. <br /><br /></li>
		</ul>

		<p>上傳install資料夾後您的討論區將阻止普通會員的訪問. <br /><br />
		<strong><a href="%2$s" title="%2$s">現在輸入install資料夾位址開始更新程式</a>. </strong><br />
		<br />
		按嚮導完成開始更新. 完成後更新程式將給您發送一個通知. 
		</p>
	',
	'UPDATE_INSTRUCTIONS_INCOMPLETE'	=> '

		<h1>檢測到未完成的升級</h1>

		<p>phpBB 檢測到一個未完成的自動升級. 請確認您按照自動升級程式的提示依次執行了每一個步驟. 您可以在下面再次看到連結, 或者直接重回您的 install 資料夾位址.</p>
	',
	'UPDATE_METHOD'					=> '升級方式',
	'UPDATE_METHOD_EXPLAIN'			=> '你可以選擇合適的上傳方式. 使用FTP上傳你需要提供FTP帳號的詳細訊息.  使用這種方法檔案將自動移動到對應資料夾並且通過在原檔案後添加.bak副檔名的方式備份原來的檔案 . 如果你選擇下載修改的檔案則你要解壓縮包後手動的上傳檔案到相應的資料夾. ',
	'UPDATE_REQUIRES_FILE'			=> '現在底下列出升級所需要的檔案: %s',
	'UPDATE_SUCCESS'				=> '更新完成',
	'UPDATE_SUCCESS_EXPLAIN'		=> '成功更新所有檔案. 下一步將重新校驗所有檔案以確保檔案被正確升級.',
	'UPDATE_VERSION_OPTIMIZE'		=> '更新版本, 優化資料庫資料表',
	'UPDATING_DATA'					=> '更新資料',
	'UPDATING_TO_LATEST_STABLE'		=> '更新資料庫至最新的穩定版本',
	'UPDATED_VERSION'				=> '已更新的版本',
	'UPLOAD_METHOD'					=> '上傳方式',

	'UPDATE_DB_SUCCESS'				=> '資料庫更新完成',
	'USER_ACTIVE'					=> '已啟用的會員',
	'USER_INACTIVE'					=> '未啟用的會員',

	'VERSION_CHECK'				=> '版本檢查',
	'VERSION_CHECK_EXPLAIN'		=> '檢查您目前運行的討論區是否是最新版本.',
	'VERSION_NOT_UP_TO_DATE'	=> '您的討論區版本不是最新的, 請繼續升級過程.',
	'VERSION_NOT_UP_TO_DATE_ACP'=> '您的討論區版本不是最新的.<br />下面是最新版本的發佈公告和如何執行更新的連結.',
	'VERSION_UP_TO_DATE'		=> '您的版本是最新的, 沒有可用的更新. 您也許想進行一次討論區程式檔案的有效性檢查.',
	'VERSION_UP_TO_DATE_ACP'	=> '您的版本是最新的, 沒有可用的更新. 您不需要升級您的討論區.',
	'VIEWING_FILE_CONTENTS'		=> '檢視檔案內容',
	'VIEWING_FILE_DIFF'			=> '檢視檔案差異',

	'WRONG_INFO_FILE_FORMAT'	=> '錯誤的訊息檔案格式',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> '非常感謝, 討論區管理團隊 敬上',
	'CONFIG_SITE_DESC'				=> '用於描述您的討論區的一小段文字',
	'CONFIG_SITENAME'				=> 'phpBB討論區',

	'DEFAULT_INSTALL_POST'			=> '這是新安裝好的phpBB3討論區的一篇範例文章. 您可以刪除這篇文章、這個主題甚至這個版面,  因為一切看起來都運轉正常！',

	'EXT_GROUP_ARCHIVES'			=> '壓縮檔',
	'EXT_GROUP_DOCUMENTS'			=> '文件檔',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> '可下載的檔案',
	'EXT_GROUP_FLASH_FILES'			=> 'Flash檔案',
	'EXT_GROUP_IMAGES'				=> '圖片檔',
	'EXT_GROUP_PLAIN_TEXT'			=> '純文字檔',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime多媒體檔案',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real Media多媒體檔',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows Media多媒體檔',

	'FORUMS_FIRST_CATEGORY'			=> '我的第一個分區',
	'FORUMS_TEST_FORUM_DESC'		=> '這只是一個測試版面.',
	'FORUMS_TEST_FORUM_TITLE'		=> '測試版面一',

	'RANKS_SITE_ADMIN_TITLE'		=> '系統管理員',
	'REPORT_WAREZ'					=> '文章包含違法或盜版軟體的連結.',
	'REPORT_SPAM'					=> '被舉報的文章唯一的目的就是為網站或某些產品做廣告.',
	'REPORT_OFF_TOPIC'				=> '被檢舉的是離題文章.',
	'REPORT_OTHER'					=> '舉報的原因不符合列舉的項目, 請輸入備註描述.',

	'SMILIES_ARROW'					=> '箭頭',
	'SMILIES_CONFUSED'				=> '疑惑',
	'SMILIES_COOL'					=> '酷!',
	'SMILIES_CRYING'				=> '哭泣或非常傷心',
	'SMILIES_EMARRASSED'			=> '困窘',
	'SMILIES_EVIL'					=> '邪惡或瘋狂',
	'SMILIES_EXCLAMATION'			=> '感歎',
	'SMILIES_GEEK'					=> '滑稽',
	'SMILIES_IDEA'					=> '想法',
	'SMILIES_LAUGHING'				=> '大笑',
	'SMILIES_MAD'					=> '抓狂',
	'SMILIES_MR_GREEN'				=> '苦笑',
	'SMILIES_NEUTRAL'				=> '中立',
	'SMILIES_QUESTION'				=> '疑問',
	'SMILIES_RAZZ'					=> '冷笑',
	'SMILIES_ROLLING_EYES'			=> '滴溜的眼睛',
	'SMILIES_SAD'					=> '憂鬱',
	'SMILIES_SHOCKED'				=> '震撼',
	'SMILIES_SMILE'					=> '微笑',
	'SMILIES_SURPRISED'				=> '驚訝',
	'SMILIES_TWISTED_EVIL'			=> '扭曲的惡魔',
	'SMILIES_UBER_GEEK'				=> '搞笑',
	'SMILIES_VERY_HAPPY'			=> '特開心',
	'SMILIES_WINK'					=> '眨眼',

	'TOPICS_TOPIC_TITLE'			=> '歡迎來到phpBB3',
));

?>
