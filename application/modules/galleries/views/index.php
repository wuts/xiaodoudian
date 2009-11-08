<h2><?=lang('gal_photo_galleries_title');?></h2>
<div class="width-quater float-left leftColumn">
   <h2><?=lang('gal_catagories_label');?></h2>
   <div id="catagories">
	<ul class="galleryHolder">
	   <? if (!empty($galleries)): ?>
		<? function gallery_row($tree, $parent, $lvl) { ?>
		<? if(isset($tree[$parent])) foreach ($tree[$parent] as $gallery): ?>
			
        <li><?=repeater('-- ', $lvl);?><?= anchor('galleries/' . $gallery->slug, $gallery->title, 'target="_blank"');?><?=$gallery->num_photos;?></li>
      <? gallery_row($tree, $gallery->id, $lvl+1) ?>
      <? endforeach; }?>
		<? gallery_row($galleries, 0, 0); ?>
      <? else: ?>
			
	<?=lang('gal_no_galleries_error');?>
			
      <? endif;?>
    </ul>
   </div>
</div>

<div class="float-left width-three-quaters">

<? if ($galleries): ?>
    <ul class="photos-list-intro">
        <? foreach($photos as $photo): ?>
          <li>              
          <a href="<?= image_path('galleries/'.$photo->gallery_slug .'/' . $photo->filename); ?>" title="<?=$photo->description;?>" rel="modal"><?=image('galleries/' . $photo->gallery_slug . '/' . substr($photo->filename, 0, -4) . '_thumb' . substr($photo->filename, -4), '', array('title'=>$photo->description));?></a>
	 
         <dl><dt class="float-left width-third"><?=mb_substr($photo->description,0,80,'UTF-8'); ?></dt><dt class="float-right width-third"><?=mb_substr($photo->description,80,80,'UTF-8'); ?><br /><?=anchor('galleries/photo/'.$photo->id,'more...');?></dt></dl>
          </li>
        <? endforeach; ?>
     </ul>
<? else: ?>
	<p><?=lang('gal_currently_no_photos_error');?></p>
<? endif; ?>
</div>