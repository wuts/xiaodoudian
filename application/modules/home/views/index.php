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
<div class="float-left width-half">
  <div class="col-title"><?=lang('home_works_list');?></div>
  
    <?=$this->galleries_m->galleryPhotos();?>
 
 
</div>

<div class="float-right width-quater">
    <div class="col-title"><?=lang('home_students');?></div>
    <ul>
    <? foreach($staffs as $staff): ?>
      <h3><?=$staff->name; ?></h3>
      <li><?=anchor('staff/'.$staff->slug,image('staff/'.$staff->filename,'',array("style"=>'width:15em')),array("title"=>$staff->name)); ?></li>
    <? endforeach; ?>
    </ul>
</div>
