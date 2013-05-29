<div class="twitterAuths view">
<h2><?php  echo __('Twitter Auth'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($twitterAuth['TwitterAuth']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consumer Key'); ?></dt>
		<dd>
			<?php echo h($twitterAuth['TwitterAuth']['consumerKey']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Consumer Secret'); ?></dt>
		<dd>
			<?php echo h($twitterAuth['TwitterAuth']['consumerSecret']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Twitter Auth'), array('action' => 'edit', $twitterAuth['TwitterAuth']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Twitter Auth'), array('action' => 'delete', $twitterAuth['TwitterAuth']['id']), null, __('Are you sure you want to delete # %s?', $twitterAuth['TwitterAuth']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Twitter Auths'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Twitter Auth'), array('action' => 'add')); ?> </li>
	</ul>
</div>
