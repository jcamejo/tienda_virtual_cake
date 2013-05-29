<div class="sponsors form">
<?php echo $this->Form->create('Sponsor'); ?>
    <fieldset>
        <legend><?php echo __('Edit Sponsor'); ?></legend>
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

        <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Sponsor.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Sponsor.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Sponsors'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Article Sponsors'), array('controller' => 'article_sponsors', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Article Sponsor'), array('controller' => 'article_sponsors', 'action' => 'add')); ?> </li>
    </ul>
</div>
