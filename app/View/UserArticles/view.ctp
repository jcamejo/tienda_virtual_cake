<div class="userArticles view">
<h2><?php  echo __('User Article'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userArticle['UserArticle']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userArticle['User']['first_name'], array('controller' => 'users', 'action' => 'view', $userArticle['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Article'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userArticle['Article']['name'], array('controller' => 'articles', 'action' => 'view', $userArticle['Article']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Purchase Date'); ?></dt>
		<dd>
			<?php echo h($userArticle['UserArticle']['purchase_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Request Code'); ?></dt>
		<dd>
			<?php echo h($userArticle['UserArticle']['request_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($userArticle['UserArticle']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Delivery Date'); ?></dt>
		<dd>
			<?php echo h($userArticle['UserArticle']['delivery_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Article'), array('action' => 'edit', $userArticle['UserArticle']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Article'), array('action' => 'delete', $userArticle['UserArticle']['id']), null, __('Are you sure you want to delete # %s?', $userArticle['UserArticle']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Articles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Article'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
	</ul>
</div>
