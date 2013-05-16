<div class="articleTags view">
<h2><?php  echo __('Article Tag'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($articleTag['ArticleTag']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Article'); ?></dt>
		<dd>
			<?php echo $this->Html->link($articleTag['Article']['name'], array('controller' => 'articles', 'action' => 'view', $articleTag['Article']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tag'); ?></dt>
		<dd>
			<?php echo $this->Html->link($articleTag['Tag']['name'], array('controller' => 'tags', 'action' => 'view', $articleTag['Tag']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Article Tag'), array('action' => 'edit', $articleTag['ArticleTag']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Article Tag'), array('action' => 'delete', $articleTag['ArticleTag']['id']), null, __('Are you sure you want to delete # %s?', $articleTag['ArticleTag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Article Tags'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article Tag'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
