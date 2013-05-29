<div class="sponsors form">
<?php echo $this->Form->create('Sponsor'); ?>
    <fieldset>
        <legend><?php echo __('Add Sponsor'); ?></legend>
    <?php
        echo $this->Form->input('name');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List Sponsors'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Article Sponsors'), array('controller' => 'article_sponsors', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Article Sponsor'), array('controller' => 'article_sponsors', 'action' => 'add')); ?> </li>
    </ul>
</div>
