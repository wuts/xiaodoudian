<hr />

<? // Show photos in this gallery ?>
<div class="width-three-quaters">
<? if(!empty($photo)): ?>
	<table>
		<tr>
                    <td><a href="<?= image_path('galleries/'.$photo->gallery_slug .'/' . $photo->filename); ?>" title="<?=$photo->description;?>" rel="modal"><?=image('galleries/' . $photo->gallery_slug . '/' . substr($photo->filename, 0, -4) . '_thumb' . substr($photo->filename, -4), '', array('title'=>$photo->description));?></a></td>
		    <td valign="bottom"><?=$photo->description; ?></td>
                </tr>
	</table>
<? else: ?>
	<p><?=lang('gal_no_photo_error');?></p>
<? endif; ?>
</div>