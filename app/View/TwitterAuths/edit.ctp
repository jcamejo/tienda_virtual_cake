<div class="twitterAuths form">
<?php echo $this->Form->create('TwitterAuth'); ?>
    <fieldset>
        <legend><?php echo __('Edit Twitter Auth'); ?></legend>
    <?php
        echo $this->Form->input('id');
        echo $this->Form->input('consumerKey');
        echo $this->Form->input('consumerSecret');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TwitterAuth.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TwitterAuth.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Twitter Auths'), array('action' => 'index')); ?></li>
    </ul>
</div>
