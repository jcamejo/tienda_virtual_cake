<div class="instagramAuths view">
<h2><?php  echo __('Instagram Auth'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($instagramAuth['InstagramAuth']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Name'); ?></dt>
		<dd>
			<?php echo h($instagramAuth['InstagramAuth']['user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clientid'); ?></dt>
		<dd>
			<?php echo h($instagramAuth['InstagramAuth']['clientid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('AccessToken'); ?></dt>
		<dd>
			<?php echo h($instagramAuth['InstagramAuth']['accessToken']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Instagram Auth'), array('action' => 'edit', $instagramAuth['InstagramAuth']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Instagram Auth'), array('action' => 'delete', $instagramAuth['InstagramAuth']['id']), null, __('Are you sure you want to delete # %s?', $instagramAuth['InstagramAuth']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Instagram Auths'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instagram Auth'), array('action' => 'add')); ?> </li>
	</ul>
</div>
