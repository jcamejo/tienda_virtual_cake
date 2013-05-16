<div class="userArticles form">
<?php echo $this->Form->create('UserArticle'); ?>
	<fieldset>
		<legend><?php echo __('Add User Article'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('article_id');
		echo $this->Form->input('purchase_date');
		echo $this->Form->input('request_code');
		echo $this->Form->input('status');
		echo $this->Form->input('delivery_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List User Articles'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
	</ul>
</div>
