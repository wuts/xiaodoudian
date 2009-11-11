<? if ($photos): ?> 
	<h3><?=lang('gal_manage_title');?></h3>
	<div id="photos">
		<?=form_open('admin/galleries/delete_photo');?>
			<?=form_hidden('gallery', $gallery->slug);?>
                       <table border="0" class="listTable">
                               <thead>
			<tr>
				<th class="first"><div></div></th>
				<th><a href="#"><?=lang('gal_photo_title_label');?></a></th>
				<th><a href="#"><?=lang('gal_photo_description_label');?></a></th>
                                <th><a href="#"><?=lang('gal_photo_publish_label');?>?</a></th>
				<th><a href="#"><?=lang('gal_photo_show_in_homepage_label');?>?</a></th>
				<th class="last"><span><?=lang('gal_actions_label');?></span></th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="5">
					<div class="inner"><? $this->load->view('admin/fragments/pagination'); ?></div>
				</td>
			</tr>
		</tfoot>
                <tbody>

                                <? foreach($photos as $photo): ?>
                                <tr>
                                   <td><input type="checkbox" name="action_to[]" value="<?=$photo->id?>" /></td>
                                   <td><a href="../edit_photo/<?=$photo->id; ?>"><?=image('galleries/' . $gallery->slug . '/' . substr($photo->filename, 0, -4) . '_thumb' . substr($photo->filename, -4), '', array('title'=>$photo->description,'style'=>'width:100px;'));?></a></td>
                                   <td style="width:250px;"><h3><?=$photo->title;?></h3><?=mb_substr($photo->description,0,100,'UTF-8'); ?>......</td>
                                   <td><a href="javascript:void(0);" onclick="ajax_publish(<?=$photo->id?>,<?=$photo->publish; ?>);"><?if($photo->publish): ?><?=image('icons/yes.png','_theme_');?><? else: ?><?=image('icons/no.png','_theme_');?><? endif; ?></a></td>
                                   <td><a href="javascript:void(0);" onclick="ajax_change_show_in_homepage(<?=$photo->id?>,<?=$photo->show_in_homepage; ?>);"><?if($photo->show_in_homepage): ?><?=image('icons/yes.png','_theme_');?><? else: ?><?=image('icons/no.png','_theme_');?><? endif; ?></a></td>
                                   <td><?= anchor('galleries/photo/' . $photo->id, lang('gal_view_label'), 'target="_blank"') . ' | ' .                                            
					    anchor('admin/galleries/edit_photo/' . $photo->id, lang('gal_edit_label')) . ' | ' .
					    anchor('admin/galleries/delete_photo/' . $photo->id, lang('gal_delete_label'), array('class'=>'confirm')); ?>
                                     </td>
                                </tr>
				<? endforeach; ?>
                           </tbody>
                       </table>
			<br class="clear-both" />                        
			<? $this->load->view('admin/fragments/table_buttons', array('buttons' => array('delete') )); ?>
		<?= form_close(); ?>	
	</div>
	<hr class="clear-both" />
<? endif; ?>

 <script type="text/javascript">  
     function ajax_change_show_in_homepage(id,show_in_homepage){
         jQuery.ajax({
             type:"POST",
             url:"../ajax_change_show_in_homepage",
             data:"id="+id+"&show_in_homepage="+show_in_homepage,
            success:function(result){                
                location.reload();
             }
         });
     }

     function ajax_publish(id,publish){
         jQuery.ajax({
             type:"POST",
             url:"../ajax_publish",
             data:"id="+id+"&publish="+publish,
            success:function(result){
                location.reload();
             }
         });
     }
 </script>

<?= form_open_multipart('admin/galleries/upload/' . $this->uri->segment(4)); ?>
	<div class="fieldset fieldsetBlock active tabs">		
		<div class="header">
			<h3><?=lang('gal_add_photo_title');?></h3>
		</div>
		
		<div class="tabs">
			<ul class="clearfix">
				<li><a href="#fieldset1" title="Upload"><span><?=lang('gal_upload_label');?></span></a></li>
			</ul>
			
			<!-- Page content tab -->
			<fieldset id="fieldset1" >
				<legend><?=lang('gal_page_content_label');?></legend>
                                <div class="field">
					<label><?=lang('gal_photo_title_label');?></label>
					<input type="text" class="text" name="title" id="title" />
                                        <span class="required-icon tooltip"><?=lang('gal_required_label');?></span>
				</div>
		
				<div class="field">
					<label><?=lang('gal_photo_label');?></label>
					<input type="file" class="text" name="userfile" id="userfile" />
				</div>
				
				<div class="field">
					<label><?=lang('gal_desc_label');?></label>
					<!-- <input type="text" class="text" name="description" id="description" maxlength="100" />-->
                                        <textarea cols="2" rows="2" name="description" id="description"></textarea>
					<span class="required-icon tooltip"><?=lang('gal_required_label');?></span>
				</div>

                                 <div class="field">
					<label><?=lang('gal_photo_show_in_homepage_label');?></label>
					<span><?=lang('gal_photo_no_label');?></span><input type="radio" class="text" name="show_in_homepage" id="show_in_homepage" value="0" checked="true" /><span><?=lang('gal_photo_yes_label');?></span><input type="radio" class="text" name="show_in_homepage" id="show_in_homepage" value="1" />
				</div>
				
				<div class="spacer-left">
					<? $this->load->view('admin/fragments/table_buttons', array('buttons' => array('save', 'cancel') )); ?>
				</div>
				
			</fieldset>	
		</div>	
	</div>
<?=form_close();?>