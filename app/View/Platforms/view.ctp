<div class="platforms view">
<h2><?php  echo __('Platform'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($platform['Platform']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($platform['Platform']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Platform'), array('action' => 'edit', $platform['Platform']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Platform'), array('action' => 'delete', $platform['Platform']['id']), null, __('Are you sure you want to delete # %s?', $platform['Platform']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Platforms'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Platform'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Challenges'), array('controller' => 'challenges', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Challenge'), array('controller' => 'challenges', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Challenges'); ?></h3>
	<?php if (!empty($platform['Challenge'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Date Created'); ?></th>
		<th><?php echo __('Platform Id'); ?></th>
		<th><?php echo __('Action'); ?></th>
		<th><?php echo __('Friendly Name'); ?></th>
		<th><?php echo __('Reward'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Date Expired'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($platform['Challenge'] as $challenge): ?>
		<tr>
			<td><?php echo $challenge['id']; ?></td>
			<td><?php echo $challenge['date_created']; ?></td>
			<td><?php echo $challenge['platform_id']; ?></td>
			<td><?php echo $challenge['action']; ?></td>
			<td><?php echo $challenge['friendly_name']; ?></td>
			<td><?php echo $challenge['reward']; ?></td>
			<td><?php echo $challenge['status']; ?></td>
			<td><?php echo $challenge['date_expired']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'challenges', 'action' => 'view', $challenge['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'challenges', 'action' => 'edit', $challenge['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'challenges', 'action' => 'delete', $challenge['id']), null, __('Are you sure you want to delete # %s?', $challenge['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Challenge'), array('controller' => 'challenges', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
