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
<div class="float-left width-half">

<? if ($galleries): ?>	
	 <?=$this->galleries_m->galleryPhotos();?>
<? else: ?>
	<p><?=lang('gal_currently_no_photos_error');?></p>
<? endif; ?>
</div>