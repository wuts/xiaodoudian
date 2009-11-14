<h4><?=lang('news_subscripe_to_rss_label');?></h4>
<div class="spacer-left-dbl">	
	<img src="<?= image_path('icons/rss-14x14.png'); ?>" class="float-left spacer-right" />
	<img alt="订阅到鲜果" src="http://img.feedsky.com/images/icon_subshot02_xianguo.gif" border="0">
        <a href="http://www.zhuaxia.com/add_channel.php?url=http://feed.paranimage.com"><img alt="订阅到抓虾" src="http://img.feedsky.com/images/icon_subshot02_zhuaxia.gif" border="0"></a><a href="http://www.netvibes.com/subscribe.php?url=http://feed.paranimage.com"><img alt="netvibes" src="http://img.feedsky.com/images/icon_subshot02_netvibes.gif" border="0"></a><a href="http://fusion.google.com/add?feedurl=http://feed.paranimage.com"><img alt="google reader" src="http://img.feedsky.com/images/icon_subshot02_google.gif" border="0"></a><a href="http://add.my.yahoo.com/rss?url=http://feed.paranimage.com"><img alt="my yahoo" src="http://img.feedsky.com/images/icon_subshot02_yahoo.gif" border="0"></a><a href="http://www.rojo.com/add-subscription?resource=http://feed.paranimage.com"><img alt="Rojo" src="http://img.feedsky.com/images/icon_subshot02_rojo.gif" border="0"></a><a href="http://www.newsgator.com/ngs/subscriber/subfext.aspx?url=http://feed.paranimage.com"><img alt="Newsgator" src="http://img.feedsky.com/images/icon_subshot02_newsgator.gif" border="0"></a><a href="http://www.bloglines.com/sub/http://feed.paranimage.com"><img alt="bloglines" src="http://img.feedsky.com/images/icon_subshot02_bloglines.gif" border="0"></a><a href="http://reader.youdao.com/b.do?keyfrom=feedsky&amp;url=http://feed.paranimage.com"><img alt="订阅到有道" src="http://img.feedsky.com/images/icon_subshot02_youdao.gif" border="0"></a><a href="http://mail.qq.com/cgi-bin/feed?u=http://feed.paranimage.com"><img alt="订阅到QQ邮箱" src="http://img.feedsky.com/images/icon_subshot02_qq.gif" border="0">
	<a href="<?=site_url('news/rss/all|rss'); ?>"><strong><?=lang('news_all_articles_label');?></strong><br /></a>	
	<? if(isset($category) && is_object($category)): ?>	
		<img src="<?= image_path('icons/rss-14x14.png'); ?>" class="clear-both float-left spacer-right" />	
		<a href="<?=site_url('news/rss/'.$category->slug.'|rss'); ?>"><strong><?=$category->title;?> <?=lang('news_articles_of_category_suffix');?></strong></a>
	<? endif;?>	
</div>

<p class="clear-both"><?=lang('news_subscripe_to_rss_desc');?></p>