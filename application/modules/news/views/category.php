<script type="text/javascript">
    $(document).ready(function(){       
        $('#right-sidebar').corner("round 10px");
        $('#middle-content').corner("round 10px");
    ;})
</script>

<div id="middle-content"  class="float-left width-two-thirds">
	<? if (!empty($news)): ?>	
		<? foreach ($news as $article): ?>
			<h3><?=anchor('news/'.date('Y/m', $article->created_on).'/'.$article->slug,$article->title);?></h3>			
			<p><?=nl2br($article->intro);?> <?=anchor('news/'.date('Y/m',$article->created_on).'/'.$article->slug,lang('news_read_more_label'))?></p>
			<p><em><?=lang('news_posted_label');?>: <?= date('M d, Y', $article->created_on);?></em>&nbsp;</p>			
			<hr/>
		<? endforeach; ?>		
		<p><?=$pagination['links'];?></p>		
	<? else: ?>
		<p><?=lang('news_currently_no_articles');?></p>
	<? endif; ?>
</div>

<div id="right-sidebar" class="float-right width-quater">
	<h3><?=lang('news_catagories_label');?></h3>
                 <div id="catagories">
			<?php foreach ($this->news_m->getCategories() as $category): ?>
                             <? if(!empty($category->category_title)): ?>
			 <h4><?php echo anchor('news/category/'.$category->category_id,$category->category_title); ?></h4>
                            <? endif;?>
					  <!-- <p class="post-info">Posted in category : <?php echo anchor('news/category/'.$news->category_slug, $news->category_title);?></p> -->
					  <!-- <p><?php echo strip_tags($news->intro); ?></p> -->
			<?php endforeach ?>
	</div>
</div>