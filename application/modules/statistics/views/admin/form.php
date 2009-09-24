<?= form_open($this->uri->uri_string()); ?>
	<?=form_hidden('user_id', $statistics->user_id); ?>
	<?=form_hidden('active', $statistics->is_active); ?>
	<div class="fieldset fieldsetBlock active tabs">	
		
		<div class="header">
			<h3><?=lang('statistics_edit_title');?></h3>
		</div>
    	
		<fieldset id="fieldset1">
			<legend><?=lang('statistics_edit_label');?></legend>
			
			<? if(!$statistics->user_id > 0): ?>
				<div class="field">
					<label for="name"><?=lang('statistics_name_label');?>:</label>
					<?=form_input('name', $statistics->name, 'class="text" maxlength="100"'); ?>
					<span class="required-icon tooltip"><?=lang('statistics_required_label');?></span>
				</div>
		
				<div class="field">
					<label for="email"><?=lang('statistics_email_label');?>:</label>
					<?=form_input('email', $statistics->email, 'class="text" maxlength="100"'); ?>
					<span class="required-icon tooltip"><?=lang('statistics_required_label');?></span>
				</div>
			<? else: ?>
				<div><?=$statistics->name;?></div>
				<div><?=$statistics->email;?></div>
			<? endif; ?>
			
			<div class="field spacer-left">
				<label for="body"><?=lang('statistics_message_label');?>:</label>
				<?=form_textarea(array('id'=>'body', 'name'=>'body', 'value' => $statistics->body, 'rows' => 5, 'class'=>'wysiwyg-simple')); ?>
				<span class="required-icon tooltip"><?=lang('statistics_required_label');?></span>
			</div>
					
		</fieldset>
				
	</div>
	<? $this->load->view('admin/fragments/table_buttons', array('buttons' => array('save', 'cancel') )); ?>
<?= form_close(); ?>