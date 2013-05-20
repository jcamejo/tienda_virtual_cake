<div class="challenges index">
	<h2><?php echo __('Challenges'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('date_created'); ?></th>
			<th><?php echo $this->Paginator->sort('platform_id'); ?></th>
			<th><?php echo $this->Paginator->sort('action'); ?></th>
			<th><?php echo $this->Paginator->sort('friendly_name'); ?></th>
			<th><?php echo $this->Paginator->sort('reward'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('date_expired'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($challenges as $challenge): ?>
	<tr>
		<td><?php echo h($challenge['Challenge']['id']); ?>&nbsp;</td>
		<td><?php echo h($challenge['Challenge']['date_created']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($challenge['Platform']['name'], array('controller' => 'platforms', 'action' => 'view', $challenge['Platform']['id'])); ?>
		</td>
		<td><?php echo h($challenge['Challenge']['action']); ?>&nbsp;</td>
		<td><?php echo h($challenge['Challenge']['friendly_name']); ?>&nbsp;</td>
		<td><?php echo h($challenge['Challenge']['reward']); ?>&nbsp;</td>
		<td><?php echo h($challenge['Challenge']['status']); ?>&nbsp;</td>
		<td><?php echo h($challenge['Challenge']['date_expired']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $challenge['Challenge']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $challenge['Challenge']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $challenge['Challenge']['id']), null, __('Are you sure you want to delete # %s?', $challenge['Challenge']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Reto'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Plataformas'), array('controller' => 'platforms', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Retos por Usuario'), array('controller' => 'user_challenges', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Parametros por Reto'), array('controller' => 'challenge_params', 'action' => 'index')); ?> </li>
	</ul>
</div>
