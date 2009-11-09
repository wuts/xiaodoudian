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
    <table><tr><td><?=image("icons/chat_online.jpg.png","_theme_");?></td></tr></table>
</div>
<div id="main-content" class="float-left width-three-quaters">
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

