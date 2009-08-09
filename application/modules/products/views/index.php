<? $this->load->helper('text'); ?>	
<h2 class="featured"><?=lang('products_title');?></h2>			
<? if ($products): ?>
	<? foreach ($products as $product) : ?>
		
		<h3><?= anchor('products/' . $product->id, $product->title); ?></h3>
                <? $img = $images[$product->id]->filename; ?>
		<a href="<?=site_url('products/' . $product->id);?>">
			<?=image('products/' . substr($img, 0, -4) . '_thumb' . substr($img, -4));?>
		</a>
                <p>
                <? if($product->category_slug): ?>
			<em><?=lang('products_category_label');?>: <?=anchor('products/category/'.$product->category_id, $product->category_title);?></em>
		<? endif; ?>
                </p>
		<p><?= word_limiter($product->description,50); ?></p>		
		<hr/>	
	<? endforeach; ?>
<? else: ?>
	<p><?=lang('products_no_products');?></p>
<? endif; ?>