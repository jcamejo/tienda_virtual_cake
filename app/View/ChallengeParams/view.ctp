<div class="challengeParams view">
<h2><?php  echo __('Challenge Param'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($challengeParam['ChallengeParam']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Challenge'); ?></dt>
		<dd>
			<?php echo $this->Html->link($challengeParam['Challenge']['id'], array('controller' => 'challenges', 'action' => 'view', $challengeParam['Challenge']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Param Name'); ?></dt>
		<dd>
			<?php echo h($challengeParam['ChallengeParam']['param_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Param Value'); ?></dt>
		<dd>
			<?php echo h($challengeParam['ChallengeParam']['param_value']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Challenge Param'), array('action' => 'edit', $challengeParam['ChallengeParam']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Challenge Param'), array('action' => 'delete', $challengeParam['ChallengeParam']['id']), null, __('Are you sure you want to delete # %s?', $challengeParam['ChallengeParam']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Challenge Params'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Challenge Param'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Challenges'), array('controller' => 'challenges', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Challenge'), array('controller' => 'challenges', 'action' => 'add')); ?> </li>
	</ul>
</div>
