<? $this->load->helper('date');?>  

<? if($active_statistics): ?>
	<h3 class="float-left"><?= lang('statistics_active_label');?></h3>
	<p class="float-right">
		[ <a href="<?=site_url('admin/statistics/index');?>"><?= lang('statistics_inactive_label');?></a> ]
	</p>
<? else: ?>
	<h3 class="float-left"><?= lang('statistics_inactive_label');?></h3>
	<p class="float-right">
		[ <a href="<?=site_url('admin/statistics/active');?>"><?= lang('statistics_active_label');?></a> ]
	</p>
<? endif; ?>
    
<?= form_open('admin/statistics/delete');?>
	<?=form_hidden('redirect', $this->uri->uri_string()); ?> 
	<table border="0" class="listTable clear-both">    
		<thead>
			<tr>
				<th class="first"><div></div></th>
				<th class="width-20"><a href="#"><?=lang('comment_teaser_label');?></a></th>
				<th class="width-10"><a href="#"><?=lang('comment_author_label');?></a></th>
				<th class="width-10"><a href="#"><?=lang('comment_date_label');?></a></th>
				<th class="last width-15"><span><?=lang('comment_actions_label');?></span></th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="6">
					<div class="inner"><? $this->load->view('admin/fragments/pagination'); ?></div>
				</td>
			</tr>
		</tfoot>
		<tbody>
		<? if (!empty($statistics)): ?>
				<? foreach ($statistics as $comment): ?>
					<tr>
						<td><input type="checkbox" name="action_to[]" value="<?=$comment->id;?>" /></td>
						<td><?=character_limiter($comment->body, 30);?></td>
						<td>
							<? if($comment->user_id > 0): ?>
								<?=anchor('admin/users/edit/' . $comment->user_id, $comment->name); ?>
							<? else: ?>
								<?=$comment->name;?>
							<? endif; ?>
						</td>
						<td><?=date('M d, Y', $comment->created_on);?></td>						
						<td>
							<?= anchor('admin/statistics/preview/'. $comment->id, lang('comment_preview_label'), 'rel="modal" target="_blank"'); ?> |
							<? if($comment->is_active == 0): ?>
								<?=anchor('admin/statistics/approve/' . $comment->id, lang('comment_activate_label'));?>
							<? else: ?>
								<?=anchor('admin/statistics/unapprove/' . $comment->id, lang('comment_deactivate_label'));?>
							<? endif; ?>
							<br />
							<?= anchor('admin/statistics/edit/' . $comment->id, lang('comment_edit_label'));?> |
							<?= anchor('admin/statistics/delete/' . $comment->id, lang('comment_delete_label'), array('class'=>'confirm')); ?>
						</td>
					</tr>
			<? endforeach; ?>
		<? else: ?>
				<tr>
					<td colspan="6"><?=lang('statistics_no_statistics');?></td>
				</tr>
		<? endif; ?>
		</tbody>	
	</table>
	<? $this->load->view('admin/fragments/table_buttons', array('buttons' => array('delete') )); ?>
<?=form_close();?>