<div class="news index">
	<h2><?php echo __('News'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('headline'); ?></th>
			<th><?php echo $this->Paginator->sort('summary'); ?></th>
			<th><?php echo $this->Paginator->sort('content'); ?></th>
			<th><?php echo $this->Paginator->sort('date_created'); ?></th>
			<th><?php echo $this->Paginator->sort('date_updated'); ?></th>
			<th><?php echo $this->Paginator->sort('photo_url'); ?></th>
			<th><?php echo $this->Paginator->sort('more_info_url'); ?></th>
			<th><?php echo $this->Paginator->sort('video_url'); ?></th>
			<th><?php echo $this->Paginator->sort('author'); ?></th>
			<th><?php echo $this->Paginator->sort('order'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($news as $news): ?>
	<tr>
		<td><?php echo h($news['News']['id']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['headline']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['summary']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['content']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['date_created']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['date_updated']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['photo_url']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['more_info_url']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['video_url']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['author']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['order']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['active']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $news['News']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $news['News']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $news['News']['id']), null, __('Are you sure you want to delete # %s?', $news['News']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Nueva Noticia'), array('action' => 'add')); ?></li>
	</ul>
</div>
