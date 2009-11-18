<div style="float:left;height:40px;padding-left:10px;">
    
</div>

 <div class="float-right" style="padding:0.5em;text-align:right">
     <table>
     <tr> <td><?=image("icons/contact.gif","_theme_");?></td><td><span style="color:black;">13601834122</span></td><td><?=image("icons/c_chat.gif");?></td><td><span style="color:black;"><a href="http://spreadsheets.google.com/viewform?formkey=dGdQUmZMZ1p6VzJ2VGxJWURnV05FcHc6MA">免费试听</a></span></td><td><? if($this->user_lib->logged_in()): ?>
				<?= sprintf(lang('logged_in_welcome'), $user->first_name.' '.$user->last_name );?> <a href="<?=site_url('users/logout');?>"><?= lang('logout_label');?></a>

				<? if($this->settings->item('enable_profiles')): ?>
					| <?=anchor('edit-profile', lang('edit_profile_label')); ?>
				<? endif; ?>

				| <?=anchor('edit-settings', lang('settings_label')); ?>

				<? if( $this->user_lib->check_role('admin') ): ?>
					 | <?=anchor('admin', lang('cp_title'), 'target="_blank"'); ?>
				<? endif; ?>
                                <div style="position:fixed !important;position:absolute;top:38px;right:30px;"><a href="http://spreadsheets.google.com/viewform?formkey=dGdQUmZMZ1p6VzJ2VGxJWURnV05FcHc6MA"><?=image("adv/freetry.gif","",array('style'=>'width:115px;'));?></a></div>

			<? else: ?>
				<?=anchor('users/login', lang('user_login_btn')); ?> | <?=anchor('register', lang('user_register_btn')); ?>
			<?endif; ?></td>
                       </tr>
    </table>
</div>


