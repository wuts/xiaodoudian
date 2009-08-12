<?php
/**
*
* acp_board [Chinese Traditional]
*
* @package language
* @version $Id: board.php 8554 2008-05-15 13:29:14Z Kellanved $
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

// Board Settings
$lang = array_merge($lang, array(
	'ACP_BOARD_SETTINGS_EXPLAIN'	=> '這裡您可以進行討論區的基本操作.',
	'CUSTOM_DATEFORMAT'				=> '自行定義…',
	'DEFAULT_DATE_FORMAT'			=> '日期格式',
	'DEFAULT_DATE_FORMAT_EXPLAIN'	=> '日期格式和PHP定義相同 <code>date</code> 函數.',
	'DEFAULT_LANGUAGE'				=> '預設語系',
	'DEFAULT_STYLE'					=> '預設風格',
	'DISABLE_BOARD'					=> '關閉討論區',
	'DISABLE_BOARD_EXPLAIN'			=> '這將讓會員無法使用討論區. 您可以輸入一段簡單的文字描述原因(255個字元以內).',
	'OVERRIDE_STYLE'				=> '覆蓋會員風格',
	'OVERRIDE_STYLE_EXPLAIN'		=> '使用預設的風格覆蓋會員所選風格.',
	'SITE_DESC'						=> '網站描述',
	'SITE_NAME'						=> '網站名稱',
	'SYSTEM_DST'					=> '啟用日光節約時間',
	'SYSTEM_TIMEZONE'				=> '系統時區',
	'WARNINGS_EXPIRE'				=> '警告失效時間',
	'WARNINGS_EXPIRE_EXPLAIN'		=> '會員警告自動消失所需要的天數',
));

// Board Features
$lang = array_merge($lang, array(
	'ACP_BOARD_FEATURES_EXPLAIN'	=> '這裡您可以啟用/停用某些討論區功能',

	'ALLOW_ATTACHMENTS'			=> '允許附加檔案',
	'ALLOW_BIRTHDAYS'			=> '啟用「生日」',
	'ALLOW_BIRTHDAYS_EXPLAIN'	=> '允許輸入個人生日並在個人訊息中顯示年齡。請注意討論區首頁中顯示的生日列表是由另一項負載設置控制的。',
	'ALLOW_BOOKMARKS'			=> '允許主題收藏',
	'ALLOW_BOOKMARKS_EXPLAIN'	=> '會員可以儲存個人收藏夾',
	'ALLOW_BBCODE'				=> '允許BBCode',
	'ALLOW_FORUM_NOTIFY'		=> '允許訂閱版面',
	'ALLOW_NAME_CHANGE'			=> '允許更改會員名稱',
	'ALLOW_NO_CENSORS'			=> '允許停用敏感詞過濾',
	'ALLOW_NO_CENSORS_EXPLAIN'	=> '會員可以選擇是否停用文章和訊息中的敏感詞自動過濾.',
	'ALLOW_PM_ATTACHMENTS'		=> '在私人訊息中允許附加檔案',
	'ALLOW_SIG'					=> '允許簽名檔',
	'ALLOW_SIG_BBCODE'			=> '在簽名檔中允許使用BBCode',
	'ALLOW_SIG_FLASH'			=> '在會員簽名檔中允許使用<code>[FLASH]</code> 標籤',
	'ALLOW_SIG_IMG'				=> '在會員簽名檔中允許使用<code>[IMG]</code> 標籤',
	'ALLOW_SIG_LINKS'			=> '在會員簽名檔中允許使用連結',
	'ALLOW_SIG_LINKS_EXPLAIN'	=> '如果停用 <code>[URL]</code> 標籤和自動連結解析都會失效.',
	'ALLOW_SIG_SMILIES'			=> '允許在會員簽名檔中使用表情符號',
	'ALLOW_SMILIES'				=> '允許表情符號',
	'ALLOW_TOPIC_NOTIFY'		=> '允許訂閱主題',
	'BOARD_PM'					=> '私人訊息',
	'BOARD_PM_EXPLAIN'			=> '啟用或停用所有會員的私人訊息.',
));

// Avatar Settings
$lang = array_merge($lang, array(
	'ACP_AVATAR_SETTINGS_EXPLAIN'	=> '頭像是會員用於展示自己的一幅小圖檔. 根據風格有所不同, 不過它們通常顯示在會員發佈的文章旁邊. 這裡您可以決定會員是否能夠定義他們的頭像. 請注意如果允許會員上傳頭像, 您必須建立下面的資料夾並保證這個資料夾對於web伺服器是可寫的. 同時也要注意這個檔案大小只對頭像上傳有效, 對於連結的頭像是沒有限制的.',

	'ALLOW_LOCAL'					=> '允許使用系統頭像簿',
	'ALLOW_REMOTE'					=> '允許使用外部頭像',
	'ALLOW_REMOTE_EXPLAIN'			=> '允許從其他網站連結頭像',
	'ALLOW_UPLOAD'					=> '允許頭像上傳',
	'AVATAR_GALLERY_PATH'			=> '系統頭像簿路徑',
	'AVATAR_GALLERY_PATH_EXPLAIN'	=> '在您的phpBB討論區根目錄下的預先設定的頭像簿, 例如 <samp>images/avatars/gallery</samp>',
	'AVATAR_STORAGE_PATH'			=> '頭像儲存路徑',
	'AVATAR_STORAGE_PATH_EXPLAIN'	=> '在您的phpBB討論區根目錄下的路徑, 例如 <samp>images/avatars/upload</samp>',
	'MAX_AVATAR_SIZE'				=> '最大頭像尺寸',
	'MAX_AVATAR_SIZE_EXPLAIN'		=> '(用像素表示的寬 x 高)',
	'MAX_FILESIZE'					=> '最大的頭像檔案大小',
	'MAX_FILESIZE_EXPLAIN'			=> '允許上傳的頭像檔案大小',
	'MIN_AVATAR_SIZE'				=> '最小頭像尺寸',
	'MIN_AVATAR_SIZE_EXPLAIN'		=> '(用像素表示的寬 x 高)',
));

// Message Settings
$lang = array_merge($lang, array(
	'ACP_MESSAGE_SETTINGS_EXPLAIN'		=> '這裡您可以設置私人訊息的所有預設設置',

	'ALLOW_BBCODE_PM'			=> '在私人訊息中允許BBCode',
	'ALLOW_FLASH_PM'			=> '允許使用<code>[FLASH]</code>',
	'ALLOW_FLASH_PM_EXPLAIN'	=> '這個選項設置是否允許在私人訊息中使用flash, 在這裡啟用後會員依然要視討論區的權限而決定是否可用.',
	'ALLOW_FORWARD_PM'			=> '允許轉寄私人訊息',
	'ALLOW_IMG_PM'				=> '允許使用<code>[IMG]</code>',
	'ALLOW_MASS_PM'				=> '允許對多個會員和會員群組發送私人訊息',
	'ALLOW_MASS_PM_EXPLAIN'      => '對會員組的訊息發送可以在會員組控制面板中對每個組單獨設定.',
	'ALLOW_PRINT_PM'			=> '允許列印格式檢視私人訊息',
	'ALLOW_QUOTE_PM'			=> '允許在私人訊息中引用',
	'ALLOW_SIG_PM'				=> '允許在私人訊息中使用簽名檔',
	'ALLOW_SMILIES_PM'			=> '允許在私人訊息中使用表情符號',
	'BOXES_LIMIT'				=> '每個檔案夾中的最多信件數量',
	'BOXES_LIMIT_EXPLAIN'		=> '會員每個檔案夾中的私人訊息將不能超過這個數量. 設置為0將不作限制.',
	'BOXES_MAX'					=> '每個會員的最大檔案夾數量',
	'BOXES_MAX_EXPLAIN'			=> '預設情況下會員可以建立檔案夾來儲存自己的信件.',
	'ENABLE_PM_ICONS'			=> '在私人訊息中允許使用主題圖示',
	'FULL_FOLDER_ACTION'		=> '檔案夾滿時的預設動作',
	'FULL_FOLDER_ACTION_EXPLAIN'=> '如果會員的檔案夾滿了, 預設進行的操作. 已發送檔案夾的預設操作固定為刪除舊信件.',
	'HOLD_NEW_MESSAGES'			=> '保留新信件',
	'PM_EDIT_TIME'				=> '編輯時限',
	'PM_EDIT_TIME_EXPLAIN'		=> '對於沒有發送完成的信件的編輯時限. 設置為0將不作限制.',
	'PM_MAX_RECIPIENTS'         => '收件人的數量上限',
	'PM_MAX_RECIPIENTS_EXPLAIN'   => '單個私人訊息中允許的最大收件人數量. 設定為 0 則不作限制. 此設定可以在會員組控制面板中對每個會員組分別設定.',
));

// Post Settings
$lang = array_merge($lang, array(
	'ACP_POST_SETTINGS_EXPLAIN'			=> '這裡您可以設置發表文章的所有預設設置',
	'ALLOW_POST_LINKS'					=> '在文章/訊息中允許連結',
	'ALLOW_POST_LINKS_EXPLAIN'			=> '如果停用了<code>[URL]</code> 標籤將停止連結解析.',
	'ALLOW_POST_FLASH'					=> '允許在文章中使用 <code>[FLASH]</code> BBCode 標籤',
	'ALLOW_POST_FLASH_EXPLAIN'			=> '如果停用 <code>[FLASH]</code> BBCode 標籤, 將禁止在文章中使用flash. 否則由權限系統控制哪些會員可以使用 <code>[FLASH]</code> BBCode 標籤.',
	
	'ENABLE_QUEUE_TRIGGER'         => '啟用新會員發文待審',
	'ENABLE_QUEUE_TRIGGER_EXPLAIN'   => '此功能啟用後, 如果發文者的文章數量少于指定值, 其發表的文章會被置入待審核文章列表, 需要審核后才能發表. 此功能對論壇的權限設置沒有影響.',
	'QUEUE_TRIGGER_POSTS'         => '判斷是否需審的會員最小文章數量',
	'QUEUE_TRIGGER_POSTS_EXPLAIN'   => '如果啟用新會員發文待審, 會員需要達到此文章數後才能直接發表文章而不需審核, 否則會被自動置入待審文章隊列.',

	'BUMP_INTERVAL'					=> '頂文章間隔',
	'BUMP_INTERVAL_EXPLAIN'			=> '主題中最後一篇文章發表後的天數/小時數/分鍾數.',
	'CHAR_LIMIT'					=> '每篇文章最多字元數',
	'CHAR_LIMIT_EXPLAIN'			=> '設置為0則不作限制.',
	'DISPLAY_LAST_EDITED'			=> '顯示最後編輯訊息',
	'DISPLAY_LAST_EDITED_EXPLAIN'	=> '選擇是否在文章上顯示最後被誰修改的訊息',
	'EDIT_TIME'						=> '編輯時限',
	'EDIT_TIME_EXPLAIN'				=> '新文章在多長時間內可編輯. 設置為0則不作限制.',
	'FLOOD_INTERVAL'				=> '灌水時間間隔',
	'FLOOD_INTERVAL_EXPLAIN'		=> '新文章發表之間的秒數. 要讓會員不受此限制, 請修改其權限.',
	'HOT_THRESHOLD'					=> '熱門文章的文章數標準',
	'HOT_THRESHOLD_EXPLAIN'			=> '成為熱門文章需要的最小文章數, 設置為0則取消熱門文章功能.',
	'MAX_POLL_OPTIONS'				=> '投票的最大選項數',
	'MAX_POST_FONT_SIZE'			=> '文章中可以使用的最大字型',
	'MAX_POST_FONT_SIZE_EXPLAIN'	=> '設置為0則不作限制.',
	'MAX_POST_IMG_HEIGHT'			=> '文章中允許的最大圖檔高度',
	'MAX_POST_IMG_HEIGHT_EXPLAIN'	=> '作用於圖檔和flash, 設置為0則不作限制.',
	'MAX_POST_IMG_WIDTH'			=> '文章中允許的最大圖檔寬度',
	'MAX_POST_IMG_WIDTH_EXPLAIN'	=> '作用於圖檔和flash, 設置為0則不作限制.',
	'MAX_POST_URLS'					=> '文章中允許的最大連結數量',
	'MAX_POST_URLS_EXPLAIN'			=> '設置為0則不作限制.',
	'POSTING'						=> '發表文章',
	'POSTS_PER_PAGE'				=> '每頁文章數',
	'QUOTE_DEPTH_LIMIT'				=> '每篇文章中的最大引言嵌套数',
	'QUOTE_DEPTH_LIMIT_EXPLAIN'		=> '設置為0則不作限制.',
	'SMILIES_LIMIT'					=> '每篇文章中的最多表情符號數量',
	'SMILIES_LIMIT_EXPLAIN'			=> '設置為0則不作限制.',
	'TOPICS_PER_PAGE'				=> '每頁主題數',
));

// Signature Settings
$lang = array_merge($lang, array(
	'ACP_SIGNATURE_SETTINGS_EXPLAIN'	=> '這裡您可以設置會員簽名檔的所有預設值',

	'MAX_SIG_FONT_SIZE'				=> '簽名檔最大可用字型',
	'MAX_SIG_FONT_SIZE_EXPLAIN'		=> '會員簽名檔中允許的最大字型, 設置為0則無限制.',
	'MAX_SIG_IMG_HEIGHT'			=> '簽名檔最大圖檔高度',
	'MAX_SIG_IMG_HEIGHT_EXPLAIN'	=> '作用於圖檔和flash, 設置為0則無限制.',
	'MAX_SIG_IMG_WIDTH'				=> '簽名檔最大圖檔寬度',
	'MAX_SIG_IMG_WIDTH_EXPLAIN'		=> '作用於圖檔和flash, 設置為0則無限制.',
	'MAX_SIG_LENGTH'				=> '簽名檔最大長度',
	'MAX_SIG_LENGTH_EXPLAIN'		=> '會員簽名檔的最多字元數量.',
	'MAX_SIG_SMILIES'				=> '簽名檔中的最多表情符號數量',
	'MAX_SIG_SMILIES_EXPLAIN'		=> '設置為0則無限制.',
	'MAX_SIG_URLS'					=> '簽名檔中的最大連結數量',
	'MAX_SIG_URLS_EXPLAIN'			=> '設置為0則無限制.',
));

// Registration Settings
$lang = array_merge($lang, array(
	'ACP_REGISTER_SETTINGS_EXPLAIN'		=> '這裡您可以進行會員註冊和資料修改相關的設置',

	'ACC_ACTIVATION'			=> '帳號啟用',
	'ACC_ACTIVATION_EXPLAIN'	=> '這決定了會員是否可以在註冊後立刻瀏覽討論區, 還是必須進行確認. 您也可以禁止新會員註冊.',
	'ACC_ADMIN'					=> '由管理員',
	'ACC_DISABLE'				=> '禁止',
	'ACC_NONE'					=> '無',
	'ACC_USER'					=> '由會員',
//	'ACC_USER_ADMIN'			=> '會員 + 管理員',
	'ALLOW_EMAIL_REUSE'			=> '允許重復使用Email位址',
	'ALLOW_EMAIL_REUSE_EXPLAIN'	=> '不同的會員可以使用相同的Email註冊.',
	'COPPA'						=> 'COPPA',
	'COPPA_FAX'					=> 'COPPA傳真號',
	'COPPA_MAIL'				=> 'COPPA郵件位址',
	'COPPA_MAIL_EXPLAIN'		=> '這是父母用於發送COPPA註冊表單的郵件位址',
	'ENABLE_COPPA'				=> '啟用COPPA',
	'ENABLE_COPPA_EXPLAIN'		=> '這需要會員說明自己是否大於13周歲以遵守美國COPPA法規. 如果禁止, COPPA會員群組將不再顯示.',
	'MAX_CHARS'					=> '最大',
	'MIN_CHARS'					=> '最小',
	'NO_AUTH_PLUGIN'			=> '沒有發現合適的認證外掛.',
	'PASSWORD_LENGTH'			=> '密碼長度',
	'PASSWORD_LENGTH_EXPLAIN'	=> '密碼的最大和最小長度.',
	'REG_LIMIT'					=> '註冊嘗試次數',
	'REG_LIMIT_EXPLAIN'			=> '會員在鎖定會話前的嘗試確認次數.',
	'USERNAME_ALPHA_ONLY'		=> '只允許英文字母',
	'USERNAME_ALPHA_SPACERS'	=> '英文字母和空格',
	'USERNAME_ASCII'			=> 'ASCII (沒有國際化unicode)',
	'USERNAME_LETTER_NUM'		=> '任何字母和數字',
	'USERNAME_LETTER_NUM_SPACERS'	=> '任何字母, 數字和空格',
	'USERNAME_CHARS'			=> '限制會員名稱字元',
	'USERNAME_CHARS_ANY'		=> '任何字元',
	'USERNAME_CHARS_EXPLAIN'	=> '限制用於會員名稱的字元類型, 包括; 空格, -, +, _, [ 和 ]',
	'USERNAME_LENGTH'			=> '會員名稱長度',
	'USERNAME_LENGTH_EXPLAIN'	=> '會員名稱字元的最大和最小長度.',
));

// Visual Confirmation Settings
$lang = array_merge($lang, array(
	'ACP_VC_SETTINGS_EXPLAIN'		=> '這裡您可以對討論區的驗證機制進行設置.',

	'CAPTCHA_GD'					=> 'GD驗證圖檔',
	'CAPTCHA_GD_FOREGROUND_NOISE'			=> 'GD 驗證圖檔背景干擾',
	'CAPTCHA_GD_EXPLAIN'					=> '使用 GD 產生更進階的驗證圖檔.',
	'CAPTCHA_GD_FOREGROUND_NOISE_EXPLAIN'	=> '使用由GD產生的前景干擾.',
	'CAPTCHA_GD_X_GRID'						=> 'GD 驗證圖檔X軸背景干擾',
	'CAPTCHA_GD_X_GRID_EXPLAIN'				=> '使用由GD產生較低設定的驗證圖檔. 0 將停用X軸的背景干擾.',
	'CAPTCHA_GD_Y_GRID'						=> 'GD 驗證圖檔Y軸背景干擾',
	'CAPTCHA_GD_Y_GRID_EXPLAIN'				=> '使用由GD產生較低設定的驗證圖檔. 0 將停用Y軸的背景干擾.',
	'CAPTCHA_GD_WAVE'                  => 'GD 驗證圖檔使用畸變波',
	'CAPTCHA_GD_WAVE_EXPLAIN'            => '在驗證圖檔上使用畸變波.',
	'CAPTCHA_GD_3D_NOISE'               => '添加3D噪點',
	'CAPTCHA_GD_3D_NOISE_EXPLAIN'         => '在驗證圖檔的字符上方添加噪點.',
	'CAPTCHA_GD_FONTS'                  => '使用不同字體',
	'CAPTCHA_GD_FONTS_EXPLAIN'            => '此設定控制字體使用的數量. 您可以使用默認的設定或導入新字體, 或添加小寫字符.',
	'CAPTCHA_FONT_DEFAULT'               => '預設',
	'CAPTCHA_FONT_NEW'                  => '新字體',
	'CAPTCHA_FONT_LOWER'               => '使用小寫',

	'CAPTCHA_PREVIEW_MSG'					=> '您更改的可視化驗證設定還未保存, 這只是一個預覽.',
	'CAPTCHA_PREVIEW_EXPLAIN'				=> '使用目前設定的驗證圖檔將如現在所示. 使用預覽按鈕重新整理. 注意驗證圖檔是隨機產生的, 每次出現都可能不一樣.',
	'VISUAL_CONFIRM_POST'					=> '啟用訪客發表文章驗證',
	'VISUAL_CONFIRM_POST_EXPLAIN'			=> '當匿名會員發表文章時需要輸入一個隨機產生的驗證碼.',
	'VISUAL_CONFIRM_REG'					=> '啟用註冊圖檔驗證',
	'VISUAL_CONFIRM_REG_EXPLAIN'			=> '當會員註冊時需要輸入一個隨機產生的驗證碼.',
	'VISUAL_CONFIRM_REFRESH'            => '允許會員刷新驗證碼',
	'VISUAL_CONFIRM_REFRESH_EXPLAIN'      => '在注冊的過程中如果無法辨認當前顯示的確認碼, 允許會員更換新的驗證碼.',
));

// Cookie Settings
$lang = array_merge($lang, array(
	'ACP_COOKIE_SETTINGS_EXPLAIN'		=> '以下設定了送往會員瀏覽器的資料. 在大多數情況下使用預設設置就已足夠. 如果您自行調整, 不正確的設置將會使會員無法登入討論區.',

	'COOKIE_DOMAIN'				=> 'Cookie網域',
	'COOKIE_NAME'				=> 'Cookie名稱',
	'COOKIE_PATH'				=> 'Cookie路徑',
	'COOKIE_SECURE'				=> 'Cookie安全',
	'COOKIE_SECURE_EXPLAIN'		=> '如果您的伺服器使用SSL協議, 則啟用這個選項, 否則請停用. 如果沒有使用SSL而啟用這個選項, 將會使討論區轉向錯誤.',
	'ONLINE_LENGTH'				=> '檢視上線時間間距',
	'ONLINE_LENGTH_EXPLAIN'		=> '已離線的會員在多少分鍾後不再顯示於線上會員列表. 值越高將需要越多的時間產生列表.',
	'SESSION_LENGTH'			=> '會話長度',
	'SESSION_LENGTH_EXPLAIN'	=> '會話多少秒後超時.',
));

// Load Settings
$lang = array_merge($lang, array(
	'ACP_LOAD_SETTINGS_EXPLAIN'	=> '這裡您可以啟用或停用部分討論區功能以減輕伺服器負載. 對於大多數伺服器並不需要停用任何功能. 不過有些系統和合租環境下停用某些不需要的功能能提高性能. 您也可以指定系統的負載限制, 超出限制的瀏覽將被拒絕.',

	'CUSTOM_PROFILE_FIELDS'			=> '自行定義會員資料',
	'LIMIT_LOAD'					=> '系統負載限制',
	'LIMIT_LOAD_EXPLAIN'			=> '如果系統一分鍾內的平均負載超過這個值討論區將自動關閉. 值1.0 等於單顆處理器的100%使用率. 這只工作於基於UNIX/Linux的系統.',
	'LIMIT_SESSIONS'				=> '會話數限制',
	'LIMIT_SESSIONS_EXPLAIN'		=> '如果一分鍾內的會話數超過這個值討論區將自動關閉. 設置為0將不作限制.',
	'LOAD_CPF_MEMBERLIST'			=> '允許界面在會員列表中顯示自行定義資料',
	'LOAD_CPF_VIEWPROFILE'			=> '在會員資料中顯示自行定義資料',
	'LOAD_CPF_VIEWTOPIC'			=> '在文章檢視中顯示自行定義會員資料',
	'LOAD_USER_ACTIVITY'			=> '顯示會員活躍統計',
	'LOAD_USER_ACTIVITY_EXPLAIN'	=> '在會員資料和會員控制面板中顯示活躍版面和主題. 在文章數超過百萬的討論區上建議關閉此功能.',
	'RECOMPILE_STYLES'				=> '重新編譯舊的風格組件',
	'RECOMPILE_STYLES_EXPLAIN'		=> '檢查檔案系統中更新風格組件並重新編譯.',
	'YES_ANON_READ_MARKING'			=> '允許訪客標示主題',
	'YES_ANON_READ_MARKING_EXPLAIN'	=> '為訪客儲存已讀/未讀狀態. 如果停用, 對於訪客所有文章將顯示為已讀.',
	'YES_BIRTHDAYS'					=> '啟用生日列表',
	'YES_BIRTHDAYS_EXPLAIN'			=> '如果禁用，討論區將不會顯示生日列表。要使這個選項生效，「生日」功能也必須被啟用。',
	'YES_JUMPBOX'					=> '顯示跳頁',
	'YES_MODERATORS'				=> '顯示討論區版主',
	'YES_ONLINE'					=> '顯示線上會員',
	'YES_ONLINE_EXPLAIN'			=> '在首頁, 版面和文章中顯示線上會員訊息.',
	'YES_ONLINE_GUESTS'				=> '檢視線上會員時顯示訪客線上訊息',
	'YES_ONLINE_GUESTS_EXPLAIN'		=> '在檢視線上會員時, 顯示訪客線上訊息.',
	'YES_ONLINE_TRACK'				=> '顯示會員上線/離線訊息',
	'YES_ONLINE_TRACK_EXPLAIN'		=> '在會員資料和檢視文章頁面中顯示會員線上訊息.',
	'YES_POST_MARKING'				=> '顯示帶點主題',
	'YES_POST_MARKING_EXPLAIN'		=> '帶點的主題表示會員參與過這個主題.',
	'YES_READ_MARKING'				=> '允許伺服器端標示',
	'YES_READ_MARKING_EXPLAIN'		=> '在資料庫中保存已讀/未讀訊息而不是存在cookie上.',
));

// Auth settings
$lang = array_merge($lang, array(
	'ACP_AUTH_SETTINGS_EXPLAIN'	=> 'phpBB 支援認證外掛和模組. 這允許您決定如何驗證會員是否登入. 預設的三個外掛是DB, LDAP和Apache. 並不是所有方式都需要額外訊息, 所以您只需要填寫選中的方式需要的訊息即可.',

	'AUTH_METHOD'				=> '選擇認證方式',

	'APACHE_SETUP_BEFORE_USE'	=> '您必須在轉換到這種認證模式前建立apache認證功能. 記住您用於apache認證的會員名稱必須和phpBB的會員名稱相同.',

	'LDAP_DN'						=> 'LDAP基礎<var>dn</var>',
	'LDAP_DN_EXPLAIN'				=> '這是唯一的名字, 用於定位會員訊息, 例如 <samp>o=My Company,c=US</samp>',
	'LDAP_EMAIL'					=> 'LDAP Email屬性',
	'LDAP_EMAIL_EXPLAIN'			=> '將這個設置為會員的Email屬性名稱(如果存在的話), 以便於為新會員自動設置Email位址, 留空的話將使第一次登入的會員Email位址為空.',
	'LDAP_INCORRECT_USER_PASSWORD'	=> '使用指定的會員名稱密碼綁定LDAP伺服器失敗.',
	'LDAP_NO_EMAIL'					=> '指定的Email屬性不存在.',
	'LDAP_NO_IDENTITY'				=> '無法為 %s 找到登入身份',
	'LDAP_PASSWORD'					=> 'LDAP 密碼',
	'LDAP_PASSWORD_EXPLAIN'			=> '留空以便於匿名瀏覽. 否則為以上會員填入密碼. <strong>警告:</strong> 這個密碼將用明文儲存在資料庫中, 對於可瀏覽資料庫的會員都是可見的.',
	'LDAP_PORT'						=> 'LDAP 伺服器埠號',
	'LDAP_PORT_EXPLAIN'				=> '選填. 您可以指定用於連接LDAP伺服器的埠號, 預設埠號為389.',
	'LDAP_SERVER'					=> 'LDAP 伺服器名稱',
	'LDAP_SERVER_EXPLAIN'			=> '如果使用LDAP, 這是伺服器的主機名或IP位址.',
	'LDAP_UID'						=> 'LDAP <var>uid</var>',
	'LDAP_UID_EXPLAIN'				=> '這是用於尋找給定登入身份的關鍵字, 例如 <var>uid</var>, <var>sn</var>, 等等.',
	'LDAP_USER'						=> 'LDAP 會員',
	'LDAP_USER_EXPLAIN'				=> '留空以便於匿名瀏覽. 如果填入, phpBB將以這個會員連接到LDAP伺服器.',
	'LDAP_USER_FILTER'				=> 'LDAP 用戶過濾',
	'LDAP_USER_FILTER_EXPLAIN'		=> '選填. 您可以使用附加條件過濾搜尋的對象. 例如<samp>objectClass=posixGroup</samp> 將變成 <samp>(&(uid=$username)(objectClass=posixGroup))</samp>',
));

// Server Settings
$lang = array_merge($lang, array(
	'ACP_SERVER_SETTINGS_EXPLAIN'	=> '這裡配置伺服器和網域名稱相關的設定. 請確保輸入的資料是正確可靠的, 錯誤將導致email包含錯誤訊息. 當輸入網域名稱時記住不包含http:// 和其他協議頭. 只有當您的伺服器使用一個特別的連接埠時才需要更改連接埠號, 一般都是使用80.',

	'ENABLE_GZIP'				=> '啟用GZip壓縮', 
	'ENABLE_GZIP_EXPLAIN'		=> '產生的頁面將在發送到瀏覽器前被壓縮. 這將減少網路流量但是會增加伺服器和客戶端的CPU負載.',
	'FORCE_SERVER_VARS'			=> '強制設定伺服器URL',
	'FORCE_SERVER_VARS_EXPLAIN'	=> '如果設置為是, 以下的設定將啟用',
	'ICONS_PATH'				=> '主題圖示儲存路徑',
	'ICONS_PATH_EXPLAIN'		=> '相對於phpBB根目錄的路徑, 例如<samp>images/icons</samp>',
	'PATH_SETTINGS'				=> '路徑設定',
	'RANKS_PATH'				=> '等級圖示儲存路徑',
	'RANKS_PATH_EXPLAIN'		=> '相對於phpBB根目錄的路徑, 例如<samp>images/ranks</samp>',
	'SCRIPT_PATH'				=> 'phpBB程式路徑',
	'SCRIPT_PATH_EXPLAIN'		=> 'phpBB相對於網域名稱的路徑, 例如<samp>/phpBB3</samp>',
	'SERVER_NAME'				=> '網域名稱',
	'SERVER_NAME_EXPLAIN'		=> '討論區所在網域名稱 (例如: <samp>www.foo.bar</samp>)',
	'SERVER_PORT'				=> '伺服器連接埠',
	'SERVER_PORT_EXPLAIN'		=> '伺服器運行的連接埠, 通常是 80, 如果不清楚請不要更改',
	'SERVER_PROTOCOL'			=> '服務協議',
	'SERVER_PROTOCOL_EXPLAIN'	=> '如果強制設定, 這將用於伺服器協議. 如果留空或未強制設定, 協議由cookie安全設定決定 (<samp>http://</samp> or <samp>https://</samp>)',
	'SERVER_URL_SETTINGS'		=> '伺服器URL設定',
	'SMILIES_PATH'				=> '表情符號儲存路徑',
	'SMILIES_PATH_EXPLAIN'		=> '相對於phpBB根目錄的路徑, 例如 <samp>images/smilies</samp>',
	'UPLOAD_ICONS_PATH'			=> '副檔名群組圖示儲存路徑',
	'UPLOAD_ICONS_PATH_EXPLAIN'	=> '相對於phpBB根目錄的路徑, 例如 <samp>images/upload_icons</samp>',
));

// Security Settings
$lang = array_merge($lang, array(
	'ACP_SECURITY_SETTINGS_EXPLAIN'		=> '這裡您可以進行對話和登入相關的設定',

	'ALL'							=> '所有',
	'ALLOW_AUTOLOGIN'				=> '允許自動登入', 
	'ALLOW_AUTOLOGIN_EXPLAIN'		=> '決定會員是否可以在瀏覽討論區時自動登入.', 
	'AUTOLOGIN_LENGTH'				=> '自動登入失效時間 (天數)', 
	'AUTOLOGIN_LENGTH_EXPLAIN'		=> '設置為0將取消限制.', 
	'BROWSER_VALID'					=> '瀏覽器驗證',
	'BROWSER_VALID_EXPLAIN'			=> '啟用瀏覽器驗證以增加安全性.',
	'CHECK_DNSBL'					=> '檢查 IP 以防禦 DNS 黑洞',
	'CHECK_DNSBL_EXPLAIN'			=> '如果啟用, 會員的IP位址將被檢查以防禦如下在註冊和發表文章時的 DNSBL 服務: <a href="http://spamcop.net">spamcop.net</a> 和 <a href="http://spamhaus.org">spamhaus.org</a>. 這個檢查將耗費一些時間, 取決於伺服器的設置. 如果讓討論區變得很慢或產生很多錯誤報告, 請停用這個功能.',
	'CLASS_B'						=> 'A.B',
	'CLASS_C'						=> 'A.B.C',
	'EMAIL_CHECK_MX'				=> '檢查Email網域名稱以得到有效 MX 記錄',
	'EMAIL_CHECK_MX_EXPLAIN'		=> '如果啟用, 在註冊時提供的Email的網域名稱將被檢查是否有有效的MX記錄.',
	'FORCE_PASS_CHANGE'				=> '強制密碼變更',
	'FORCE_PASS_CHANGE_EXPLAIN'		=> '強制會員在一段時間(天數)後更改密碼. 設置為0則取消限制.',
	'FORM_TIME_MAX'					=> '提交表單的最長時間',
	'FORM_TIME_MAX_EXPLAIN'			=> '在這個時間前會員必須提交. 使用 -1 取消這項功能. 注意如果設置的時間過長, 當對話失效時表單也會自動失效, 這種情況下這裡的設置是無效的.',
	'FORM_SID_GUESTS'				=> '訪客表單提交限制',
	'FORM_SID_GUESTS_EXPLAIN'		=> '啟用後, 訪客所有的表單將會是對話唯一的, 這個功能在某些ISP中可能無法正常使用.',
	'FORWARDED_FOR_VALID'			=> '經過驗證的 <var>X_FORWARDED_FOR</var> 欄位頭',
	'FORWARDED_FOR_VALID_EXPLAIN'	=> '只有在發送的<var>X_FORWARDED_FOR</var> 欄位頭等於前一次請求中的欄位頭才繼續會話. 封鎖也將檢查 <var>X_FORWARDED_FOR</var> 中的IP.',
	'IP_VALID'						=> '對話IP驗證',
	'IP_VALID_EXPLAIN'				=> '決定會員的IP如何用於會話驗證; <samp>所有</samp> 表示完整位址, <samp>A.B.C</samp> 表示開頭的 x.x.x, <samp>A.B</samp> 表示開頭的 x.x, <samp>None</samp> 取消驗證.',
	'MAX_LOGIN_ATTEMPTS'			=> '最大登入嘗試次數',
	'MAX_LOGIN_ATTEMPTS_EXPLAIN'	=> '在超過嘗試次數後會員必須進行可視化登入驗證',
	'NO_IP_VALIDATION'				=> '無',
	'NO_REF_VALIDATION'				=> '無',
	'PASSWORD_TYPE'					=> '密碼複雜度',
	'PASSWORD_TYPE_EXPLAIN'			=> '決定設定或更改時密碼的複雜度, 多個選項則往前疊加.',
	'PASS_TYPE_ALPHA'				=> '必須包含數字字母',
	'PASS_TYPE_ANY'					=> '沒有要求',
	'PASS_TYPE_CASE'				=> '必須混用大寫字元',
	'PASS_TYPE_SYMBOL'				=> '必須包含符號',
	'REF_HOST'						=> '只驗證主機',
	'REF_PATH'						=> '同時驗證路徑',
	'REFERER_VALID'					=> '驗證轉向來源',
	'REFERER_VALID_EXPLAIN'			=> '啟用此設定後, POST請求的轉向來源會根據主機/腳本的路徑進行驗證. 此功能會對同時使用多個域名和外部登入窗口的論壇造成影響.',
	'TPL_ALLOW_PHP'					=> '在樣板中允許PHP',
	'TPL_ALLOW_PHP_EXPLAIN'			=> '如果啟用這個選項, <code>PHP</code> 和 <code>INCLUDEPHP</code> 聲明將在樣板中被解析.',
));

// Email Settings
$lang = array_merge($lang, array(
	'ACP_EMAIL_SETTINGS_EXPLAIN'	=> '這項設置使用於討論區向會員發送Email. 請確保Email位址是正確的, 任何被退回和無法投遞的訊息都將被發送至這個位址. 如果您的主機不提供本地(基於PHP的) Email服務, 您可以使用SMTP發送訊息. 這需要伺服器的位址 (必要的話詢問提供者). 如果伺服器需要驗證 (並且只有在需要時) 輸入必要的會員名稱和密碼. 請注意只提供基本的驗證, 暫時不提供其他的驗證支援.',

	'ADMIN_EMAIL'					=> '返回Email位址',
	'ADMIN_EMAIL_EXPLAIN'			=> '這將是所有Email的返回位址, 技術聯絡Email. 將顯示於<samp>Return-Path</samp> 和 <samp>Sender</samp>.',
	'BOARD_EMAIL_FORM'				=> '會員通過討論區發送Email',
	'BOARD_EMAIL_FORM_EXPLAIN'		=> '可以使用討論區發送Email而不顯示會員的Email位址.',
	'BOARD_HIDE_EMAILS'				=> '隱藏Email位址',
	'BOARD_HIDE_EMAILS_EXPLAIN'		=> '這個功能使Email位址完全隱蔽.',
	'CONTACT_EMAIL'					=> 'Email聯絡位址',
	'CONTACT_EMAIL_EXPLAIN'			=> '這將使用在任何需要指定聯絡方式的場合, 例如 垃圾訊息, 錯誤輸出, 等等. 這將總是顯示在 <samp>From</samp> 和 <samp>Reply-To</samp>.',
	'EMAIL_FUNCTION_NAME'			=> 'Email函數名稱',
	'EMAIL_FUNCTION_NAME_EXPLAIN'	=> '在PHP中用於發送Email的函數.',
	'EMAIL_PACKAGE_SIZE'			=> 'Email資料包大小',
	'EMAIL_PACKAGE_SIZE_EXPLAIN'	=> '這是在一個資料包中包含的Email數量.',
	'EMAIL_SIG'						=> 'Email簽名',
	'EMAIL_SIG_EXPLAIN'				=> '將在討論區發送的Email後附加這段文字.',
	'ENABLE_EMAIL'					=> '允許討論區發送Email',
	'ENABLE_EMAIL_EXPLAIN'			=> '如果停用, 討論區將不會發送任何Email.',
	'SMTP_AUTH_METHOD'				=> 'SMTP驗證方式',
	'SMTP_AUTH_METHOD_EXPLAIN'		=> '只有在設置過會員名稱/密碼的場合, 詢問提供者如果您不能確定使用何種方式.',
	'SMTP_CRAM_MD5'					=> 'CRAM-MD5',
	'SMTP_DIGEST_MD5'				=> 'DIGEST-MD5',
	'SMTP_LOGIN'					=> 'LOGIN',
	'SMTP_PASSWORD'					=> 'SMTP 密碼',
	'SMTP_PASSWORD_EXPLAIN'			=> '只有當您的SMTP伺服器需要時才要輸入.',
	'SMTP_PLAIN'					=> 'PLAIN',
	'SMTP_POP_BEFORE_SMTP'			=> 'POP-BEFORE-SMTP',
	'SMTP_PORT'						=> 'SMTP伺服器連接埠',
	'SMTP_PORT_EXPLAIN'				=> '只有當您清楚您的SMTP伺服器運行在一個不同的連接埠上時才需要設置.',
	'SMTP_SERVER'					=> 'SMTP伺服器位址',
	'SMTP_SETTINGS'					=> 'SMTP設定',
	'SMTP_USERNAME'					=> 'SMTP會員名稱',
	'SMTP_USERNAME_EXPLAIN'			=> '只有當您的SMTP伺服器需要時才要輸入.',
	'USE_SMTP'						=> '使用SMTP伺服器發送Email',
	'USE_SMTP_EXPLAIN'				=> '選擇“是”, 如果您向通過其他伺服器而不是本地mail函數發送Email.',
));

// Jabber settings
$lang = array_merge($lang, array(
	'ACP_JABBER_SETTINGS_EXPLAIN'	=> '這裡您可以啟用並控制會員使用Jabber發送及時消息和討論區通知. Jabber是任何人都可以使用的開放原始碼協議. 一些Jabber伺服器提供允許您聯絡其他網路會員的通道. 並非所有的伺服器都提供這樣的通道, 協議上的變化將使得操作失效. 請確認輸入的是已經註冊的帳號訊息, phpBB將會使用你這裡輸入的資料.',

	'JAB_ENABLE'				=> '啟用Jabber',
	'JAB_ENABLE_EXPLAIN'		=> '允許使用jabber消息和通知',
	'JAB_GTALK_NOTE'			=> '請注意GTalk無法運作因為無法找到 <samp>dns_get_record</samp> 函數. 這個函數在PHP4中是無效的, 並且在windows平台上沒有此模塊. 目前此功能還無法工作在BSD系統和Mac操作系統上.',
	'JAB_PACKAGE_SIZE'			=> 'Jabber資料包大小',
	'JAB_PACKAGE_SIZE_EXPLAIN'	=> '這是單個資料包中發送的消息數量. 設置為0將不作延遲而直接發送.',
	'JAB_PASSWORD'				=> 'Jabber密碼',
	'JAB_PORT'					=> 'Jabber連接埠',
	'JAB_PORT_EXPLAIN'			=> '留空, 除非您清楚這個連接埠不是5222',
	'JAB_SERVER'				=> 'Jabber伺服器',
	'JAB_SERVER_EXPLAIN'		=> '檢視%sjabber.org%s上的伺服器列表',
	'JAB_SETTINGS_CHANGED'		=> 'Jabber設定修改完成.',
	'JAB_USE_SSL'				=> '使用SSL連接',
	'JAB_USE_SSL_EXPLAIN'		=> '如果啟用安全連接, Jabber連接埠將更改為5223, 如果5222沒有被指定.',
	'JAB_USERNAME'				=> 'Jabber會員名稱或JID',
	'JAB_USERNAME_EXPLAIN'		=> '請指定一個已經註冊的會員, 不要指望phpbb驗證此會員是否有效. 如果您僅僅指定一個會員名, 那么您的JID將是您指定的會員名和伺服器名, 否則您需要指定一個有效的JID, 例如user@jabber.org.',
));

?>