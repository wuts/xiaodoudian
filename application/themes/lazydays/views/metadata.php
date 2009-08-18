	  <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
	 <title><?php echo $page_title;?> | <?php echo $this->settings->item('site_name'); ?></title>
          <!-- Language: <?=CURRENT_LANGUAGE ?> -->
    	<script type="text/javascript">
    	var APPPATH_URI = "<?=$this->config->item('asset_dir');?>";
    	var BASE_URI = "<?=BASE_URI;?>";
    	</script>
        
		<?= css('style.css').css('layout.css', '_theme_');?>
	
		<?= js('jquery/jquery.js'); ?>
		<?= js('facebox.js').css('facebox.css');?>
		
		<?= js('front.js'); ?>
		
	  	<? /*<link rel="stylesheet" type="text/css" href="css/print.css" media="print" /> */ ?>

    	<?=$extra_head_content; ?>