<div class="platforms form">
<?php echo $this->Form->create('Platform'); ?>
    <fieldset>
        <legend><?php echo __('Edit Platform'); ?></legend>
    <?php
        echo $this->Form->input('id');
        echo $this->Form->input('name');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Platform.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Platform.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Platforms'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Challenges'), array('controller' => 'challenges', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Challenge'), array('controller' => 'challenges', 'action' => 'add')); ?> </li>
    </ul>
</div>
