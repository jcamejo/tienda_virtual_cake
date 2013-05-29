<div class="articleSponsors view">
<h2><?php  echo __('Article Sponsor'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($articleSponsor['ArticleSponsor']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Article'); ?></dt>
        <dd>
            <?php echo $this->Html->link($articleSponsor['Article']['name'], array('controller' => 'articles', 'action' => 'view', $articleSponsor['Article']['id'])); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Sponsor'); ?></dt>
        <dd>
            <?php echo $this->Html->link($articleSponsor['Sponsor']['name'], array('controller' => 'sponsors', 'action' => 'view', $articleSponsor['Sponsor']['id'])); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Beneficiary'); ?></dt>
        <dd>
            <?php echo h($articleSponsor['ArticleSponsor']['beneficiary']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Article Sponsor'), array('action' => 'edit', $articleSponsor['ArticleSponsor']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Article Sponsor'), array('action' => 'delete', $articleSponsor['ArticleSponsor']['id']), null, __('Are you sure you want to delete # %s?', $articleSponsor['ArticleSponsor']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Article Sponsors'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Article Sponsor'), array('action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('List Sponsors'), array('controller' => 'sponsors', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Sponsor'), array('controller' => 'sponsors', 'action' => 'add')); ?> </li>
    </ul>
</div>
