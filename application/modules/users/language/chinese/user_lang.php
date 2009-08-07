<?php

$lang['user_register_header'] 	= '注册';
$lang['user_register_step1'] 	= '<strong>第一步:</strong> 注册';
$lang['user_register_step2'] 	= '<strong>第二步:</strong> 激活';

$lang['user_login_header'] 		= '登录';

// titles
$lang['user_add_title'] = '创建用户';
$lang['user_inactive_title'] = '不活跃用户';
$lang['user_active_title'] = '活跃用户';
$lang['user_registred_title'] = '已注册用户';

// labels
$lang['user_edit_title'] = '编辑用户 "%s"';
$lang['user_details_label'] = '明细';
$lang['user_first_name_label'] = '名';
$lang['user_last_name_label'] = '姓';
$lang['user_email_label'] = 'E-mail';
$lang['user_role_label'] = '角色';
$lang['user_activate_label'] = '激活';
$lang['user_password_label'] = '密码';
$lang['user_password_confirm_label'] = '密码确认';
$lang['user_name_label'] = '姓名';
$lang['user_joined_label'] = 'Joined';
$lang['user_last_visit_label'] = '最近一次访问';
$lang['user_actions_label'] = '操作';
$lang['user_never_label'] = '从不';
$lang['user_delete_label'] = '删除';
$lang['user_edit_label'] = '编辑';
$lang['user_view_label'] = '浏览';

$lang['user_no_inactives'] = 'There are no inactive users.';
$lang['user_no_registred'] = '没有已注册用户';

$lang['account_changes_saved'] = 'The changes to your account have been saved successfully.';

$lang['indicates_required'] = 'Indicates required fields';

// -- Registration / Activation / Reset Password ----------------------------------------------------------

$lang['user_register_title'] = '注册';
$lang['user_activate_account_title'] = '激活帐号';
$lang['user_activate_label'] = '激活';
$lang['user_activated_account_title'] = '激活帐号';
$lang['user_reset_password_title'] = '密码重置';
$lang['user_password_reset_title'] = '密码重置';

$lang['user_full_name'] 	= '全名';
$lang['user_first_name'] 	= '名';
$lang['user_last_name'] 	= '姓';
$lang['user_email'] 		= 'E-mail';
$lang['user_confirm_email'] = '确认E-mail';
$lang['user_password'] 		= '密码';
$lang['user_confirm_password'] = '密码确认';

$lang['user_level']			= '用户角色';
$lang['user_active']		= 'Active';
$lang['user_lang']			= '语言';

$lang['user_activation_code'] = '激活码';

$lang['user_reset_password_link'] = '忘记密码?';

$lang['user_activation_code_sent_notice'] = 'An email has been sent to you with your activation code.';
$lang['user_activation_by_admin_notice'] = 'Your registration is awaiting approval by an administrator.';

// -- Settings ---------------------------------------------------------------------------------------------

$lang['user_details_section'] = '姓名';
$lang['user_password_section'] = '更改密码';
$lang['user_other_settings_section'] = '其他设置';

$lang['user_settings_saved_success'] 	= 'The settings for your user account have been saved.';
$lang['user_settings_saved_error'] 		= 'An error occurred.';

// -- Buttons ----------------------------------------------------------------------------------------------

$lang['user_register_btn']		= '注册';
$lang['user_activate_btn']		= '激活';
$lang['user_reset_pass_btn'] 	= '密码重置';
$lang['user_login_btn'] 		= '登录';
$lang['user_settings_btn'] 		= '保存设置';

// -- Errors & Messages ------------------------------------------------------------------------------------

// Create
$lang['user_added_and_activated_success'] 		= 'New user has been created and activated.';
$lang['user_added_not_activated_success'] 		= 'New user has been created, the account needs to be activated.';

// Edit
$lang['user_edit_user_not_found_error'] 			= 'User not found.';
$lang['user_edit_success'] 										= 'User successfully updated.';
$lang['user_edit_error'] 											= 'Error occurred when trying to update user.';

// Activate
$lang['user_activate_success'] 								= '%s users out of %s successfully activated.';
$lang['user_activate_error'] 									= 'You need to select users first.';

// Delete
$lang['user_delete_self_error'] 							= 'You cannot delete yourself!';
$lang['user_mass_delete_success'] 						= '%s users out of %s successfully deleted.';
$lang['user_mass_delete_error'] 							= 'You need to select users first.';

// Register
$lang['user_email_pass_missing'] = 'Email or password fields are not complete.';
$lang['user_email_exists'] = 'The email address you have chosen is already in use with a different user.';
$lang['user_register_reasons'] = 'Join up to access special areas normally restricted. This means your settings will be remembered, more content and less ads.';


// Activation
$lang['user_activation_incorrect']   = 'Activation failed. Please check your details and make sure CAPS LOCK is not on.';
$lang['user_activated_message']   = 'Your account has been activated, you can now log in to your account.';


// Login
$lang['user_already_logged_in'] = 'You are already logged in. Please logout before trying again.';
$lang['user_login_incorrect'] = 'E-mail or password do not match. Please check your login and make sure CAPS LOCK is not on.';
$lang['user_inactive']   = 'The account you are trying to access is currently inactive.<br />Check your e-mail for instructions on how to activate your account - <em>it may be in the junk folder</em>.';


// Logged Out
$lang['user_logged_out']   = 'You have been logged out.';


// Forgot Pass
$lang['user_forgot_incorrect']   = "No account was found with these details.";

$lang['user_password_reset_message']   = "Your password has been reset. You should recieve the email within the next 2 hours. If you don't, it might have gone into your junk mail by accident.";

// Emails ----------------------------------------------------------------------------------------------------

// Activation
$lang['user_activation_email_subject'] = 'Activation Required';
$lang['user_activation_email_body'] = 'Thank you for activting yout account with %s. To log in to the site, please visit the link below:';


$lang['user_activated_email_subject'] = 'Activation Complete';
$lang['user_activated_email_content_line1'] = 'Thank you for registering at %s. Before we can activate your account, please complete the registration process by clicking on the following link:';
$lang['user_activated_email_content_line2'] = 'In case your email program does not recognize the above link as, please direct your browser to the following URL and enter the activation code:';

// Reset Pass
$lang['user_reset_pass_email_subject'] = 'Password Reset';
$lang['user_reset_pass_email_body'] = 'Your password at %s has been reset. If you did not request this change, please email us at %s and we will resolve the situation.';

?>