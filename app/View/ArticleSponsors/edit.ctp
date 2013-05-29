<div class="articleSponsors form">
<?php echo $this->Form->create('ArticleSponsor'); ?>
    <fieldset>
        <legend><?php echo __('Edit Article Sponsor'); ?></legend>
    <?php
        echo $this->Form->input('id');
        echo $this->Form->input('article_id');
        echo $this->Form->input('sponsor_id');
        echo $this->Form->input('beneficiary');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ArticleSponsor.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ArticleSponsor.id'))); ?></li>
        <li><?php echo $this->Html->link(__('List Article Sponsors'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Sponsors'), array('controller' => 'sponsors', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Sponsor'), array('controller' => 'sponsors', 'action' => 'add')); ?> </li>
    </ul>
</div>
