<div class="challenges form">
<?php echo $this->Form->create('Challenge'); ?>
    <fieldset>
        <legend><?php echo __('Edit Challenge'); ?></legend>
    <?php
        echo $this->Form->input('id');
        echo $this->Form->input('platform_id');
        echo $this->Form->input('action');
        echo $this->Form->input('friendlyName');
        echo $this->Form->input('reward');
        echo $this->Form->input('status' , array(
            'options' => array('ACTIVE' => 'ACTIVE', 'INACTIVE' => 'INACTIVE'),
        ));
        echo $this->Form->input('dateExpired');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Challenge.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Challenge.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Challenges'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Platforms'), array('controller' => 'platforms', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Platform'), array('controller' => 'platforms', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List User Challenges'), array('controller' => 'user_challenges', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New User Challenge'), array('controller' => 'user_challenges', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Challenge Params'), array('controller' => 'challenge_params', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Challenge Param'), array('controller' => 'challenge_params', 'action' => 'add')); ?> </li>
    </ul>
</div>
