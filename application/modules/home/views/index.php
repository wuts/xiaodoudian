<h2><?=lang("home_title"); ?></h2>

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
        <? foreach($photos as $photo): ?>
          <?=image('galleries/' . $photo->gallery_slug . '/' . substr($photo->filename, 0, -4) . '_thumb' . substr($photo->filename, -4), '', array('title'=>$photo->description,'style'=>"width:200px"));?>
        <? endforeach; ?>
    <? else: ?>
    <? endif; ?>
</div>

