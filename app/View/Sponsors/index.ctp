<div class="sponsors index">
    <h2><?php echo __('Sponsors'); ?></h2>
    <table cellpadding="0" cellspacing="0">
    <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('name'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
    </tr>
    <?php foreach ($sponsors as $sponsor): ?>
    <tr>
        <td><?php echo h($sponsor['Sponsor']['id']); ?>&nbsp;</td>
        <td><?php echo h($sponsor['Sponsor']['name']); ?>&nbsp;</td>
        <td class="actions">
            <?php echo $this->Html->link(__('View'), array('action' => 'view', $sponsor['Sponsor']['id'])); ?>
            <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sponsor['Sponsor']['id'])); ?>
            <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sponsor['Sponsor']['id']), null, __('Are you sure you want to delete # %s?', $sponsor['Sponsor']['id'])); ?>
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
        <li><?php echo $this->Html->link(__('Nuevo Patrocinante'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('Listar articulos por patrocinante'), array('controller' => 'article_sponsors', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Asignar Patrocinante a articulos'), array('controller' => 'article_sponsors', 'action' => 'add')); ?> </li>
    </ul>
</div>
