<hr />

<? // Show photos in this gallery ?>
<div class="width-full">
<? if(!empty($photo)): ?>
	<ul class="photo">
		<li><a href="<?= image_path('galleries/'.$photo->gallery_slug .'/' . $photo->filename); ?>" title="<?=$photo->description;?>" rel="modal"><?=image('galleries/' . $photo->gallery_slug . '/' . substr($photo->filename, 0, -4) . '_thumb' . substr($photo->filename, -4), '', array('title'=>$photo->description));?></a></li>
		<li><?=$photo->description; ?></li>
	</ul>		
<? else: ?>
	<p><?=lang('gal_no_photo_error');?></p>
<? endif; ?>
</div>