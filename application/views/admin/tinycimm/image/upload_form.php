<iframe id="hidden_iframe" name="hidden_iframe" src="javascript:false" style="display:none"></iframe>
<fieldset>
	<legend>图片上传</legend>
	<div id="fileuploader">

		<form method="post" target="hidden_iframe" enctype="multipart/form-data" action="<?=$this->config->item('tinycimm_image_controller');?>upload" id="uploadform" name="uploadform">
			<table border="0" cellpadding="4" cellspacing="2">
			<tbody>
				<tr>
					<td>允许的文件类型</td>
					<td colspan="3" id="allowedtypes"><?=str_replace('|', ', ', $upload_config['allowed_types']);?></td>
				</tr>
				<tr>
					<td valign="top">选择文件/s</td>
					<td colspan="3">
						<input type="file" id="fileupload" name="fileupload" class="fileupload" />
					</td>
				</tr>
				<tr>
					<td>远程目录</td>
					<td colspan="3">
						<div id="folder-select-list">
							<?=$this->tinycimm->get_folders('select');?>
						</div>
					</td>
				</tr>
				<tr>
					<td>限制尺寸</td>
					<td class="constrain-dimensions">
						<input type="radio" name="adjust_size" id="upload-adjust-size-y" value="1" checked="checked" onclick="document.getElementById('con_dimensions').style.display='block';" /> 
						<label for="upload-adjust-size-y">是</label>
						<input type="radio" name="adjust_size" id="upload-adjust-size-n" value="0" onclick="document.getElementById('con_dimensions').style.display='none';" /> 
						<label for="upload-adjust-size-n">否</label>
					</td>
					<td>&nbsp;</td>
					<td class="constrain-demensions-values">
						<div id="con_dimensions">
							<input type="text" name="max_x" value="640" /> x
							<input type="text" name="max_y" value="480" /> px
						</div>
					</td>
				</tr>
				<tr>
					<td>质量</td>
					<td colspan="3">
						<input type="text" name="image_quality" class="image-quality" value="90" />%
					</td>
				</tr>
				<tr>
					<td colspan="4">
						<input type="submit" class="button" id="submit-upload" name="submit_upload" value="上传" />
					</td>
				</tr>
			</tbody>
			</table>
		</form>
	</div>
</fieldset>
<script type="text/javascript">
document.getElementById('fileupload').multiFileUpload();
</script>
