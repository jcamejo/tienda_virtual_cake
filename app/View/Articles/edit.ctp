<div class="articles form">
<?php echo $this->Form->create('Article'); ?>
    <fieldset>
        <legend><?php echo __('Edit Article'); ?></legend>
    <?php
        echo $this->Form->input('id');
        echo $this->Form->input('name');
        echo $this->Form->input('code');
        echo $this->Form->input('imageURL');
        echo $this->Form->input('thumbURL');
        echo $this->Form->input('description');
        echo $this->Form->input('cost');
        echo $this->Form->input('stock');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Article.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Article.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Articles'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List User Articles'), array('controller' => 'user_articles', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New User Article'), array('controller' => 'user_articles', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Article Tags'), array('controller' => 'article_tags', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Article Tag'), array('controller' => 'article_tags', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Article Categories'), array('controller' => 'article_categories', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Article Category'), array('controller' => 'article_categories', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Article Sponsors'), array('controller' => 'article_sponsors', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Article Sponsor'), array('controller' => 'article_sponsors', 'action' => 'add')); ?> </li>
    </ul>
</div>
