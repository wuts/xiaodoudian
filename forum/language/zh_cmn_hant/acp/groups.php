<?php
/**
*
* acp_groups [Chinese Traditional]
*
* @package language
* @version $Id: groups.php 8634 2008-06-09 13:05:34Z Kellanved $
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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> '在這個面板您可以管理所有的群組, 您可以刪除、建立和編輯現有的群組. 您可以選擇版主, 設定群組狀態開/閉和設置群組名稱與描述.',
	'ADD_USERS'						=> '添加會員',
	'ADD_USERS_EXPLAIN'				=> '這裡您可以添加新會員到群組. 您可以選擇是否使用這個群組作為會員的預設群組. 並且您可以設置群組組長. 如果有多個會員請在每一行輸入一個會員名稱.',

	'COPY_PERMISSIONS'				=> '複製權限自',
	'COPY_PERMISSIONS_EXPLAIN'		=> '一旦建立, 群組將擁有與您選擇的群組同樣的權限.',
	'CREATE_GROUP'					=> '建立新群組',

	'GROUPS_NO_MEMBERS'				=> '這個群組沒有成員',
	'GROUPS_NO_MODS'				=> '沒有設置群組組長',
	
	'GROUP_APPROVE'					=> '批准成員',
	'GROUP_APPROVED'				=> '已批准的成員',
	'GROUP_AVATAR'					=> '群組頭像',
	'GROUP_AVATAR_EXPLAIN'			=> '這個圖片將顯示在群組的控制面板.',
	'GROUP_CLOSED'					=> '關閉',
	'GROUP_COLOR'					=> '群組顏色',
	'GROUP_COLOR_EXPLAIN'			=> '設置群組成員名字顯示的顏色, 如果使用會員預設請留空.',
	'GROUP_CONFIRM_ADD_USER'		=> '您確認添加會員 %1$s 為群組成員嗎?',
	'GROUP_CONFIRM_ADD_USERS'		=> '您確認添加會員 %1$s 為群組成員嗎?',
	'GROUP_CREATED'					=> '群組建立完成.',
	'GROUP_DEFAULT'					=> '設置為成員的預設群組',
	'GROUP_DEFS_UPDATED'			=> '設置為選取成員的預設群組.',
	'GROUP_DELETE'					=> '從群組中刪除成員',
	'GROUP_DELETED'					=> '群組已經刪除並且會員預設群組設置完成.',
	'GROUP_DEMOTE'					=> '群組組長降級',
	'GROUP_DESC'					=> '群組描述',
	'GROUP_DETAILS'					=> '群組細節',
	'GROUP_EDIT_EXPLAIN'			=> '這裡您可以編輯存在的群組. 更改群組名稱, 描述和類型 (開放, 關閉等). 您還可以設置一些群組範圍的選項例如顏色, 等級. 更改將覆蓋會員的當前設置. 請注意群組成員可以更改他們的頭像, 除非您設置了相關的權限.',
	'GROUP_ERR_USERS_EXIST'			=> '指定的會員已經是這個群組的成員',
	'GROUP_FOUNDER_MANAGE'			=> '僅由創始人管理',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> '使用管理員控制面板的群組管理權嚴格限制為創始人專有.',
	'GROUP_HIDDEN'					=> '隱藏',
	'GROUP_LANG'					=> '群組語系',
	'GROUP_LEAD'					=> '群組組長',
	'GROUP_LEADERS_ADDED'			=> '群組組長添加成功.',
	'GROUP_LEGEND'					=> '在團隊中顯示',
	'GROUP_LIST'					=> '當前成員',
	'GROUP_LIST_EXPLAIN'			=> '群組的成員完整列表. 您可以刪除成員 (除了一些特殊群組) 或添加合適的新成員.',
	'GROUP_MEMBERS'					=> '群組成員',
	'GROUP_MEMBERS_EXPLAIN'			=> '群組的所有成員完整列表. 包含了群組組長, 等待批准的成員和正式成員. 您可以管理這個群組中的成員. 如果需要刪除群組組長身份但是保留在群組中, 請使用群組組長降級而不是刪除, 同樣的可以選擇一個成員提升為群組組長.',
	'GROUP_MESSAGE_LIMIT'			=> '群組私人訊息數量限制',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> '這個設置會覆蓋會員的訊息限制. 如果設成0將使用會員的預設設置.',
	'GROUP_MODS_ADDED'				=> '新群組組長添加完成.',
	'GROUP_MODS_DEMOTED'			=> '群組組長降級完成.',
	'GROUP_MODS_PROMOTED'			=> '群組成員提升完成.',
	'GROUP_NAME'					=> '群組名稱',
	'GROUP_NAME_TAKEN'				=> '您輸入的群組名稱已經被使用, 請使用其他的群組名稱.',
	'GROUP_OPEN'					=> '打開',
	'GROUP_PENDING'					=> '待批准的成員',
	'GROUP_MAX_RECIPIENTS'         => '私人訊息收件人數量限制',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'   => '單封私人訊息允許的最大收件人數量. 設為0則使用全局設定.',
	'GROUP_PROMOTE'					=> '升級為群組組長',
	'GROUP_RANK'					=> '群組級別',
	'GROUP_RECEIVE_PM'				=> '群組可以接收私人訊息',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> '請注意隱藏的群組不可以接收私人訊息, 這裡的設置不起作用.',
	'GROUP_REQUEST'					=> '請求',
	'GROUP_SETTINGS_SAVE'			=> '群組範圍設置',
	'GROUP_TYPE'					=> '群組類型',
	'GROUP_TYPE_EXPLAIN'			=> '這決定了哪些會員可以加入或查看這個群組.',
	'GROUP_UPDATED'					=> '群組參數更新完成.',
	
	'GROUP_USERS_ADDED'				=> '新成員添加完成.',
	'GROUP_USERS_EXIST'				=> '選取的會員已經是成員了.',
	'GROUP_USERS_REMOVE'			=> '會員已經刪除, 新的預設群組設置完成.',

	'MAKE_DEFAULT_FOR_ALL'	=> '為所有成員設置預設群組',
	'MEMBERS'				=> '成員',

	'NO_GROUP'					=> '沒有指定群組.',
	'NO_GROUPS_CREATED'			=> '還沒有建立群組.',
	'NO_PERMISSIONS'			=> '不要複製權限',
	'NO_USERS'					=> '您沒有輸入任何會員.',
	'NO_USERS_ADDED'			=> '這個會員群組還沒有成員.',
	'NO_VALID_USERS'			=> '您尚未輸入任何滿足此操作條件的會員.',

	'SPECIAL_GROUPS'			=> '預設的群組',
	'SPECIAL_GROUPS_EXPLAIN'	=> '預設的群組是特殊群組, 它們不能刪除和直接更改. 但是可以增刪會員和更改基本設置. 點擊 “預設” 您可以設置它為其成員的預設群組.',

	'TOTAL_MEMBERS'				=> '成員',

	'USERS_APPROVED'				=> '會員已經批准.',
	'USER_DEFAULT'					=> '會員預設',
	'USER_DEF_GROUPS'				=> '會員設定的群組',
	'USER_DEF_GROUPS_EXPLAIN'		=> '這些群組由您或者其他管理員建立. 您可以管理成員和編輯其屬性或者刪除它. 點擊 “預設” 可以設置這個群組為其成員的預設群組.',
	'USER_GROUP_DEFAULT'			=> '設置為預設群組',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> '選擇是, 將設置為添加的會員的預設群組',
	'USER_GROUP_LEADER'				=> '設置為群組組長',
));

?>