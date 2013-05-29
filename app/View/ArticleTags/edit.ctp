<div class="articleTags form">
<?php echo $this->Form->create('ArticleTag'); ?>
    <fieldset>
        <legend><?php echo __('Edit Article Tag'); ?></legend>
    <?php
        echo $this->Form->input('id');
        echo $this->Form->input('article_id');
        echo $this->Form->input('tag_id');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ArticleTag.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ArticleTag.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Article Tags'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
    </ul>
</div>
