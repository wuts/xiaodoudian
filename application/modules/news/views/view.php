<?php $this->load->helper('typography'); ?>
<!-- News module -->
<div id="left-sidebar" class="width-quater float-left">

            <div id="recent-posts">
		<h4><?=lang('news_latest_posts_label');?></h4>
		<?= $this->news_m->getNewsHome(); ?>
	    </div>
</div>
<div class="float-right width-three-quaters padding-top-dbl">
	<!-- Module heading -->
	<div class="module_heading">
		<h3><?php echo $article->title; ?></h3>
		<?php if($article->category_slug): ?>
			<p><?php echo lang('news_posted_label'); ?> <?php echo anchor('news/category/'.$article->category_slug, $article->category_title); ?> <?php echo lang('news_date_at'); ?> <?php echo date('M d, Y', $article->created_on); ?></p>
		<?php else: ?>
			<p><?php echo lang('news_posted_label_alt'); ?> <?php echo date('M d, Y', $article->created_on); ?></p>
		<?php endif; ?>
	</div>
	<!-- Module body -->
	<div class="module_body">
		<?php echo stripslashes($article->body); ?>
	</div>
	<!-- Module bottom -->
	<div class="module_bottom">
		<?php
		if( $this->settings->item('enable_social_bookmarks'))
		{
			echo $this->load->view('fragments/social_bookmarking/toolbar', array('bookmark' => array('title' => $article->title)));
		}		
		?>
	</div>
        <!-- Comments module -->
        <div class="module comments_module">
	<!-- Module heading -->
	<div class="module_heading">
		<h3><?php echo lang('news_comments_title');?></h3>
	</div>
	<!-- Module body -->
	<div class="module_body">
		<?php echo $this->load->module_view('comments', 'comments', array('comments' => $this->comments_m->getComments(array('module' => $this->module, 'module_id' => $article->id, 'is_active' => 1)))); ?>
	</div>
	<!-- Module bottom -->
	<div class="module_bottom">
		<h3><?php echo lang('news_your_comments_label');?></h3>
		<?php echo $this->load->module_view('comments', 'form', array('module'=>$this->module, 'id' => $article->id)); ?>
	</div>
</div>
</div>


