<div class="news form">
<?php echo $this->Form->create('News'); ?>
    <fieldset>
        <legend><?php echo __('Add News'); ?></legend>
    <?php
        echo $this->Form->input('headline');
        echo $this->Form->input('summary');
        echo $this->Form->input('content');
        echo $this->Form->input('photoURL');
        echo $this->Form->input('moreInfoURL');
        echo $this->Form->input('videoURL');
        echo $this->Form->input('author');
        echo $this->Form->input('order');
        echo $this->Form->input('active',array('default' => '1'));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Html->link(__('List News'), array('action' => 'index')); ?></li>
    </ul>
</div>
