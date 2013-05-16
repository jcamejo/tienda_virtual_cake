<div class="articleTags index">
	<h2><?php echo __('Article Tags'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('article_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tag_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($articleTags as $articleTag): ?>
	<tr>
		<td><?php echo h($articleTag['ArticleTag']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($articleTag['Article']['name'], array('controller' => 'articles', 'action' => 'view', $articleTag['Article']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($articleTag['Tag']['name'], array('controller' => 'tags', 'action' => 'view', $articleTag['Tag']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $articleTag['ArticleTag']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $articleTag['ArticleTag']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $articleTag['ArticleTag']['id']), null, __('Are you sure you want to delete # %s?', $articleTag['ArticleTag']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Asignar Tag a Articulo'), array('action' => 'add')); ?></li>
	</ul>
</div>
