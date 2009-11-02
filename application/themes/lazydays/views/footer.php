    <div class="width-half float-left">
      &copy;2008 <?=$this->settings->item('site_name'); ?> <span class="grey">|</span>
      <a href="http://www.miibeian.gov.cn/" title="沪ICP备09082525号">沪ICP备09082525号</a>
    </div>

    <div class="width-half float-right">
		<? if(!empty($navigation['footer'])): 
			$last_link = array_pop($navigation['footer']);
			
			foreach($navigation['footer'] as $nav_link): ?>
				<?=anchor($nav_link->url, $nav_link->title); ?> | 
			<? endforeach;
			
			anchor($last_link->url, $last_link->title);
		endif; ?>
    </div>
    
<? // Google Tracker ?>
<? if($this->settings->item('google_analytic')): ?>
	<? $this->load->view('fragments/google_analytic'); ?>
<? endif; ?>