<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('join_date');
		echo $this->Form->input('facebookid');
		echo $this->Form->input('twitterid');
		echo $this->Form->input('first_name');
		echo $this->Form->input('middle_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('gender');
		echo $this->Form->input('birthday');
		echo $this->Form->input('email');
		echo $this->Form->input('phone');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List User Articles'), array('controller' => 'user_articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Article'), array('controller' => 'user_articles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Challenges'), array('controller' => 'user_challenges', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Challenge'), array('controller' => 'user_challenges', 'action' => 'add')); ?> </li>
	</ul>
</div>
