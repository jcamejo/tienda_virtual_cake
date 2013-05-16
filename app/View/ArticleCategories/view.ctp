<div class="articleCategories view">
<h2><?php  echo __('Article Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($articleCategory['ArticleCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Article'); ?></dt>
		<dd>
			<?php echo $this->Html->link($articleCategory['Article']['name'], array('controller' => 'articles', 'action' => 'view', $articleCategory['Article']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($articleCategory['Category']['name'], array('controller' => 'categories', 'action' => 'view', $articleCategory['Category']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Article Category'), array('action' => 'edit', $articleCategory['ArticleCategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Article Category'), array('action' => 'delete', $articleCategory['ArticleCategory']['id']), null, __('Are you sure you want to delete # %s?', $articleCategory['ArticleCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Article Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
