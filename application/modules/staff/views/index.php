<h2><?=lang('staff_train_teachers_title');?></h2>
<div class="width-quater float-left leftColumn">
  <h3><?=lang('staff_train_teachers_title');?></h3>
</div>
<div class="float-left width-three-quaters">
<? if ($staffs): ?>
	<? foreach ($staffs as $staff): ?>
		<div class="staffHolder">
			<h3><?= anchor('staff/' . $staff->slug, $staff->name); ?></h3>
			<?= anchor('staff/' . $staff->slug, image('staff/' . $staff->filename, NULL, array('style'=>'width:15em')), array('title'=>$staff->name)); ?>
			<p>
				<strong><?= $staff->position; ?></strong><br/>
				<?= word_limiter($staff->body, 50); ?>
			</p>
		</div>
	<? endforeach; ?>
<? else: ?>
	<p><?= lang('staff_no_members_available');?></p>
<? endif; ?>
</div>