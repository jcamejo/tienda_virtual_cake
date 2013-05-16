<div class="challengeParams form">
<?php echo $this->Form->create('ChallengeParam'); ?>
	<fieldset>
		<legend><?php echo __('Add Challenge Param'); ?></legend>
	<?php
		echo $this->Form->input('challenge_id');
		echo $this->Form->input('param_name');
		echo $this->Form->input('param_value');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Challenge Params'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Challenges'), array('controller' => 'challenges', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Challenge'), array('controller' => 'challenges', 'action' => 'add')); ?> </li>
	</ul>
</div>
