<? $this->lang->module_load('statistics', 'statistics'); ?>
<? if(!empty($statistics)): ?>
	<? foreach($statistics as $statistics): ?>
	
		<div>
			<p>
				<strong><?=lang('statistics_posted_label');?>:</strong> <?= date('M d, Y', $statistics->created_on); ?><br/>
				<strong><?=lang('statistics_from_label');?>:</strong> <?=$statistics->name;?>
			</p>
			<p><?=stripslashes($statistics->body);?></p>
			<hr/>
		</div>
	<? endforeach; ?>
<? else: ?>
	<p><?=lang('statisticss_no_statisticss');?></p>
<? endif; ?>