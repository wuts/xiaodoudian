<div style="float:left;height:40px;padding-left:10px;">
    
</div>

 <div class="float-right" style="padding:0.5em;text-align:right">
     <table>
     <tr> <td><?=image("icons/contact.gif","_theme_");?></td><td><span style="color:black;">苗先生：13601834122</span></td><td><?=image("icons/c_chat.gif");?></td><td><span style="color:black;">在线咨询</span></td><td><? if($this->user_lib->logged_in()): ?>
				<?= sprintf(lang('logged_in_welcome'), $user->first_name.' '.$user->last_name );?> <a href="<?=site_url('users/logout');?>"><?= lang('logout_label');?></a>

				<? if($this->settings->item('enable_profiles')): ?>
					| <?=anchor('edit-profile', lang('edit_profile_label')); ?>
				<? endif; ?>

				| <?=anchor('edit-settings', lang('settings_label')); ?>

				<? if( $this->user_lib->check_role('admin') ): ?>
					 | <?=anchor('admin', lang('cp_title'), 'target="_blank"'); ?>
				<? endif; ?>

			<? else: ?>
				<?=anchor('users/login', lang('user_login_btn')); ?> | <?=anchor('register', lang('user_register_btn')); ?>
			<?endif; ?></td>
                       </tr>
    </table>
</div>


