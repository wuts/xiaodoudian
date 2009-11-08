<?= form_open('admin/galleries/update_photo/' . $this->uri->segment(4)); ?>
	<div class="fieldset fieldsetBlock active tabs">
		<div class="header">
			<h3><?=lang('gal_edit_photo_title');?></h3>
		</div>

		<div class="tabs">
			<ul class="clearfix">
				<li><a href="#fieldset1" title="Upload"><span><?=lang('gal_edit_photo_label');?></span></a></li>
			</ul>

			<!-- Page content tab -->
                        <div><input type="hidden" name="slug" id="slug" value="<?=$photo->gallery_slug;?>" /></div>
                        <div class="field"><label><?=lang('gal_photo_label');?></label><?=image('galleries/' . $photo->gallery_slug . '/' . substr($photo->filename, 0, -4) . '_thumb' . substr($photo->filename, -4), '', array('title'=>$photo->description));?></div>
			<fieldset id="fieldset1" >
				<legend><?=lang('gal_page_content_label');?></legend>

				<div class="field">
					<label><?=lang('gal_desc_label');?></label>
					<!-- <input type="text" class="text" name="description" id="description" maxlength="100" />-->
                                        <textarea cols="2" rows="2" name="description" id="description"><?=$photo->description;?></textarea>
					<span class="required-icon tooltip"><?=lang('gal_required_label');?></span>
				</div>

				<div class="spacer-left">
					<? $this->load->view('admin/fragments/table_buttons', array('buttons' => array('save', 'cancel') )); ?>
				</div>

			</fieldset>
		</div>
	</div>
<?=form_close();?>