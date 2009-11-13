<div class="width-quater float-left leftColumn">
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
			<div id="recent-posts">
				<h3><?=lang('news_latest_posts_label');?></h3>
				<?= $this->news_m->getNewsHome(); ?>
			</div>

	    </div>
<div class="float-left width-half padding-top-dbl">
	<? if (!empty($news)): ?>	
		<? foreach ($news as $article): ?>
                       
                       <h4><?=  anchor('news/' .date('Y/m', $article->created_on) .'/'. $article->slug, $article->title); ?></h4>

                        <div style="padding-left:10px;color:teal;">
				<em><?=lang('news_posted_label');?>: <?= date('Y-m-d', $article->created_on); ?></em>&nbsp;
                                <em><?= $article->click_count; ?><?=lang('news_click_count_label');?></em>&nbsp;
				<? if($article->category_slug): ?>
					<em><?=lang('news_category_label');?>: <?=anchor('news/category/'.$article->category_slug, $article->category_title);?></em>
				<? endif; ?>
			</div>
			<p><?= nl2br($article->intro) ?> <?= anchor('news/' .date('Y/m', $article->created_on) .'/'. $article->slug, lang('news_read_more_label'))?></p>

			<hr/>
			
		<? endforeach; ?>		
		<p><?=$pagination['links']; ?></p>		
	<? else: ?>
		<p><?=lang('news_currently_no_articles');?></p>
	<? endif; ?>
</div>

<div class="float-right width-quater">
	<? $this->load->view('fragments/rss_box') ?>	
	<hr />	
	<? $this->load->view('fragments/archive_box') ?>	
</div>