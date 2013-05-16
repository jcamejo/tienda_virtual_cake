<div class="challenges view">
<h2><?php  echo __('Challenge'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($challenge['Challenge']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Created'); ?></dt>
		<dd>
			<?php echo h($challenge['Challenge']['date_created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Platform'); ?></dt>
		<dd>
			<?php echo $this->Html->link($challenge['Platform']['name'], array('controller' => 'platforms', 'action' => 'view', $challenge['Platform']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Action'); ?></dt>
		<dd>
			<?php echo h($challenge['Challenge']['action']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Friendly Name'); ?></dt>
		<dd>
			<?php echo h($challenge['Challenge']['friendly_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reward'); ?></dt>
		<dd>
			<?php echo h($challenge['Challenge']['reward']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($challenge['Challenge']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Expired'); ?></dt>
		<dd>
			<?php echo h($challenge['Challenge']['date_expired']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Challenge'), array('action' => 'edit', $challenge['Challenge']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Challenge'), array('action' => 'delete', $challenge['Challenge']['id']), null, __('Are you sure you want to delete # %s?', $challenge['Challenge']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Challenges'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Challenge'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Platforms'), array('controller' => 'platforms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Platform'), array('controller' => 'platforms', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Challenges'), array('controller' => 'user_challenges', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Challenge'), array('controller' => 'user_challenges', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related User Challenges'); ?></h3>
	<?php if (!empty($challenge['UserChallenge'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Challenge Id'); ?></th>
		<th><?php echo __('Date Completed'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($challenge['UserChallenge'] as $userChallenge): ?>
		<tr>
			<td><?php echo $userChallenge['id']; ?></td>
			<td><?php echo $userChallenge['user_id']; ?></td>
			<td><?php echo $userChallenge['challenge_id']; ?></td>
			<td><?php echo $userChallenge['date_completed']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_challenges', 'action' => 'view', $userChallenge['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_challenges', 'action' => 'edit', $userChallenge['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_challenges', 'action' => 'delete', $userChallenge['id']), null, __('Are you sure you want to delete # %s?', $userChallenge['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Challenge'), array('controller' => 'user_challenges', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
