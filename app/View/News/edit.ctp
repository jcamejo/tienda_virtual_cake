<div class="news form">
<?php echo $this->Form->create('News'); ?>
    <fieldset>
        <legend><?php echo __('Edit News'); ?></legend>
    <?php
        echo $this->Form->input('id');
        echo $this->Form->input('headline');
        echo $this->Form->input('summary');
        echo $this->Form->input('content');
        echo $this->Form->input('photoURL');
        echo $this->Form->input('moreInfoUrl');
        echo $this->Form->input('videoUrl');
        echo $this->Form->input('author');
        echo $this->Form->input('order');
        echo $this->Form->input('active');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('News.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('News.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List News'), array('action' => 'index')); ?></li>
    </ul>
</div>
