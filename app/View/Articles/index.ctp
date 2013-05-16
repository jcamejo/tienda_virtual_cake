<div class="articles index">
	<h2><?php echo __('Articles'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('date_created'); ?></th>
			<th><?php echo $this->Paginator->sort('code'); ?></th>
			<th><?php echo $this->Paginator->sort('image_url'); ?></th>
			<th><?php echo $this->Paginator->sort('thumb_url'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('cost'); ?></th>
			<th><?php echo $this->Paginator->sort('stock'); ?></th>
			<th><?php echo $this->Paginator->sort('date_updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($articles as $article): ?>
	<tr>
		<td><?php echo h($article['Article']['id']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['name']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['date_created']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['code']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['image_url']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['thumb_url']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['description']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['cost']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['stock']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['date_updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $article['Article']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $article['Article']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $article['Article']['id']), null, __('Are you sure you want to delete # %s?', $article['Article']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nuevo Articulo'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Articulos por Usuario'), array('controller' => 'user_articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Articulos por Tag'), array('controller' => 'article_tags', 'action' => 'index')); ?> </li>
	</ul>
</div>
