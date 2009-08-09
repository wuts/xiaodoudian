<div id="footer-wrap">
	<div id="footer-content">	
		<div class="col float-left space-sep">
			<h3>友情链接</h3>
			<ul class="col-list">				
				<li><a href="http://www.cssmania.com/">淘宝小店 - <span>本站的淘宝小店</span></a></li>
				<li><a href="http://www.alistapart.com/">迪斯尼 - <span>娱乐王国</span></a></li>
				<li><a href="http://www.pdphoto.org/">飞利浦 - <span>医疗、保健、照明</span></a></li>
				<li><a href="http://www.freephotos.se/">好孩子 - <span>育儿网</span></a></li>
				<li><a href="http://www.fotolia.com/partner/114283">旺旺论坛 - <span>知名育儿网站论坛</span></a></li>
			</ul>
		</div>

		<div class="col float-left">
			<h3>广告合作</h3>
			<p>
			<strong>我们的优势</strong> <br />
			 <a href="index.html">Read more...</a>
			</p>
			
			<ul class="col-list">				
				<li><a href="index.html">广告刊例</a></li>
				<li><a href="index.html"></a>厂商广告</li>
				<li><a href="index.html"></a></li>
			</ul>
		</div>		

		<div class="col2 float-right">
			<h3>关于我们</h3>
						
			<p>
			<a href="http://getfirefox.com/"><img src="<?php echo base_url(); ?>application/themes/freshmedia/images/thumb.jpg" width="40" height="40" alt="firefox" class="float-left" /></a>
			我们致力于营造温馨的三口之家的家庭氛围，将生活中的点滴心得、欣喜与大家分享。</p>
			   <p>欢迎随时<a href="http://www.xiaodoudian.com/contact">联系我们</a></p>
			<p>&copy; copyright <?php echo date('Y'); ?> <strong><?php echo $this->settings->item('site_name'); ?></strong><br /> 
			Powered by: <a href="http://www.pyrocms.com/" title="PyroCMS">PyroCMS</a> &nbsp; &nbsp;Design by: <a href="index.html">styleshout</a><br />
			Valid <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://validator.w3.org/check/referer">XHTML</a>
			</p>
			
			<p>
			<?php if(!empty($navigation['footer'])): 
				$last_link = array_pop($navigation['footer']);
			
				foreach($navigation['footer'] as $nav_link): ?>
					<?php echo anchor($nav_link->url, $nav_link->title); ?> | 
				<?php endforeach;
			
				anchor($last_link->url, $last_link->title);
			endif; ?>
			</p>

		</div>
	</div>
</div>
<div class="clearer"></div>
<?php // Google Tracker ?>
<?php if($this->settings->item('google_analytic')): ?>
	<?php $this->load->view('fragments/google_analytic'); ?>
<?php endif; ?>