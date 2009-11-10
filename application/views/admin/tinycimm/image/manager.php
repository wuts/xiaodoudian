<fieldset style="padding:0em 1em">
	<legend>管理图片</legend>
	<span id="loading" style="margin-top:1em;">缓存图片</span>
	<div id="image-manager-details">
		<input type="hidden" id="image-name" value="<?=$image->name;?>" />
		<div class="left" style="margin-right:20px">
			<div style="margin-top:4px;">
				<a id="image-preview-popup" href="<?=$this->config->item('tinycimm_asset_path').$image->id.$image->extension;?>" title="view larger version">
					<img id="image-preview" src="<?=$this->config->item('tinycimm_image_controller');?>get/<?=$image->id;?>/270/320" />
				</a>
			</div>
			<?php
				$image->filesize = $image->filesize/1024;
			?>
			<p>
				<?=$image->width.' x '.$image->height;?>px - <?=($image->filesize > 1024 ? round($image->filesize/1024, 2).'mb' : round($image->filesize).'kb');?>
			</p>
		</div>
		<div class="left">
			<strong>文件名:</strong>
			<p>
				<input type="text" id="image-filename" value="<?=$image->filename;?>" />
			</p>
			<strong>图片描述:</strong>
			<p id="alttext-container">
				<textarea id="image-alttext" rows="4" cols="12"><?=$image->description;?></textarea>
			</p>
			<p id="folder-select-list" style="margin-bottom:20px">
				<strong>图片目录:</strong><br/>
				<?=$this->tinycimm->get_folders('select', $image->folder_id);?>
			</p>
			<input class="button" value="Update" type="button" id="update-image" />
			or
			<select id="manager-actions">
				<option value="">选择...</option>
				<option value="delete">删除</option>
				<option value="insert">插入</option>
				<option value="download">下载</option>
			</select>
		</div>
	</div>
</fieldset>
