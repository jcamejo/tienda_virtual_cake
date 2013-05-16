<div class="instagramAuths form">
<?php echo $this->Form->create('InstagramAuth'); ?>
	<fieldset>
		<legend><?php echo __('Edit Instagram Auth'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_name');
		echo $this->Form->input('clientid');
		echo $this->Form->input('accessToken');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('InstagramAuth.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('InstagramAuth.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Instagram Auths'), array('action' => 'index')); ?></li>
	</ul>
</div>
