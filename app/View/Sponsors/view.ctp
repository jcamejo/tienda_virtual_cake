<div class="sponsors view">
<h2><?php  echo __('Sponsor'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($sponsor['Sponsor']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($sponsor['Sponsor']['name']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Sponsor'), array('action' => 'edit', $sponsor['Sponsor']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Sponsor'), array('action' => 'delete', $sponsor['Sponsor']['id']), null, __('Are you sure you want to delete # %s?', $sponsor['Sponsor']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Sponsors'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Sponsor'), array('action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Article Sponsors'), array('controller' => 'article_sponsors', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Article Sponsor'), array('controller' => 'article_sponsors', 'action' => 'add')); ?> </li>
    </ul>
</div>
<div class="related">
    <h3><?php echo __('Related Article Sponsors'); ?></h3>
    <?php if (!empty($sponsor['ArticleSponsor'])): ?>
    <table cellpadding = "0" cellspacing = "0">
    <tr>
        <th><?php echo __('Id'); ?></th>
        <th><?php echo __('Article'); ?></th>
        <th><?php echo __('Sponsor'); ?></th>
        <th><?php echo __('Beneficiary'); ?></th>
        <th class="actions"><?php echo __('Actions'); ?></th>
    </tr>
    <?php
        $i = 0;
        foreach ($sponsor['ArticleSponsor'] as $articleSponsor): ?>
        <tr>
            <td><?php echo $articleSponsor['id']; ?></td>
            <td><?php echo $articleSponsor['article_id']; ?></td>
            <td><?php echo $articleSponsor['sponsor_id']; ?></td>
            <td><?php echo $articleSponsor['beneficiary']; ?></td>
            <td class="actions">
                <?php echo $this->Html->link(__('View'), array('controller' => 'article_sponsors', 'action' => 'view', $articleSponsor['id'])); ?>
                <?php echo $this->Html->link(__('Edit'), array('controller' => 'article_sponsors', 'action' => 'edit', $articleSponsor['id'])); ?>
                <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'article_sponsors', 'action' => 'delete', $articleSponsor['id']), null, __('Are you sure you want to delete # %s?', $articleSponsor['id'])); ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </table>
<?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Article Sponsor'), array('controller' => 'article_sponsors', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>
