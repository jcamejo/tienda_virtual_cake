<div class="articles index">
    <h2><?php echo __('Articles'); ?></h2>
    <table cellpadding="0" cellspacing="0">
    <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('name'); ?></th>
            <th><?php echo $this->Paginator->sort('dateCreated'); ?></th>
            <th><?php echo $this->Paginator->sort('code'); ?></th>
            <th><?php echo $this->Paginator->sort('imageURL'); ?></th>
            <th><?php echo $this->Paginator->sort('thumbURL'); ?></th>
            <th><?php echo $this->Paginator->sort('description'); ?></th>
            <th><?php echo $this->Paginator->sort('cost'); ?></th>
            <th><?php echo $this->Paginator->sort('stock'); ?></th>
            <th><?php echo $this->Paginator->sort('dateUpdated'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
    </tr>
    <?php foreach ($articles as $article): ?>
    <tr>
        <td><?php echo h($article['Article']['id']); ?>&nbsp;</td>
        <td><?php echo h($article['Article']['name']); ?>&nbsp;</td>
        <td><?php echo h($article['Article']['dateCreated']); ?>&nbsp;</td>
        <td><?php echo h($article['Article']['code']); ?>&nbsp;</td>
        <td><?php echo h($article['Article']['imageURL']); ?>&nbsp;</td>
        <td><?php echo h($article['Article']['thumbURL']); ?>&nbsp;</td>
        <td><?php echo h($article['Article']['description']); ?>&nbsp;</td>
        <td><?php echo h($article['Article']['cost']); ?>&nbsp;</td>
        <td><?php echo h($article['Article']['stock']); ?>&nbsp;</td>
        <td><?php echo h($article['Article']['dateUpdated']); ?>&nbsp;</td>
        <td class="actions">
            <?php echo $this->Html->link(__('View'), array('action' => 'view', $article['Article']['id'])); ?>
            <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $article['Article']['id'])); ?>
            <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $article['Article']['id']), null, __('Are you sure you want to delete # %s?', $article['Article']['id'])); ?>
        </td>
    </tr>
<?php endforeach; ?>
    </table>
    <p>
    <?php
    echo $this->Paginator->counter(array(
    'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
    ));
    ?>  </p>
    <div class="paging">
    <?php
        echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
    ?>
    </div>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('New Article'), array('action' => 'add')); ?></li>
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
