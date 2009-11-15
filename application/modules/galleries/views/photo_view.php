<hr />

<? // Show photos in this gallery ?>
<div class="width-three-quaters">
<? if(!empty($photo)): ?>
    <h3><?=$photo->title; ?></h3>
    <span><?php echo lang('gal_photo_posted_label_alt_label'); ?>:<?php echo date('M d, Y', $photo->updated_on); ?></span><br />
    <a href="<?= image_path('galleries/'.$photo->gallery_slug .'/' . $photo->filename); ?>" title="<?=$photo->description;?>" rel="modal"><?=image('galleries/' . $photo->gallery_slug . '/' . substr($photo->filename, 0, -4) .substr($photo->filename, -4), '', array('title'=>$photo->description,'style'=>'width:400px;'));?></a>
    <p><?=$photo->description; ?></p>
<? else: ?>
	<p><?=lang('gal_no_photo_error');?></p>
<? endif; ?>
</div>