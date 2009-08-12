<?php
/**
*
* acp_ban [Chinese Traditional]
*
* @package language
* @version $Id: ban.php 8479 2008-03-29 00:22:48Z naderman $
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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1小時',
	'30_MINS'		=> '30分鐘',
	'6_HOURS'		=> '6小時',

	'ACP_BAN_EXPLAIN'	=> '在這裡您可以進行對會員名稱、IP位址或信箱位址的封鎖操作。這些操作可以阻止特定會員訪問整個討論區。如果願意，您可以給出一個簡短（至多255字節）的封鎖理由，它將顯示在管理記錄中。您也可以控制封鎖期限，如果您希望設定一個封鎖解除日期，請將封鎖期限設定為 <u>直到</u> ，並在下面以 yyyy-mm-dd（年-月-日）的格式填入日期。',

	'BAN_EXCLUDE'			=> '排除於封鎖列表',
	'BAN_LENGTH'			=> '封鎖期限',
	'BAN_REASON'			=> '封鎖原因',
	'BAN_GIVE_REASON'		=> '顯示給被封者的封鎖原因',
	'BAN_UPDATE_SUCCESSFUL'	=> '封鎖列表更新成功',

	'EMAIL_BAN'					=> '封鎖信箱位址',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> '被排除的Email位址將不受任何封鎖影響。',
	'EMAIL_BAN_EXPLAIN'			=> '要指定多個Email位址時，每行只能輸入一個。可以使用 * 作為萬用字元，例如：<samp>*@hotmail.com</samp>，<samp>*@*.domain.tld</samp>，等。',
	'EMAIL_NO_BANNED'			=> '沒有被封鎖的信箱位址',
	'EMAIL_UNBAN'				=> '解除封鎖或解除排除Email位址',
	'EMAIL_UNBAN_EXPLAIN'		=> '您可以選擇多個Email位址並對其執行解除封鎖或解除排除的操作。被指定為排除的Email位址有特別背景標記。',

	'IP_BAN'					=> '封鎖IP位址',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> '被排除的IP位址將不受任何封鎖影響。',
	'IP_BAN_EXPLAIN'			=> '要指定多個IP位址或主機，每行只能輸入一個。要指定IP段，在兩個IP位址間使用連字元（-）連接。萬用字元是 *。',
	'IP_HOSTNAME'				=> 'IP位址 或 主機',
	'IP_NO_BANNED'				=> '沒有被封鎖的IP位址',
	'IP_UNBAN'					=> '解除封鎖或解除排除IP位址',
	'IP_UNBAN_EXPLAIN'			=> '您可以選擇多個IP位址並對其執行解除封鎖或解除排除的操作。被指定為排除的IP位址有特別背景標記。',

	'LENGTH_BAN_INVALID'		=> '日期格式必須為 <kbd>YYYY-MM-DD</kbd>.',

	'PERMANENT'		=> '永久',
	
	'UNTIL'						=> '直到',
	'USER_BAN'					=> '封鎖會員名稱',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> '被排除的會員名稱將不受任何封鎖影響。',
	'USER_BAN_EXPLAIN'			=> '要指定多個會員名稱，請在每行輸入一個。您可以使用【尋找會員】來尋找和添加會員名稱。',
	'USER_NO_BANNED'			=> '沒有被封鎖的會員名稱',
	'USER_UNBAN'				=> '解除封鎖或解除排除會員名稱',
	'USER_UNBAN_EXPLAIN'		=> '您可以選擇多個會員名稱並對其執行解除封鎖或解除排除的操作。被指定為排除的會員名稱有特別背景標記。',
	

));

?>