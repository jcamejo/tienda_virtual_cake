<div class="userArticles form">
<?php echo $this->Form->create('UserArticle'); ?>
    <fieldset>
        <legend><?php echo __('Edit User Article'); ?></legend>
    <?php
        echo $this->Form->input('id');
        echo $this->Form->input('user_id');
        echo $this->Form->input('article_id');
        echo $this->Form->input('purchaseDate');
        echo $this->Form->input('requestCode');
        echo $this->Form->input('status' , array(
            'options' => array('UNPROCESSED' => 'UNPROCESSED', 'PROCESSING' => 'PROCESSING', 'READY' => 'READY', 'DELIVERED' => 'DELIVERED'),
        ));
        echo $this->Form->input('deliveryDate');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UserArticle.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('UserArticle.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List User Articles'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
    </ul>
</div>
