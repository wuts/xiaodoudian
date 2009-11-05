<hr />
<div class="width-quater float-left leftColumn">
   <div class="col-title"><?=lang('home_news');?></div>
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
<div class="float-left width-three-quaters">
    <div class="col-title"><?=lang('home_works_list');?></div>
   
    <? if(!empty($photos)): ?>
       <ul class="photos-list">
        <? foreach($photos as $photo): ?>
          <li><a href="<?=image_path('galleries/' . $photo->gallery_slug . '/' . $photo->filename);?>" rel="modal" title="<?=$photo->description; ?>"><?=image('galleries/' . $photo->gallery_slug . '/' . substr($photo->filename, 0, -4) . '_thumb' . substr($photo->filename, -4), '', array('title'=>$photo->description));?> </a></li>
        <? endforeach; ?>
       </ul>
   
    <? else: ?>
    <? endif; ?>
</div>

