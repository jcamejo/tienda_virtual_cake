<div class="users view">
<h2><?php  echo __('User'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($user['User']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Join Date'); ?></dt>
        <dd>
            <?php echo h($user['User']['joinDate']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('FacebookId'); ?></dt>
        <dd>
            <?php echo h($user['User']['facebookId']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Twitterid'); ?></dt>
        <dd>
            <?php echo h($user['User']['twitterId']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('First Name'); ?></dt>
        <dd>
            <?php echo h($user['User']['firstName']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Middle Name'); ?></dt>
        <dd>
            <?php echo h($user['User']['middleName']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Last Name'); ?></dt>
        <dd>
            <?php echo h($user['User']['lastName']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Gender'); ?></dt>
        <dd>
            <?php echo h($user['User']['gender']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Birthday'); ?></dt>
        <dd>
            <?php echo h($user['User']['birthday']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Email'); ?></dt>
        <dd>
            <?php echo h($user['User']['email']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Phone'); ?></dt>
        <dd>
            <?php echo h($user['User']['phone']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List User Articles'), array('controller' => 'user_articles', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New User Article'), array('controller' => 'user_articles', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List User Challenges'), array('controller' => 'user_challenges', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New User Challenge'), array('controller' => 'user_challenges', 'action' => 'add')); ?> </li>
    </ul>
</div>
<div class="related">
    <h3><?php echo __('Related User Articles'); ?></h3>
    <?php if (!empty($user['UserArticle'])): ?>
    <table cellpadding = "0" cellspacing = "0">
    <tr>
        <th><?php echo __('Id'); ?></th>
        <th><?php echo __('User Id'); ?></th>
        <th><?php echo __('Article Id'); ?></th>
        <th><?php echo __('Purchase Date'); ?></th>
        <th><?php echo __('Request Code'); ?></th>
        <th><?php echo __('Status'); ?></th>
        <th><?php echo __('Delivery Date'); ?></th>
        <th class="actions"><?php echo __('Actions'); ?></th>
    </tr>
    <?php
        $i = 0;
        foreach ($user['UserArticle'] as $userArticle): ?>
        <tr>
            <td><?php echo $userArticle['id']; ?></td>
            <td><?php echo $userArticle['user_id']; ?></td>
            <td><?php echo $userArticle['article_id']; ?></td>
            <td><?php echo $userArticle['purchaseDate']; ?></td>
            <td><?php echo $userArticle['requestCode']; ?></td>
            <td><?php echo $userArticle['status']; ?></td>
            <td><?php echo $userArticle['deliveryDate']; ?></td>
            <td class="actions">
                <?php echo $this->Html->link(__('View'), array('controller' => 'user_articles', 'action' => 'view', $userArticle['id'])); ?>
                <?php echo $this->Html->link(__('Edit'), array('controller' => 'user_articles', 'action' => 'edit', $userArticle['id'])); ?>
                <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_articles', 'action' => 'delete', $userArticle['id']), null, __('Are you sure you want to delete # %s?', $userArticle['id'])); ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </table>
<?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New User Article'), array('controller' => 'user_articles', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>
<div class="related">
    <h3><?php echo __('Related User Challenges'); ?></h3>
    <?php if (!empty($user['UserChallenge'])): ?>
    <table cellpadding = "0" cellspacing = "0">
    <tr>
        <th><?php echo __('Id'); ?></th>
        <th><?php echo __('User Id'); ?></th>
        <th><?php echo __('Challenge Id'); ?></th>
        <th><?php echo __('Date Completed'); ?></th>
        <th class="actions"><?php echo __('Actions'); ?></th>
    </tr>
    <?php
        $i = 0;
        foreach ($user['UserChallenge'] as $userChallenge): ?>
        <tr>
            <td><?php echo $userChallenge['id']; ?></td>
            <td><?php echo $userChallenge['user_id']; ?></td>
            <td><?php echo $userChallenge['challenge_id']; ?></td>
            <td><?php echo $userChallenge['dateCompleted']; ?></td>
            <td class="actions">
                <?php echo $this->Html->link(__('View'), array('controller' => 'user_challenges', 'action' => 'view', $userChallenge['id'])); ?>
                <?php echo $this->Html->link(__('Edit'), array('controller' => 'user_challenges', 'action' => 'edit', $userChallenge['id'])); ?>
                <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_challenges', 'action' => 'delete', $userChallenge['id']), null, __('Are you sure you want to delete # %s?', $userChallenge['id'])); ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </table>
<?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New User Challenge'), array('controller' => 'user_challenges', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>

<div class="related">
    <h3><?php echo __('User Score'); ?></h3>
    <?php if (!empty($user['Score'])): ?>
    <table cellpadding = "0" cellspacing = "0">
    <tr>
        <th><?php echo __('Id'); ?></th>
        <th><?php echo __('User'); ?></th>
        <th><?php echo __('Score'); ?></th>
        <th><?php echo __('Date Updated'); ?></th>
    </tr>
        <tr>
            <td><?php echo $user['Score']['id']; ?></td>
            <td><?php echo $user['Score']['user_id']; ?></td>
            <td><?php echo $user['Score']['score']; ?></td>
            <td><?php echo $user['Score']['dateUpdated']; ?></td>
        </tr>
    </table>
<?php endif; ?>
</div>
