<div class="userChallenges view">
<h2><?php  echo __('User Challenge'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userChallenge['UserChallenge']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userChallenge['User']['facebookid'], array('controller' => 'users', 'action' => 'view', $userChallenge['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Challenge'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userChallenge['Challenge']['friendly_name'], array('controller' => 'challenges', 'action' => 'view', $userChallenge['Challenge']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Completed'); ?></dt>
		<dd>
			<?php echo h($userChallenge['UserChallenge']['date_completed']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Challenge'), array('action' => 'edit', $userChallenge['UserChallenge']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Challenge'), array('action' => 'delete', $userChallenge['UserChallenge']['id']), null, __('Are you sure you want to delete # %s?', $userChallenge['UserChallenge']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Challenges'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Challenge'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Challenges'), array('controller' => 'challenges', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Challenge'), array('controller' => 'challenges', 'action' => 'add')); ?> </li>
	</ul>
</div>
