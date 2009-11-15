
<script type="text/javascript">
    $(document).ready(function(){
        $('#left-sidebar').corner("round 10px");
        $('ul.photos-list-intro li').corner("round 10px");
    ;})
</script>
<div id="left-sidebar" class="width-quater float-left">
   <h3><?=lang('gal_catagories_label');?></h3>
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


<div class="float-right width-three-quaters">
    <h3><?= $gallery->title; ?></h3>
    
<hr />
<? // Show photos in this gallery ?>
<? if(!empty($photos)): ?>

      <ul class="photos-list-intro">
        <? foreach($photos as $photo): ?>
          <li>
          <a href="<?= image_path('galleries/'.$photo->gallery_slug .'/' . $photo->filename); ?>" title="<?=$photo->description;?>" rel="modal"><?=image('galleries/' . $photo->gallery_slug . '/' . substr($photo->filename, 0, -4) . '_thumb' . substr($photo->filename, -4), '', array('title'=>$photo->description));?></a>

         <dl><dt class="float-left width-third"><?=mb_substr($photo->description,0,80,'UTF-8'); ?></dt><dt class="float-right width-third"><?=mb_substr($photo->description,80,80,'UTF-8'); ?><?=anchor('galleries/photo/'.$photo->id,'全文阅读');?></dt></dl>

          </li>
        <? endforeach; ?>
     </ul>
					
		<h3><?=lang('gal_comments_title');?></h3>
		
		<fieldset class="alternative float-left width-half">
			<legend><?=lang('gal_other_comments_label');?></legend>
			<?= $this->load->module_view('comments', 'comments', array('comments' => $this->comments_m->getComments(array('module' => $this->module, 'module_id' => $gallery->id, 'is_active' => 1)))); ?>
		</fieldset>
										
		<fieldset class="float-right width-half">
			<legend><?=lang('gal_your_comments_label');?></legend>
			<?= $this->load->module_view('comments', 'form', array('module'=>$this->module, 'id' => $gallery->id)); ?> 
		</fieldset>
		
<? else: ?>
	<p><?=lang('gal_no_photos_in_gallery_error');?></p>
<? endif; ?>
</div>