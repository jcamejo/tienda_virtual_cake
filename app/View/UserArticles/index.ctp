<div class="userArticles index">
	<h2><?php echo __('User Articles'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('article_id'); ?></th>
			<th><?php echo $this->Paginator->sort('purchase_date'); ?></th>
			<th><?php echo $this->Paginator->sort('request_code'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('delivery_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($userArticles as $userArticle): ?>
	<tr>
		<td><?php echo h($userArticle['UserArticle']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($userArticle['User']['id'], array('controller' => 'users', 'action' => 'view', $userArticle['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($userArticle['Article']['name'], array('controller' => 'articles', 'action' => 'view', $userArticle['Article']['id'])); ?>
		</td>
		<td><?php echo h($userArticle['UserArticle']['purchase_date']); ?>&nbsp;</td>
		<td><?php echo h($userArticle['UserArticle']['request_code']); ?>&nbsp;</td>
		<td><?php echo h($userArticle['UserArticle']['status']); ?>&nbsp;</td>
		<td><?php echo h($userArticle['UserArticle']['delivery_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $userArticle['UserArticle']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $userArticle['UserArticle']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $userArticle['UserArticle']['id']), null, __('Are you sure you want to delete # %s?', $userArticle['UserArticle']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Asignar Articulo a usuario'), array('action' => 'add')); ?></li>
	</ul>
</div>