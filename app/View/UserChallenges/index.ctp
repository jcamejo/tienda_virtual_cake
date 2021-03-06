<div class="userChallenges index">
    <h2><?php echo __('User Challenges'); ?></h2>
    <table cellpadding="0" cellspacing="0">
    <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('user_id'); ?></th>
            <th><?php echo $this->Paginator->sort('challenge_id'); ?></th>
            <th><?php echo $this->Paginator->sort('dateCompleted'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
    </tr>
    <?php foreach ($userChallenges as $userChallenge): ?>
    <tr>
        <td><?php echo h($userChallenge['UserChallenge']['id']); ?>&nbsp;</td>
        <td>
            <?php echo $this->Html->link($userChallenge['User']['facebookId'], array('controller' => 'users', 'action' => 'view', $userChallenge['User']['id'])); ?>
        </td>
        <td>
            <?php echo $this->Html->link($userChallenge['Challenge']['friendlyName'], array('controller' => 'challenges', 'action' => 'view', $userChallenge['Challenge']['id'])); ?>
        </td>
        <td><?php echo h($userChallenge['UserChallenge']['dateCompleted']); ?>&nbsp;</td>
        <td class="actions">
            <?php echo $this->Html->link(__('View'), array('action' => 'view', $userChallenge['UserChallenge']['id'])); ?>
            <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $userChallenge['UserChallenge']['id'])); ?>
            <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $userChallenge['UserChallenge']['id']), null, __('Are you sure you want to delete # %s?', $userChallenge['UserChallenge']['id'])); ?>
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
        <li><?php echo $this->Html->link(__('New User Challenge'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Challenges'), array('controller' => 'challenges', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Challenge'), array('controller' => 'challenges', 'action' => 'add')); ?> </li>
    </ul>
</div>
