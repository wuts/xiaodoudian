<div style="float:left;height:40px;padding-left:10px;">
    
</div>

 <div class="float-right" style="padding:0.5em;text-align:right">
     <table>
     <tr><td><?=image("icons/contact.gif","_theme_");?></td><td><a href="http://spreadsheets.google.com/viewform?formkey=dGdQUmZMZ1p6VzJ2VGxJWURnV05FcHc6MA"><span>13601834122</span></a></td><td><?=image("icons/calendar.gif");?></td><td><span style="color:black;"><a href="http://spreadsheets.google.com/viewform?formkey=dGdQUmZMZ1p6VzJ2VGxJWURnV05FcHc6MA">免费试听</a></span> | </td>
         <td>
                         <? if($this->user_lib->logged_in()): ?>
				<a href="<?=site_url('users/logout');?>"><?= lang('logout_label');?></a>
				
				
				<? if( $this->user_lib->check_role('admin') ): ?>
					 | <?=anchor('admin', lang('cp_title'), 'target="_blank"'); ?>
				<? endif; ?>
                                

			<? else: ?>
				<?=anchor('users/login', lang('user_login_btn')); ?> | <?=anchor('register', lang('user_register_btn')); ?>
			<?endif; ?>
         </td>
       </tr>
    </table>     
     <img src="<?=image_path('bg/header-right.gif', '_theme_') ?>" alt="right slice" class="balloons" />
     
     <span class="slogan">孩子天生就是创意大师，我们要做的只是帮助他们将这种天分发扬光大，而不要任其埋没在世俗的教条中！</span>
     <div style="position:absolute !important;top:40px;right:30px;z-index:1;"><a href="http://spreadsheets.google.com/viewform?formkey=dGdQUmZMZ1p6VzJ2VGxJWURnV05FcHc6MA"><?=image("adv/free-try.png","",array('style'=>'width:200px;border:0;'));?></a></div>
    
</div>


