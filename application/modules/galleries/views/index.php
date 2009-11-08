<div class="width-quater float-left leftColumn">
   <div class="col-title"><?=lang('gal_catagories_label');?></div>
   <div id="catagories">
	<ul class="galleryHolder">
	   <? if (!empty($galleries)): ?>
		<? function gallery_row($tree, $parent, $lvl) { ?>
		<? if(isset($tree[$parent])) foreach ($tree[$parent] as $gallery): ?>
			
        <li><?=repeater('    ', $lvl);?><?= anchor('galleries/' . $gallery->slug, $gallery->title."(".lang("gal_number_of_photo_label").$gallery->num_photos.")", 'target="_blank"');?></li>
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
<div class="col-title"><?=lang('gal_photos_list_label');?></div>
<? if ($galleries): ?>
    <ul class="photos-list-intro">
        <? foreach($photos as $photo): ?>
          <li>              

         <a href="<?= image_path('galleries/'.$photo->gallery_slug .'/' . $photo->filename); ?>" title="<?=$photo->description;?>" rel="modal"><?=image('galleries/' . $photo->gallery_slug . '/' . substr($photo->filename, 0, -4) . '_thumb' . substr($photo->filename, -4), '', array('title'=>$photo->description));?></a>
	 
         <dl><dt class="float-left width-third" style="color:white;"><span style="font-size:16px;font-weight:bold;color:#FFB323;"><?=$photo->title; ?></span><br /><?=mb_substr($photo->description,0,70,'UTF-8'); ?></dt><dt class="float-right width-third" style="color:white;"><?=mb_substr($photo->description,70,60,'UTF-8'); ?><br /><?=anchor('galleries/photo/'.$photo->id,lang('gal_more_label'), array('style'=>'height:20px;color:#FFB323;'));?></dt></dl>
          </li>
        <? endforeach; ?>
     </ul>
<? else: ?>
	<p><?=lang('gal_currently_no_photos_error');?></p>
<? endif; ?>
</div>