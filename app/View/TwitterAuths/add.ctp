<div class="twitterAuths form">
<?php echo $this->Form->create('TwitterAuth'); ?>
	<fieldset>
		<legend><?php echo __('Add Twitter Auth'); ?></legend>
	<?php
		echo $this->Form->input('consumerKey');
		echo $this->Form->input('consumerSecret');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Twitter Auths'), array('action' => 'index')); ?></li>
	</ul>
</div>
