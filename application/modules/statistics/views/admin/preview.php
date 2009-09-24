<p>
	<strong><?=lang('statistics_posted_label');?>:</strong> <?= date('M d, Y', $statistics->created_on); ?><br/>
	<strong><?=lang('statistics_from_label');?>:</strong> <?=$statistics->name;?>
</p>
<hr/>
<p><?=stripslashes($statistics->body);?></p>