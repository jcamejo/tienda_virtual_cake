<div class="userChallenges form">
<?php echo $this->Form->create('UserChallenge'); ?>
    <fieldset>
        <legend><?php echo __('Add User Challenge'); ?></legend>
    <?php
        echo $this->Form->input('user_id');
        echo $this->Form->input('challenge_id');
        echo $this->Form->input('dateCompleted');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List User Challenges'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Challenges'), array('controller' => 'challenges', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Challenge'), array('controller' => 'challenges', 'action' => 'add')); ?> </li>
    </ul>
</div>
