<?php
/** 
*
* @package install
* @version $Id: functions_phpbb20.php,v 1.56 2007/07/27 17:33:15 acydburn Exp $
* @copyright (c) 2006 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* Helper functions for phpBB 2.0.x to phpBB 3.0.x conversion
*/

/**
* Set forum flags - only prune old polls by default
*/
function phpbb_forum_flags()
{
	// Set forum flags
	$forum_flags = 0;

	// FORUM_FLAG_LINK_TRACK
	$forum_flags += 0;

	// FORUM_FLAG_PRUNE_POLL
	$forum_flags += FORUM_FLAG_PRUNE_POLL;

	// FORUM_FLAG_PRUNE_ANNOUNCE
	$forum_flags += 0;

	// FORUM_FLAG_PRUNE_STICKY
	$forum_flags += 0;

	// FORUM_FLAG_ACTIVE_TOPICS
	$forum_flags += 0;

	// FORUM_FLAG_POST_REVIEW
	$forum_flags += FORUM_FLAG_POST_REVIEW;

	return $forum_flags;
}

/**
* Insert/Convert forums
*/
function phpbb_insert_forums()
{
	global $db, $src_db, $same_db, $convert, $user, $config;

	$db->sql_query($convert->truncate_statement . FORUMS_TABLE);

	// Determine the highest id used within the old forums table (we add the categories after the forum ids)
	$sql = 'SELECT MAX(fid) AS max_forum_id
		FROM ' . $convert->src_table_prefix . 'forums';
	$result = $src_db->sql_query($sql);
	$max_forum_id = (int) $src_db->sql_fetchfield('max_forum_id');
	$src_db->sql_freeresult($result);

	$max_forum_id++;

	// pruning disabled globally?
	$prune_enabled = 0;

	// Insert categories
	$sql = 'SELECT fid as cat_id, name as cat_title
		FROM '. $convert->src_table_prefix . 'forums WHERE fup=0 ORDER BY cat_id';

	if ($convert->mysql_convert && $same_db)
	{
		$src_db->sql_query("SET NAMES 'binary'");
	}

	$result = $src_db->sql_query($sql);

	if ($convert->mysql_convert && $same_db)
	{
		$src_db->sql_query("SET NAMES 'utf8'");
	}

	switch ($db->sql_layer)
	{
		case 'mssql':
		case 'mssql_odbc':
			$db->sql_query('SET IDENTITY_INSERT ' . FORUMS_TABLE . ' ON');
		break;
	}

	$cats_added = array();
	while ($row = $src_db->sql_fetchrow($result))
	{
		$sql_ary = array(
			'forum_id'		=> (int) $row['cat_id'],
			'forum_name'	=> ($row['cat_title']) ? htmlspecialchars(phpbb_set_default_encoding($row['cat_title']), ENT_COMPAT, 'UTF-8') : $user->lang['CATEGORY'],
			'parent_id'		=> 0,
			'forum_parents'	=> '',
			'forum_desc'	=> '',
			'forum_type'	=> FORUM_CAT,
			'forum_status'	=> ITEM_UNLOCKED,
			'forum_rules'	=> '',
		);

		$sql = 'SELECT MAX(right_id) AS right_id
			FROM ' . FORUMS_TABLE;
		$_result = $db->sql_query($sql);
		$cat_row = $db->sql_fetchrow($_result);
		$db->sql_freeresult($_result);

		$sql_ary['left_id'] = (int) ($cat_row['right_id'] + 1);
		$sql_ary['right_id'] = (int) ($cat_row['right_id'] + 2);

		$sql = 'INSERT INTO ' . FORUMS_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary);
		$db->sql_query($sql);

		$cats_added[$row['cat_id']] = $max_forum_id;
		$max_forum_id++;
	}
	$src_db->sql_freeresult($result);

	// Now insert the forums
	$sql='SELECT * FROM '. $convert->src_table_prefix . 'forums WHERE fup <> 0 ORDER BY type, fid';

	if ($convert->mysql_convert && $same_db)
	{
		$src_db->sql_query("SET NAMES 'binary'");
	}

	$result = $src_db->sql_query($sql);

	if ($convert->mysql_convert && $same_db)
	{
		$src_db->sql_query("SET NAMES 'utf8'");
	}

	while ($row = $src_db->sql_fetchrow($result))
	{

		// Define the new forums sql ary
		$sql_ary = array(
			'forum_id'			=> (int) $row['fid'],
			'forum_name'		=> htmlspecialchars(phpbb_set_default_encoding($row['name']), ENT_COMPAT, 'UTF-8'),
			'parent_id'			=> (int) $row['fup'],
			'forum_parents'		=> '',
			'forum_desc'		=> htmlspecialchars(phpbb_set_default_encoding(''), ENT_COMPAT, 'UTF-8'),
			'forum_type'		=> FORUM_POST,
			'forum_status'		=> 0,
			'enable_prune'		=> 0,
			'prune_next'		=> 0,
			'prune_days'		=> 0,
			'prune_viewed'		=> 0,
			'prune_freq'		=> 0,

			'forum_flags'		=> phpbb_forum_flags(),

			// Default values
			'forum_desc_bitfield'		=> '',
			'forum_desc_options'		=> 7,
			'forum_desc_uid'			=> '',
			'forum_link'				=> '',
			'forum_password'			=> '',
			'forum_style'				=> 0,
			'forum_image'				=> '',
			'forum_rules'				=> '',
			'forum_rules_link'			=> '',
			'forum_rules_bitfield'		=> '',
			'forum_rules_options'		=> 7,
			'forum_rules_uid'			=> '',
			'forum_topics_per_page'		=> 0,
			'forum_posts'				=> 0,
			'forum_topics'				=> 0,
			'forum_topics_real'			=> 0,
			'forum_last_post_id'		=> 0,
			'forum_last_poster_id'		=> 0,
			'forum_last_post_subject'	=> '',
			'forum_last_post_time'		=> 0,
			'forum_last_poster_name'	=> '',
			'forum_last_poster_colour'	=> '',
			'display_on_index'			=> 1,
			'enable_indexing'			=> 1,
			'enable_icons'				=> 0,
		);

		// Now add the forums with proper left/right ids
		$sql = 'SELECT left_id, right_id
			FROM ' . FORUMS_TABLE . '
			WHERE forum_id = ' . $row['fup'];
		$_result = $db->sql_query($sql);
		$cat_row = $db->sql_fetchrow($_result);
		$db->sql_freeresult($_result);

		$sql = 'UPDATE ' . FORUMS_TABLE . '
			SET left_id = left_id + 2, right_id = right_id + 2
			WHERE left_id > ' . $cat_row['right_id'];
		$db->sql_query($sql);

		$sql = 'UPDATE ' . FORUMS_TABLE . '
			SET right_id = right_id + 2
			WHERE ' . $cat_row['left_id'] . ' BETWEEN left_id AND right_id';
		$db->sql_query($sql);

		$sql_ary['left_id'] = (int) $cat_row['right_id'];
		$sql_ary['right_id'] = (int) ($cat_row['right_id'] + 1);

		$sql = 'INSERT INTO ' . FORUMS_TABLE . ' ' . $db->sql_build_array('INSERT', $sql_ary);
		$db->sql_query($sql);
	}
	$src_db->sql_freeresult($result);

	switch ($db->sql_layer)
	{
		case 'postgres':
			$db->sql_query("SELECT SETVAL('" . FORUMS_TABLE . "_seq',(select case when max(forum_id)>0 then max(forum_id)+1 else 1 end from " . FORUMS_TABLE . '));');
		break;

		case 'mssql':
		case 'mssql_odbc':
			$db->sql_query('SET IDENTITY_INSERT ' . FORUMS_TABLE . ' OFF');
		break;

		case 'oracle':
			$result = $db->sql_query('SELECT MAX(forum_id) as max_id FROM ' . FORUMS_TABLE);
			$row = $db->sql_fetchrow($result);
			$db->sql_freeresult($result);

			$largest_id = (int) $row['max_id'];

			if ($largest_id)
			{
				$db->sql_query('DROP SEQUENCE ' . FORUMS_TABLE . '_seq');
				$db->sql_query('CREATE SEQUENCE ' . FORUMS_TABLE . '_seq START WITH ' . ($largest_id + 1));
			}
		break;
	}
}

/**
* Function for recoding text with the default language
*
* @param string $text text to recode to utf8
* @param bool $grab_user_lang if set to true the function tries to use $convert_row['user_lang'] (and falls back to $convert_row['poster_id']) instead of the boards default language
*/
function dz_set_encoding($text, $grab_user_lang = true)
{
	//不知道是否dz有各种不用的编码版本，本次拿到的dz数据库为gbk，所以此处需要使用gbk。可以考虑让用户自己填写编码，或者想办法判断出资料的编码 add by fan
	return utf8_recode($text, 'gbk');
	//return utf8_recode($text, 'UTF-8');
}

/**
* Same as dz_set_encoding, but forcing boards default language
*/
function phpbb_set_default_encoding($text)
{
	return dz_set_encoding($text, false);
}

/**
* Convert Birthday from Birthday MOD to phpBB Format
*/
function phpbb_get_birthday($birthday = '')
{
	if (defined('MOD_BIRTHDAY_TERRA'))
	{
		$birthday = (string) $birthday;

		// stored as month, day, year
		if (!$birthday)
		{
			return ' 0- 0-   0';
		}

		// We use the original mod code to retrieve the birthday (not ideal)
		preg_match('/(..)(..)(....)/', sprintf('%08d', $birthday), $birthday_parts);

		$month = $birthday_parts[1];
		$day = $birthday_parts[2];
		$year =  $birthday_parts[3];

		return sprintf('%2d-%2d-%4d', $day, $month, $year);
	}
	else
	{
		$birthday = (int) $birthday;

		if (!$birthday || $birthday == 999999 || $birthday < 0)
		{
			return ' 0- 0-   0';
		}

		// The birthday mod from niels is using this code to transform to day/month/year
		return gmdate('d-m-Y', $birthday * 86400 + 1);
	}
}

/**
* Return correct user id value
* Everyone's id will be one higher to allow the guest/anonymous user to have a positive id as well
*/
function phpbb_user_id($user_id)
{
	global $config;

	// Increment user id if the old forum is having a user with the id 1
	if (!isset($config['increment_user_id']))
	{
		global $src_db, $same_db, $convert;

		if ($convert->mysql_convert && $same_db)
		{
			$src_db->sql_query("SET NAMES 'binary'");
		}

		// Now let us set a temporary config variable for user id incrementing
		$sql = "SELECT uid
			FROM {$convert->src_table_prefix}members
			WHERE uid = 1";
		$result = $src_db->sql_query($sql);
		$id = (int) $src_db->sql_fetchfield('uid');
		$src_db->sql_freeresult($result);

		// Try to get the maximum user id possible...
		$sql = "SELECT MAX(uid) AS max_user_id
			FROM {$convert->src_table_prefix}members";
		$result = $src_db->sql_query($sql);
		$max_id = (int) $src_db->sql_fetchfield('max_user_id');
		$src_db->sql_freeresult($result);

		if ($convert->mysql_convert && $same_db)
		{
			$src_db->sql_query("SET NAMES 'utf8'");
		}

		// If there is a user id 1, we need to increment user ids. :/
		if ($id === 1)
		{
			set_config('increment_user_id', ($max_id + 1), true);
			$config['increment_user_id'] = $max_id + 1;
		}
		else
		{
			set_config('increment_user_id', 0, true);
			$config['increment_user_id'] = 0;
		}
	}

	// If the old user id is 0 in Discuz6 it is the anonymous user...
	if ($user_id == 0)
	{
		return ANONYMOUS;
	}

	if (!empty($config['increment_user_id']) && $user_id == 1)
	{
		return $config['increment_user_id'];
	}

	// A user id of 0 can happen, for example within the ban table if no user is banned...
	// Within the posts and topics table this can be "dangerous" but is the fault of the user
	// having mods installed (a poster id of 0 is not possible in 2.0.x). 
	// Therefore, we return the user id "as is".

	return (int) $user_id;
}

/* Copy additional table fields from old forum to new forum if user wants this (for Mod compatibility for example)
function phpbb_copy_table_fields()
{
}
*/

/**
* Convert authentication
* user, group and forum table has to be filled in order to work
*/
function phpbb_convert_authentication($mode)
{
	global $db, $src_db, $same_db, $convert, $user, $config, $cache;

	if ($mode == 'start')
	{
		$db->sql_query($convert->truncate_statement . ACL_USERS_TABLE);
		$db->sql_query($convert->truncate_statement . ACL_GROUPS_TABLE);

		// What we will do is handling all 2.0.x admins as founder to replicate what is common in 2.0.x.
		// After conversion the main admin need to make sure he is removing permissions and the founder status if wanted.


		// Grab user ids of users with user_level of ADMIN
		$sql = "SELECT uid AS user_id
			FROM {$convert->src_table_prefix}members
			WHERE adminid = 1
			ORDER BY regdate ASC";
		$result = $src_db->sql_query($sql);

		while ($row = $src_db->sql_fetchrow($result))
		{
			$user_id = (int) phpbb_user_id($row['user_id']);
			// Set founder admin...
			$sql = 'UPDATE ' . USERS_TABLE . '
				SET user_type = ' . USER_FOUNDER . "
				WHERE user_id = $user_id";
			$db->sql_query($sql);
		}
		$src_db->sql_freeresult($result);

		$sql = 'SELECT group_id
			FROM ' . GROUPS_TABLE . "
			WHERE group_name = '" . $db->sql_escape('BOTS') . "'";
		$result = $db->sql_query($sql);
		$bot_group_id = (int) $db->sql_fetchfield('group_id');
		$db->sql_freeresult($result);
	}

	// Grab forum auth information
	$sql = "SELECT *
		FROM {$convert->src_table_prefix}forums";
	$result = $src_db->sql_query($sql);

	$forum_access = array();
	while ($row = $src_db->sql_fetchrow($result))
	{
		$forum_access[] = $row;
	}
	$src_db->sql_freeresult($result);

	if ($convert->mysql_convert && $same_db)
	{
		$src_db->sql_query("SET NAMES 'binary'");
	}
	// 获取版主用户ID以及对应的版面ID, 有继承关系的版主需要在转换后进行设置
	$sql = "SELECT * from {$convert->src_table_prefix}moderators";
	$result = $src_db->sql_query($sql);

	$user_access = array();
	while ($row = $src_db->sql_fetchrow($result))
	{
		$user_access[$row['fid']][] = $row;
	}
	$src_db->sql_freeresult($result);

	// Grab group auth information
	/*$sql = "SELECT g.group_id, aa.*
		FROM {$convert->src_table_prefix}auth_access aa, {$convert->src_table_prefix}groups g
		WHERE g.group_id = aa.group_id
			AND g.group_single_user <> 1";
	$result = $src_db->sql_query($sql);

	$group_access = array();
	while ($row = $src_db->sql_fetchrow($result))
	{
		$group_access[$row['forum_id']][] = $row;
	}
	$src_db->sql_freeresult($result);*/

	if ($convert->mysql_convert && $same_db)
	{
		$src_db->sql_query("SET NAMES 'utf8'");
	}

	// Add Forum Access List
	$auth_map = array(
		'auth_view'			=> array('f_', 'f_list'),
		'auth_read'			=> array('f_read', 'f_search'),
		'auth_post'			=> array('f_post', 'f_bbcode', 'f_smilies', 'f_img', 'f_sigs', 'f_postcount', 'f_report', 'f_subscribe', 'f_print', 'f_email'),
		'auth_reply'		=> 'f_reply',
		'auth_edit'			=> 'f_edit',
		'auth_delete'		=> 'f_delete',
		'auth_pollcreate'	=> 'f_poll',
		'auth_vote'			=> 'f_vote',
		'auth_announce'		=> 'f_announce',
		'auth_sticky'		=> 'f_sticky',
		'auth_attachments'	=> array('f_attach', 'f_download'),
		'auth_download'		=> 'f_download',
	);

	// Define the ACL constants used in 2.0 to make the code slightly more readable
	define('AUTH_ALL', 0);
	define('AUTH_REG', 1);
	define('AUTH_ACL', 2);
	define('AUTH_MOD', 3);
	define('AUTH_ADMIN', 5);

	// A mapping of the simple permissions used by 2.0
	$simple_auth_ary = array(
		'public'			=> array(
			'auth_view'			=> AUTH_ALL,
			'auth_read'			=> AUTH_ALL,
			'auth_post'			=> AUTH_ALL,
			'auth_reply'		=> AUTH_ALL,
			'auth_edit'			=> AUTH_REG,
			'auth_delete'		=> AUTH_REG,
			'auth_sticky'		=> AUTH_MOD,
			'auth_announce'		=> AUTH_MOD,
			'auth_vote'			=> AUTH_REG,
			'auth_pollcreate'	=> AUTH_REG,
		),
		'registered'		=> array(
			'auth_view'			=> AUTH_ALL,
			'auth_read'			=> AUTH_ALL,
			'auth_post'			=> AUTH_REG,
			'auth_reply'		=> AUTH_REG,
			'auth_edit'			=> AUTH_REG,
			'auth_delete'		=> AUTH_REG,
			'auth_sticky'		=> AUTH_MOD,
			'auth_announce'		=> AUTH_MOD,
			'auth_vote'			=> AUTH_REG,
			'auth_pollcreate'	=> AUTH_REG,
		),
		'registered_hidden'	=> array(
			'auth_view'			=> AUTH_REG,
			'auth_read'			=> AUTH_REG,
			'auth_post'			=> AUTH_REG,
			'auth_reply'		=> AUTH_REG,
			'auth_edit'			=> AUTH_REG,
			'auth_delete'		=> AUTH_REG,
			'auth_sticky'		=> AUTH_MOD,
			'auth_announce'		=> AUTH_MOD,
			'auth_vote'			=> AUTH_REG,
			'auth_pollcreate'	=> AUTH_REG,
		),
		'private'			=> array(
			'auth_view'			=> AUTH_ALL,
			'auth_read'			=> AUTH_ACL,
			'auth_post'			=> AUTH_ACL,
			'auth_reply'		=> AUTH_ACL,
			'auth_edit'			=> AUTH_ACL,
			'auth_delete'		=> AUTH_ACL,
			'auth_sticky'		=> AUTH_ACL,
			'auth_announce'		=> AUTH_MOD,
			'auth_vote'			=> AUTH_ACL,
			'auth_pollcreate'	=> AUTH_ACL,
		),
		'private_hidden'	=> array(
			'auth_view'			=> AUTH_ACL,
			'auth_read'			=> AUTH_ACL,
			'auth_post'			=> AUTH_ACL,
			'auth_reply'		=> AUTH_ACL,
			'auth_edit'			=> AUTH_ACL,
			'auth_delete'		=> AUTH_ACL,
			'auth_sticky'		=> AUTH_ACL,
			'auth_announce'		=> AUTH_MOD,
			'auth_vote'			=> AUTH_ACL,
			'auth_pollcreate'	=> AUTH_ACL,
		),
		'moderator'			=> array(
			'auth_view'			=> AUTH_ALL,
			'auth_read'			=> AUTH_MOD,
			'auth_post'			=> AUTH_MOD,
			'auth_reply'		=> AUTH_MOD,
			'auth_edit'			=> AUTH_MOD,
			'auth_delete'		=> AUTH_MOD,
			'auth_sticky'		=> AUTH_MOD,
			'auth_announce'		=> AUTH_MOD,
			'auth_vote'			=> AUTH_MOD,
			'auth_pollcreate'	=> AUTH_MOD,
		),
		'moderator_hidden'	=> array(
			'auth_view'			=> AUTH_MOD,
			'auth_read'			=> AUTH_MOD,
			'auth_post'			=> AUTH_MOD,
			'auth_reply'		=> AUTH_MOD,
			'auth_edit'			=> AUTH_MOD,
			'auth_delete'		=> AUTH_MOD,
			'auth_sticky'		=> AUTH_MOD,
			'auth_announce'		=> AUTH_MOD,
			'auth_vote'			=> AUTH_MOD,
			'auth_pollcreate'	=> AUTH_MOD,
		),
	);

	if ($mode == 'start')
	{
		user_group_auth('guests', 'SELECT user_id, {GUESTS} FROM ' . USERS_TABLE . ' WHERE user_id = ' . ANONYMOUS, false);
		user_group_auth('registered', 'SELECT user_id, {REGISTERED} FROM ' . USERS_TABLE . ' WHERE user_id <> ' . ANONYMOUS . " AND group_id <> $bot_group_id", false);

		// Selecting from old table
		if (!empty($config['increment_user_id']))
		{
			$auth_sql = 'SELECT uid AS user_id, {ADMINISTRATORS} FROM ' . $convert->src_table_prefix . 'members WHERE adminid = 1 AND uid <> 1';
			user_group_auth('administrators', $auth_sql, true);

			$auth_sql = 'SELECT ' . $config['increment_user_id'] . ' as user_id, {ADMINISTRATORS} FROM ' . $convert->src_table_prefix . 'members WHERE adminid = 1 AND uid = 1';
			user_group_auth('administrators', $auth_sql, true);
		}
		else
		{
			$auth_sql = 'SELECT uid AS user_id, {ADMINISTRATORS} FROM ' . $convert->src_table_prefix . 'members WHERE adminid = 1';
			user_group_auth('administrators', $auth_sql, true);
		}

		if (!empty($config['increment_user_id']))
		{
			$auth_sql = 'SELECT uid AS user_id, {GLOBAL_MODERATORS} FROM ' . $convert->src_table_prefix . 'members WHERE adminid = 1 AND uid <> 1';
			user_group_auth('global_moderators', $auth_sql, true);

			$auth_sql = 'SELECT ' . $config['increment_user_id'] . ' as user_id, {GLOBAL_MODERATORS} FROM ' . $convert->src_table_prefix . 'members WHERE adminid = 1 AND uid = 1';
			user_group_auth('global_moderators', $auth_sql, true);
		}
		else
		{
			$auth_sql = 'SELECT uid AS user_id, {GLOBAL_MODERATORS} FROM ' . $convert->src_table_prefix . 'members WHERE adminid = 1';
			user_group_auth('global_moderators', $auth_sql, true);
		}
	}
	else if ($mode == 'first')
	{
		// Go through all 2.0.x forums
		foreach ($forum_access as $forum)
		{
			$new_forum_id = (int) $forum['fid'];

			// Administrators have full access to all forums whatever happens
			mass_auth('group_role', $new_forum_id, 'administrators', 'FORUM_FULL');

			$matched_type = 'public'; // 全部使用公开属性, 需要在转换后调整

			switch ($matched_type)
			{
				case 'public':
					mass_auth('group_role', $new_forum_id, 'guests', 'FORUM_LIMITED');
					mass_auth('group_role', $new_forum_id, 'registered', 'FORUM_LIMITED_POLLS');
					mass_auth('group_role', $new_forum_id, 'bots', 'FORUM_BOT');
				break;

				case 'registered':
					mass_auth('group_role', $new_forum_id, 'guests', 'FORUM_READONLY');
					mass_auth('group_role', $new_forum_id, 'bots', 'FORUM_BOT');

				// no break;

				case 'registered_hidden':
					mass_auth('group_role', $new_forum_id, 'registered', 'FORUM_POLLS');
				break;

				case 'private':
				case 'private_hidden':
				case 'moderator':
				case 'moderator_hidden':
				default:
					// The permissions don't match a simple set, so we're going to have to map them directly

					// No post approval for all, in 2.0.x this feature does not exist
					mass_auth('group', $new_forum_id, 'guests', 'f_noapprove', ACL_YES);
					mass_auth('group', $new_forum_id, 'registered', 'f_noapprove', ACL_YES);
				break;
			}
		}
	}
	else if ($mode == 'second')
	{
		// Assign permission roles and other default permissions

		// guests having u_download and u_search ability
		$db->sql_query('INSERT INTO ' . ACL_GROUPS_TABLE . ' (group_id, forum_id, auth_option_id, auth_role_id, auth_setting) SELECT ' . get_group_id('guests') . ', 0, auth_option_id, 0, 1 FROM ' . ACL_OPTIONS_TABLE . " WHERE auth_option IN ('u_', 'u_download', 'u_search')");

		// administrators/global mods having full user features
		mass_auth('group_role', 0, 'administrators', 'USER_FULL');
		mass_auth('group_role', 0, 'global_moderators', 'USER_FULL');

		// By default all converted administrators are given full access
		mass_auth('group_role', 0, 'administrators', 'ADMIN_FULL');

		// All registered users are assigned the standard user role
		mass_auth('group_role', 0, 'registered', 'USER_STANDARD');
		mass_auth('group_role', 0, 'registered_coppa', 'USER_STANDARD');

		// Instead of administrators being global moderators we give the MOD_FULL role to global mods (admins already assigned to this group)
		mass_auth('group_role', 0, 'global_moderators', 'MOD_FULL');

		// And now those who have had their avatar rights removed get assigned a more restrictive role
		//以下注释掉对没有头像权限和站内PM权限的用户进行的权限设置, 需转换后在后台控制面板进行设置
		/*$sql = 'SELECT uid FROM ' . $convert->src_table_prefix . 'members
			WHERE user_allowavatar = 0
				AND user_id > 0';
		$result = $src_db->sql_query($sql);

		while ($row = $src_db->sql_fetchrow($result))
		{
			mass_auth('user_role', 0, (int) phpbb_user_id($row['user_id']), 'USER_NOAVATAR');
		}
		$src_db->sql_freeresult($result);

		// And the same for those who have had their PM rights removed
		$sql = 'SELECT user_id FROM ' . $convert->src_table_prefix . 'users
			WHERE user_allow_pm = 0
				AND user_id > 0';
		$result = $src_db->sql_query($sql);

		while ($row = $src_db->sql_fetchrow($result))
		{
			mass_auth('user_role', 0, (int) phpbb_user_id($row['user_id']), 'USER_NOPM');
		}
		$src_db->sql_freeresult($result);*/
	}
	else if ($mode == 'third')
	{
		// And now the moderators 在这里设置版主权限
		// We make sure that they have at least standard access to the forums they moderate in addition to the moderating permissions
		foreach ($user_access as $forum_id => $access_map)
		{
			$forum_id = (int) $forum_id;

			foreach ($access_map as $access)
			{
				mass_auth('user_role', $forum_id, (int) phpbb_user_id($access['uid']), 'MOD_STANDARD');
				mass_auth('user_role', $forum_id, (int) phpbb_user_id($access['uid']), 'FORUM_STANDARD');
			}
		}

		/*foreach ($group_access as $forum_id => $access_map)
		{
			$forum_id = (int) $forum_id;

			foreach ($access_map as $access)
			{
				if (isset($access['auth_mod']) && $access['auth_mod'] == 1)
				{
					mass_auth('group_role', $forum_id, (int) $access['group_id'], 'MOD_STANDARD');
					mass_auth('group_role', $forum_id, (int) $access['group_id'], 'FORUM_STANDARD');
				}
			}
		}*/

		// We grant everyone readonly access to the categories to ensure that the forums are visible
		$sql = 'SELECT forum_id, forum_name, parent_id, left_id, right_id
			FROM ' . FORUMS_TABLE . '
			ORDER BY left_id ASC';
		$result = $db->sql_query($sql);

		$parent_forums = $forums = array();
		while ($row = $db->sql_fetchrow($result))
		{
			if ($row['parent_id'] == 0)
			{
				mass_auth('group_role', $row['forum_id'], 'administrators', 'FORUM_FULL');
				mass_auth('group_role', $row['forum_id'], 'global_moderators', 'FORUM_FULL');
				$parent_forums[] = $row;
			}
			else
			{
				$forums[] = $row;
			}
		}
		$db->sql_freeresult($result);

		global $auth;

		// Let us see which groups have access to these forums...
		foreach ($parent_forums as $row)
		{
			// Get the children
			$branch = $forum_ids = array();

			foreach ($forums as $key => $_row)
			{
				if ($_row['left_id'] > $row['left_id'] && $_row['left_id'] < $row['right_id'])
				{
					$branch[] = $_row;
					$forum_ids[] = $_row['forum_id'];
					continue;
				}
			}

			if (sizeof($forum_ids))
			{
				// Now make sure the user is able to read these forums
				$hold_ary = $auth->acl_group_raw_data(false, 'f_list', $forum_ids);

				if (empty($hold_ary))
				{
					continue;
				}

				foreach ($hold_ary as $g_id => $f_id_ary)
				{
					$set_group = false;

					foreach ($f_id_ary as $f_id => $auth_ary)
					{
						foreach ($auth_ary as $auth_option => $setting)
						{
							if ($setting == ACL_YES)
							{
								$set_group = true;
								break 2;
							}
						}
					}

					if ($set_group)
					{
						mass_auth('group', $row['forum_id'], $g_id, 'f_list', ACL_YES);
					}
				}
			}
		}
	}
}

/**
* Set primary group.
* Really simple and only based on user_level (remaining groups will be assigned later)
*/
function phpbb_set_primary_group($user_level)
{
	global $convert_row;

	if ($user_level == 1)
	{
		return get_group_id('administrators');
	}
/*	else if ($user_level == 2)
	{
		return get_group_id('global_moderators');
	}
	else if ($user_level == 0 && $convert_row['user_active'])*/
	else if ($convert_row['user_active'])
	{
		return get_group_id('registered');
	}

	return 0;
}

/**
* Convert the group name, making sure to avoid conflicts with 3.0 special groups
*/
function phpbb_convert_group_name($group_name)
{
	$default_groups = array(
		'GUESTS',
		'REGISTERED',
		'REGISTERED_COPPA',
		'GLOBAL_MODERATORS',
		'ADMINISTRATORS',
		'BOTS',
	);

	if (in_array(strtoupper($group_name), $default_groups))
	{
		return 'phpBB2 - ' . $group_name;
	}

	return phpbb_set_default_encoding($group_name);
}

/**
* Convert the group type constants
*/
function phpbb_convert_group_type($group_type)
{
	switch ($group_type)
	{
		case 0:
			return GROUP_OPEN;
		break;

		case 1:
			return GROUP_CLOSED;
		break;

		case 2:
			return GROUP_HIDDEN;
		break;
	}

	// Never return GROUP_SPECIAL here, because only phpBB3's default groups are allowed to have this type set.
	return GROUP_HIDDEN;
}

/**
* Convert the topic type constants
*/
function phpbb_convert_topic_type($topic_type)
{
	switch ($topic_type)
	{
		case 0:
			return POST_NORMAL;
		break;

		case 1:
			return POST_STICKY;
		break;

		case 2:
			return POST_ANNOUNCE;
		break;

		case 3:
			return POST_GLOBAL;
		break;
	}

	return POST_NORMAL;
}

function phpbb_replace_size($matches)
{
	return '[size=' . min(200, ceil(60 + (((double) $matches[1])*20))) . ']';
}

/**
* Reparse the message stripping out the bbcode_uid values and adding new ones and setting the bitfield
* @todo What do we want to do about HTML in messages - currently it gets converted to the entities, but there may be some objections to this
*/
function phpbb_prepare_message($message)
{
	global $phpbb_root_path, $phpEx, $db, $convert, $user, $config, $cache, $convert_row, $message_parser;
	if (!$message)
	{
		$convert->row['mp_bbcode_bitfield'] = $convert_row['mp_bbcode_bitfield'] = 0;
		return '';
	}
	
	// Adjust size...
	if (strpos($message, '[size=') !== false)
	{
		//$message = preg_replace_callback('/\[size=(\d*):(' . $convert->row['old_bbcode_uid'] . ')\]/', 'phpbb_replace_size', $message);
		$message = preg_replace_callback('/\[size=(\d*)\]/', 'phpbb_replace_size', $message);
	}
	
	if (strpos($message, '[font=') !== false)
	{
		$message = preg_replace('/\[font=(.*?)\]/s', '', $message);
		$message = preg_replace('/\[\/font\]/s', '', $message);
	}

	if (strpos($message, '[quote=') !== false)
	{
		$message = preg_replace('/\[quote="(.*?)"\]/s', '[quote=&quot;\1&quot;]', $message);
		$message = preg_replace('/\[quote=\\\"(.*?)\\\"\]/s', '[quote=&quot;\1&quot;]', $message);
		
		// let's hope that this solves more problems than it causes. Deal with escaped quotes.
		$message = str_replace('\"', '&quot;', $message);
		$message = str_replace('\&quot;', '&quot;', $message);
	}

	// Already the new user id ;)
	$user_id = $convert->row['poster_id'];

	$message = str_replace('<', '&lt;', $message);
	$message = str_replace('>', '&gt;', $message);
	$message = str_replace('<br />', "\n", $message);

	// make the post UTF-8
	$message = dz_set_encoding($message);

	$message_parser->warn_msg = array(); // Reset the errors from the previous message
	$message_parser->bbcode_uid = make_uid($convert->row['post_time']);
	$message_parser->message = $message;
	unset($message);

	// Make sure options are set.
//	$enable_html = (!isset($row['enable_html'])) ? false : $row['enable_html'];
	$enable_bbcode = (!isset($convert->row['enable_bbcode'])) ? true : $convert->row['enable_bbcode'];
	$enable_smilies = (!isset($convert->row['enable_smilies'])) ? true : $convert->row['enable_smilies'];
	$enable_magic_url = (!isset($convert->row['enable_magic_url'])) ? true : $convert->row['enable_magic_url'];

	// parse($allow_bbcode, $allow_magic_url, $allow_smilies, $allow_img_bbcode = true, $allow_flash_bbcode = true, $allow_quote_bbcode = true, $allow_url_bbcode = true, $update_this_message = true, $mode = 'post')
	$message_parser->parse($enable_bbcode, $enable_magic_url, $enable_smilies);
	
	if (sizeof($message_parser->warn_msg))
	{
		$msg_id = isset($convert->row['post_id']) ? $convert->row['post_id'] : $convert->row['privmsgs_id'];
		$convert->p_master->error('<span style="color:red">' . $user->lang['POST_ID'] . ': ' . $msg_id . ' ' . $user->lang['CONV_ERROR_MESSAGE_PARSER'] . ': <br /><br />' . implode('<br />', $message_parser->warn_msg), __LINE__, __FILE__, true);
	}

	$convert->row['mp_bbcode_bitfield'] = $convert_row['mp_bbcode_bitfield'] = $message_parser->bbcode_bitfield;

	$message = $message_parser->message;
	unset($message_parser->message);

	return $message;
}

/**
* Return the bitfield calculated by the previous function
*/
function get_bbcode_bitfield()
{
	global $convert_row;

	return $convert_row['mp_bbcode_bitfield'];
}

/**
* Determine the last user to edit a post
* In practice we only tracked edits by the original poster in 2.0.x so this will only be set if they had edited their own post
*/
function phpbb_post_edit_user()
{
	global $convert_row, $config;

	if (isset($convert_row['post_edit_count']))
	{
		return phpbb_user_id($convert_row['poster_id']);
	}

	return 0;
}

/**
* Obtain the path to uploaded files on the 2.0.x forum
* This is only used if the Attachment MOD was installed
*/
function phpbb_get_files_dir()
{
	if (!defined('MOD_ATTACHMENT'))
	{
		return;
	}

	global $src_db, $same_db, $convert, $user, $config, $cache;

	if ($convert->mysql_convert && $same_db)
	{
		$src_db->sql_query("SET NAMES 'binary'");
	}
	$sql = 'SELECT config_value AS upload_dir
		FROM ' . $convert->src_table_prefix . "attachments_config
		WHERE config_name = 'upload_dir'";
	$result = $src_db->sql_query($sql);
	$upload_path = $src_db->sql_fetchfield('upload_dir');
	$src_db->sql_freeresult($result);

	$sql = 'SELECT config_value AS ftp_upload
		FROM ' . $convert->src_table_prefix . "attachments_config
		WHERE config_name = 'allow_ftp_upload'";
	$result = $src_db->sql_query($sql);
	$ftp_upload = (int) $src_db->sql_fetchfield('ftp_upload');
	$src_db->sql_freeresult($result);

	if ($convert->mysql_convert && $same_db)
	{
		$src_db->sql_query("SET NAMES 'utf8'");
	}

	if ($ftp_upload)
	{
		$convert->p_master->error($user->lang['CONV_ERROR_ATTACH_FTP_DIR'], __LINE__, __FILE__);
	}

	return $upload_path;
}

/**
* Copy thumbnails of uploaded images from the 2.0.x forum
* This is only used if the Attachment MOD was installed
*/
function phpbb_copy_thumbnails()
{
	global $db, $convert, $user, $config, $cache, $phpbb_root_path;

	$src_path = $convert->options['forum_path'] . '/' . phpbb_get_files_dir() . '/thumbs/';
	
	if ($handle = @opendir($src_path))
	{
		while ($entry = readdir($handle))
		{
			if ($entry[0] == '.')
			{
				continue;
			}

			if (is_dir($src_path . $entry))
			{
				continue;
			}
			else
			{
				copy_file($src_path . $entry, $config['upload_path'] . '/' . preg_replace('/^t_/', 'thumb_', $entry));
				@unlink($phpbb_root_path . $config['upload_path'] . '/thumbs/' . $entry);
			}
		}
		closedir($handle);
	}
}

/**
* Convert the attachment category constants
* This is only used if the Attachment MOD was installed
*/
function phpbb_attachment_category($cat_id)
{
	switch ($cat_id)
	{
		case 1:
			return ATTACHMENT_CATEGORY_IMAGE;
		break;

		case 2:
			return ATTACHMENT_CATEGORY_WM;
		break;

		case 3:
			return ATTACHMENT_CATEGORY_FLASH;
		break;
	}

	return ATTACHMENT_CATEGORY_NONE;
}

/**
* Obtain list of forums in which different attachment categories can be used
*/
function phpbb_attachment_forum_perms($forum_permissions)
{
	if (empty($forum_permissions))
	{
		return '';
	}

	// Decode forum permissions
	$forum_ids = array();

	$one_char_encoding = '#';
	$two_char_encoding = '.';

	$auth_len = 1;
	for ($pos = 0; $pos < strlen($forum_permissions); $pos += $auth_len)
	{
		$forum_auth = substr($forum_permissions, $pos, 1);
		if ($forum_auth == $one_char_encoding)
		{
			$auth_len = 1;
			continue;
		}
		else if ($forum_auth == $two_char_encoding)
		{
			$auth_len = 2;
			$pos--;
			continue;
		}
		
		$forum_auth = substr($forum_permissions, $pos, $auth_len);
		$forum_id = base64_unpack($forum_auth);

		$forum_ids[] = (int) $forum_id;
	}
	
	if (sizeof($forum_ids))
	{
		return attachment_forum_perms($forum_ids);
	}

	return '';
}

/**
* Convert the avatar type constants
*/
function phpbb_avatar_type($type)
{
	switch ($type)
	{
		case 1:
			return AVATAR_UPLOAD;
		break;

		case 2:
			return AVATAR_REMOTE;
		break;

		case 3:
			return AVATAR_GALLERY;
		break;
	}

	return 0;
}


/**
* Just undos the replacing of '<' and '>'
*/
function  phpbb_smilie_html_decode($code)
{
	$code = str_replace('&lt;', '<', $code);
	return str_replace('&gt;', '>', $code);
}

/**
* Transfer avatars, copying the image if it was uploaded
*/
function phpbb_import_avatar($user_avatar)
{
	global $convert_row;

	if (!$convert_row['user_avatar_type'])
	{
		return '';
	}
	else if ($convert_row['user_avatar_type'] == 1)
	{
		// Uploaded avatar
		return import_avatar($user_avatar, false, $convert_row['user_id']);
	}
	else if ($convert_row['user_avatar_type'] == 2)
	{
		// Remote avatar
		return $user_avatar;
	}
	else if ($convert_row['user_avatar_type'] == 3)
	{
		// Gallery avatar
		return $user_avatar;
	}

	return '';
}


/**
* Find out about the avatar's dimensions
*/
function phpbb_get_avatar_height($user_avatar)
{
	global $convert_row;
	
	if (empty($convert_row['user_avatar_type']))
	{
		return 0;
	}
	return get_avatar_height($user_avatar, 'phpbb_avatar_type', $convert_row['user_avatar_type']);
}


/**
* Find out about the avatar's dimensions
*/
function phpbb_get_avatar_width($user_avatar)
{
	global $convert_row;

	if (empty($convert_row['user_avatar_type']))
	{
		return 0;
	}
	
	return get_avatar_width($user_avatar, 'phpbb_avatar_type', $convert_row['user_avatar_type']);
}


/**
* Calculate the correct to_address field for private messages
*/
function phpbb_privmsgs_to_userid($to_userid)
{
	global $config;

	return 'u_' . phpbb_user_id($to_userid);
}

/**
* Calculate whether a private message was unread using the bitfield
*/
function phpbb_unread_pm($pm_type)
{
	return ($pm_type == 5) ? 1 : 0;
}

/**
* Calculate whether a private message was new using the bitfield
*/
function phpbb_new_pm($pm_type)
{
	return ($pm_type == 1) ? 1 : 0;
}

/**
* Obtain the folder_id for the custom folder created to replace the savebox from 2.0.x (used to store saved private messages)
*/
function phpbb_get_savebox_id($user_id)
{
	global $db;

	$user_id = phpbb_user_id($user_id);

	// Only one custom folder, check only one
	$sql = 'SELECT folder_id
		FROM ' . PRIVMSGS_FOLDER_TABLE . '
		WHERE user_id = ' . $user_id;
	$result = $db->sql_query_limit($sql, 1);
	$folder_id = (int) $db->sql_fetchfield('folder_id');
	$db->sql_freeresult($result);

	return $folder_id;
}

/**
* Transfer attachment specific configuration options
* These were not stored in the main config table on 2.0.x
* This is only used if the Attachment MOD was installed
*/
function phpbb_import_attach_config()
{
	global $db, $src_db, $same_db, $convert, $config;

	set_config('allow_attachments', 1);

	set_config('max_filesize', '262144');
	set_config('max_filesize_pm', '262144');
	set_config('attachment_quota', '102428800');
	set_config('max_attachments', '3');
	set_config('max_attachments_pm', '3');
	set_config('allow_pm_attach', '0');

	set_config('img_display_inlined', $attach_config['img_display_inlined']);
	set_config('img_max_width', $attach_config['img_max_width']);
	set_config('img_max_height', $attach_config['img_max_height']);
	set_config('img_link_width', $attach_config['img_link_width']);
	set_config('img_link_height', $attach_config['img_link_height']);
	set_config('img_create_thumbnail', $attach_config['img_create_thumbnail']);
	set_config('img_max_thumb_width', 400);
	set_config('img_min_thumb_filesize', $attach_config['img_min_thumb_filesize']);
	set_config('img_imagick', $attach_config['img_imagick']);
}

/**
* Adjust 2.0.x disallowed names to 3.0.x format
*/
function phpbb_disallowed_username($username)
{
	// Replace * with %
	$username = phpbb_set_default_encoding(str_replace('*', '%', $username));
	return utf8_htmlspecialchars($username);
}

/**
* Checks whether there are any usernames on the old board that would map to the same
* username_clean on phpBB3. Prints out a list if any exist and exits.
*/
function dz_check_username_collisions()
{
	global $db, $src_db, $convert, $table_prefix, $user, $lang;

	$map_dbms = '';
	switch ($db->sql_layer)
	{
		case 'mysql':
			$map_dbms = 'mysql_40';
		break;
	
		case 'mysql4':
			if (version_compare($db->mysql_version, '4.1.3', '>='))
			{
				$map_dbms = 'mysql_41';
			}
			else
			{
				$map_dbms = 'mysql_40';
			}
		break;
	
		case 'mysqli':
			$map_dbms = 'mysql_41';
		break;
	
		case 'mssql':
		case 'mssql_odbc':
			$map_dbms = 'mssql';
		break;
	
		default:
			$map_dbms = $db->sql_layer;
		break;
	}

	// create a temporary table in which we store the clean usernames
	$drop_sql = 'DROP TABLE ' . $table_prefix . 'userconv';
	switch ($map_dbms)
	{
		case 'firebird':
			$create_sql = 'CREATE TABLE ' . $table_prefix . 'userconv (
				user_id INTEGER NOT NULL,
				username_clean VARCHAR(255) CHARACTER SET UTF8 DEFAULT \'\' NOT NULL COLLATE UNICODE
			)';
		break;

		case 'mssql':
			$create_sql = 'CREATE TABLE [' . $table_prefix . 'userconv] (
				[user_id] [int] NOT NULL ,
				[username_clean] [varchar] (255) DEFAULT (\'\') NOT NULL
			)';
		break;

		case 'mysql_40':
			$create_sql = 'CREATE TABLE ' . $table_prefix . 'userconv (
				user_id mediumint(8) NOT NULL,
				username_clean blob NOT NULL
			)';
		break;

		case 'mysql_41':
			$create_sql = 'CREATE TABLE ' . $table_prefix . 'userconv (
				user_id mediumint(8) NOT NULL,
				username_clean varchar(255) DEFAULT \'\' NOT NULL
			) CHARACTER SET `utf8` COLLATE `utf8_bin`';
		break;

		case 'oracle':
			$create_sql = 'CREATE TABLE ' . $table_prefix . 'userconv (
				user_id number(8) NOT NULL,
				username_clean varchar2(255) DEFAULT \'\'
			)';
		break;

		case 'postgres':
			$create_sql = 'CREATE TABLE ' . $table_prefix . 'userconv (
				user_id INT4 DEFAULT \'0\',
				username_clean varchar_ci DEFAULT \'\' NOT NULL
			)';
		break;

		case 'sqlite':
			$create_sql = 'CREATE TABLE ' . $table_prefix . 'userconv (
				user_id INTEGER NOT NULL DEFAULT \'0\',
				username_clean varchar(255) NOT NULL DEFAULT \'\'
			)';
		break;
	}

	$db->sql_return_on_error(true);
	$db->sql_query($drop_sql);
	$db->sql_return_on_error(false);
	$db->sql_query($create_sql);

	// now select all user_ids and usernames and then convert the username (this can take quite a while!)
	$sql = 'SELECT uid as user_id, username
		FROM ' . $convert->src_table_prefix . 'members';
	$result = $src_db->sql_query($sql);

	$insert_ary = array();
	$i = 0;
	while ($row = $src_db->sql_fetchrow($result))
	{
		$clean_name = utf8_clean_string(phpbb_set_default_encoding($row['username']));
		$insert_ary[] = array('user_id' => (int) $row['user_id'], 'username_clean' => (string) $clean_name);

		if ($i % 1000 == 999)
		{
			$db->sql_multi_insert($table_prefix . 'userconv', $insert_ary);
			$insert_ary = array();
		}
		$i++;
	}
	$src_db->sql_freeresult($result);

	if (sizeof($insert_ary))
	{
		$db->sql_multi_insert($table_prefix . 'userconv', $insert_ary);
	}
	unset($insert_ary);

	// now find the clean version of the usernames that collide
	$sql = 'SELECT username_clean
		FROM ' . $table_prefix . 'userconv
		GROUP BY username_clean
		HAVING COUNT(user_id) > 1';
	$result = $db->sql_query($sql);

	$colliding_names = array();
	while ($row = $db->sql_fetchrow($result))
	{
		$colliding_names[] = $row['username_clean'];
	}
	$db->sql_freeresult($result);

	// there was at least one collision, the admin will have to solve it before conversion can continue
	if (sizeof($colliding_names))
	{
		$sql = 'SELECT user_id, username_clean
			FROM ' . $table_prefix . 'userconv
			WHERE ' . $db->sql_in_set('username_clean', $colliding_names);
		$result = $db->sql_query($sql);
		unset($colliding_names);

		$colliding_user_ids = array();
		while ($row = $db->sql_fetchrow($result))
		{
			$colliding_user_ids[(int) $row['user_id']] = $row['username_clean'];
		}
		$db->sql_freeresult($result);

		$sql = 'SELECT username, uid as user_id, posts as user_posts
			FROM ' . $convert->src_table_prefix . 'members
			WHERE ' . $src_db->sql_in_set('uid', array_keys($colliding_user_ids));
		$result = $src_db->sql_query($sql);

		$colliding_users = array();
		while ($row = $db->sql_fetchrow($result))
		{
			$row['user_id'] = (int) $row['user_id'];
			if (isset($colliding_user_ids[$row['user_id']]))
			{
				$colliding_users[$colliding_user_ids[$row['user_id']]][] = $row;
			}
		}
		$db->sql_freeresult($result);
		unset($colliding_user_ids);

		$list = '';
		foreach ($colliding_users as $username_clean => $users)
		{
			$list .= sprintf($user->lang['COLLIDING_CLEAN_USERNAME'], $username_clean) . "<br />\n";
			foreach ($users as $i => $row)
			{
				$list .= sprintf($user->lang['COLLIDING_USER'], $row['user_id'], phpbb_set_default_encoding($row['username']), $row['user_posts']) . "<br />\n";
			}
		}

		$lang['INST_ERR_FATAL'] = $user->lang['CONV_ERR_FATAL'];
		$convert->p_master->error('<span style="color:red">' . $user->lang['COLLIDING_USERNAMES_FOUND'] . '</span></b><br /><br />' . $list . '<b>', __LINE__, __FILE__);
	}

	$db->sql_query($drop_sql);
}

function dz_online_count($input){
	if (preg_match('/(\d+)\s+(\d+)/', $input, $m)){
		return trim($m[1]);
	}
	return 0;
}

function dz_online_date($input){
		if (preg_match('/(\d+)\s+(\d+)/', $input, $m)){
		return trim($m[2]);
	}
	return 0;
}

function dz_get_uidbyname($in_name){
	global $db, $src_db, $convert, $table_prefix;
	$sql = 'SELECT uid as user_id, username
		FROM ' . $convert->src_table_prefix . "members WHERE username='".trim($in_name)."'";
	$result = $src_db->sql_query($sql);
	$row = $src_db->sql_fetchrow($result);
	$src_db->sql_freeresult($result);
	if (empty($row['user_id']) || $row['user_id'] == ''){
		$row['user_id'] = -1;
	}
	return $row['user_id'];
}

function dz_get_first_pidbytid( $tid )
{
	global $db, $src_db, $convert, $table_prefix;
	$tid = intval( $tid );
	$sql = 'select pid from ' . $convert->src_table_prefix . 'posts where tid = ' . $tid . ' order by dateline asc limit 0, 1';
	$result = $src_db->sql_query($sql);
	$row = $src_db->sql_fetchrow($result);
	$src_db->sql_freeresult($result);
	if (empty($row['pid']) || $row['pid'] == ''){
		$row['pid'] = 0;
	}
	return $row['pid'];
}

function dz_get_last_pidbytid ( $tid )
{
	global $db, $src_db, $convert, $table_prefix;
	$tid = intval( $tid );
	$sql = 'select pid from ' . $convert->src_table_prefix . 'posts where tid = ' . $tid . ' order by dateline desc limit 0, 1';
	$result = $src_db->sql_query($sql);
	$row = $src_db->sql_fetchrow($result);
	$src_db->sql_freeresult($result);
	if (empty($row['pid']) || $row['pid'] == ''){
		$row['pid'] = 0;
	}
	return $row['pid'];
}

function dz_convert_topic_type( $displayorder )
{
	//define('POST_NORMAL', 0);
	//define('POST_STICKY', 1);
	//define('POST_ANNOUNCE', 2);
	//define('POST_GLOBAL', 3);
	switch ($displayorder)
	{
		case 0:
			return POST_NORMAL;
		break;

		case 1:
			return POST_STICKY;
		break;

		case 2:
			return POST_ANNOUNCE;
		break;

		case 3:
			return POST_GLOBAL;
		break;
	}

	return POST_NORMAL;
}


function dz_import_smiley( $url )
{
	global  $convert;
	//copy( $convert->options[forum_path] . '/' . $convert->convertor[smilies_path] . $url,  '../images/smilies/' . $url );
	//print_r(  $convert );exit;
	//echo $url;
	//exit;
	return $url;
}

function dz_negative ($input)
{
	if ($input == -1){
		return 1;
	}else{
		return 0;
	}
}

function dz_convert_group_type ($group_type)
{
	if ($group_type == 'system'){
		return GROUP_SPECIAL;
	} else if ($group_type == 'member') {
		return GROUP_OPEN;
	} else if ($group_type == 'special'){
		return GROUP_SPECIAL ;
	} else {
		return GROUP_CLOSED;
	}
}

function dz_set_user_type ($user_type)
{
	if($user_type == 1)
	{
		return 3;
	} else {
		return 0;
	}
}

function dz_get_birthday($birthday)
{
	
}

function dz_import_avatar($source)
{
	if (empty($source) || preg_match('#^https?:#i', $source) || preg_match('#blank\.(gif|png)$#i', $source))
	{
		return $source;
	}

	global $convert, $phpbb_root_path, $config, $user;

	if (!isset($convert->convertor['avatar_path']))
	{
		$convert->p_master->error(sprintf($user->lang['CONV_ERROR_NO_AVATAR_PATH'], 'import_avatar()'), __LINE__, __FILE__);
	}
	
	if (preg_match('/^images\/avatars\/(.*)/', $source, $m))
	{
		return 'dz_avatars/'.$m[1];
	} else if (preg_match('/^customavatars\/(.*)/', $source, $m)) {
		return 'dz_custom_avatars/'.$m[1];
	} else {
		return '';
	}
	
	/*if ($use_target === false && $convert_row['user_id'] !== false)
	{
		$use_target = $config['avatar_salt'] . '_' . $user_id . '.' . substr(strrchr($source, '.'), 1);
	}
	
	$result = _import_check('avatar_path', $source, $use_target);

	return ((!empty($user_id)) ? $user_id : $use_target) . '.' . substr(strrchr($source, '.'), 1);*/
}

function dz_avatar_type($source)
{
	if (empty($source) || preg_match('#^https?:#i', $source) || preg_match('#blank\.(gif|png)$#i', $source))
	{
		return 2;
	} else if (preg_match('/images\/avatars\/(.*)/', $source, $m)) {
		return 3;
	} else if (preg_match('/^customavatars\//', $source, $m)) {
		return 3;
	}
	return 1;
} 

function import_custom_avatar($gallery_name = '')
{
	global $config, $convert, $phpbb_root_path, $user;

	$relative_path = empty($convert->convertor['source_path_absolute']);

	if (empty($convert->convertor['avatar_gallery_path']))
	{
		$convert->p_master->error(sprintf($user->lang['CONV_ERROR_NO_GALLERY_PATH'], 'import_avatar_gallery()'), __LINE__, __FILE__);
	}

	$src_path = relative_base(path($convert->convertor['avatar_gallery_path'], $relative_path), $relative_path);

	if (is_dir($src_path))
	{
		// Do not die on failure... safe mode restrictions may be in effect.
		copy_dir($convert->convertor['avatar_custom_path'], path($config['avatar_gallery_path']) . $gallery_name, true, false, false, $relative_path);
	}
}

function dz_import_attachment($source, $use_target = false)
{
	if (empty($source))
	{
		return '';
	}
	return 'dz_files/' . $source;
}

function dz_get_extension($source)
{
	if (empty($source))
	{
		return '';
	}
	$path_parts = pathinfo($source);
	return $path_parts["extension"];
}

function nozerotoone($input){
	if ($input == 0){
		return 0;
	} else {
		return 1;
	}
}

function change_poll_option_id_type() {
	global $db, $src_db, $same_db, $convert, $user, $config, $cache;
	$sql = 'ALTER TABLE ' . POLL_OPTIONS_TABLE . " CHANGE `poll_option_id` `poll_option_id` INT( 10 ) NOT NULL default '0'";
	$db->sql_query($sql);
}
?>
