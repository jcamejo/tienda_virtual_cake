<div class="challenges form">
<?php echo $this->Form->create('Challenge'); ?>
	<fieldset>
		<legend><?php echo __('Add Challenge'); ?></legend>
	<?php
		echo $this->Form->input('date_created');
		echo $this->Form->input('platform_id');
		echo $this->Form->input('action');
		echo $this->Form->input('friendly_name');
		echo $this->Form->input('reward');
		echo $this->Form->input('status');
		echo $this->Form->input('date_expired');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Challenges'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Platforms'), array('controller' => 'platforms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Platform'), array('controller' => 'platforms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Challenges'), array('controller' => 'user_challenges', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Challenge'), array('controller' => 'user_challenges', 'action' => 'add')); ?> </li>
	</ul>
</div>
