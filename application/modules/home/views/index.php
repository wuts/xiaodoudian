<script type="text/javascript">
    $(document).ready(function(){
        $('#left-sidebar').corner("round 10px")
    ;})
</script>
<div id="left-sidebar" class="width-quater float-left leftColumn">
   <h3><?=lang('home_news');?></h3>
   <? if(!empty($news)): ?>
      <ul>
        <? foreach($news as $article): ?>
          <li><?=anchor('news/'.date('Y/m',$article->created_on).'/'.$article->slug,$article->title); ?></li>
        <? endforeach; ?>
      </ul>
   <? else: ?>
   <? endif; ?>
<hr />
      <div id="hot-posts">
	<h4><?=lang('home_hot_posts_label');?></h4>
	  <?= $this->news_m->getHotNews(); ?>
       </div>
     </div>
<div id="main-content" class="float-right width-three-quaters">
    <h3><?=lang('home_works_list');?></h3>
   
    <? if(!empty($photos)): ?>
       <ul class="photos-list">
        <? foreach($photos as $photo): ?>
          <li><a href="galleries/photo/<?=$photo->id;?>" title="<?=$photo->description; ?>"><?=image('galleries/' . $photo->gallery_slug . '/' . substr($photo->filename, 0, -4) . '_thumb' . substr($photo->filename, -4), '', array('title'=>$photo->description));?> </a></li>
        <? endforeach; ?>
       </ul>
   
    <? else: ?>
    <? endif; ?>
</div>

