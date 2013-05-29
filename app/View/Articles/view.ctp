<div class="articles view">
<h2><?php  echo __('Article'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($article['Article']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Name'); ?></dt>
        <dd>
            <?php echo h($article['Article']['name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Date Created'); ?></dt>
        <dd>
            <?php echo h($article['Article']['dateCreated']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Code'); ?></dt>
        <dd>
            <?php echo h($article['Article']['code']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Image Url'); ?></dt>
        <dd>
            <?php echo h($article['Article']['imageURL']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Thumb Url'); ?></dt>
        <dd>
            <?php echo h($article['Article']['thumbURL']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Description'); ?></dt>
        <dd>
            <?php echo h($article['Article']['description']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Cost'); ?></dt>
        <dd>
            <?php echo h($article['Article']['cost']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Stock'); ?></dt>
        <dd>
            <?php echo h($article['Article']['stock']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Date Updated'); ?></dt>
        <dd>
            <?php echo h($article['Article']['dateUpdated']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Edit Article'), array('action' => 'edit', $article['Article']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Delete Article'), array('action' => 'delete', $article['Article']['id']), null, __('Are you sure you want to delete # %s?', $article['Article']['id'])); ?> </li>
        <li><?php echo $this->Html->link(__('List Articles'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('New Article'), array('action' => 'add')); ?> </li>
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
<div class="related">
    <h3><?php echo __('Related User Articles'); ?></h3>
    <?php if (!empty($article['UserArticle'])): ?>
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
        foreach ($article['UserArticle'] as $userArticle): ?>
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
    <h3><?php echo __('Related Article Tags'); ?></h3>
    <?php if (!empty($article['ArticleTag'])): ?>
    <table cellpadding = "0" cellspacing = "0">
    <tr>
        <th><?php echo __('Id'); ?></th>
        <th><?php echo __('Article Id'); ?></th>
        <th><?php echo __('Tag Id'); ?></th>
        <th class="actions"><?php echo __('Actions'); ?></th>
    </tr>
    <?php
        $i = 0;
        foreach ($article['ArticleTag'] as $articleTag): ?>
        <tr>
            <td><?php echo $articleTag['id']; ?></td>
            <td><?php echo $articleTag['article_id']; ?></td>
            <td><?php echo $articleTag['tag_id']; ?></td>
            <td class="actions">
                <?php echo $this->Html->link(__('View'), array('controller' => 'article_tags', 'action' => 'view', $articleTag['id'])); ?>
                <?php echo $this->Html->link(__('Edit'), array('controller' => 'article_tags', 'action' => 'edit', $articleTag['id'])); ?>
                <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'article_tags', 'action' => 'delete', $articleTag['id']), null, __('Are you sure you want to delete # %s?', $articleTag['id'])); ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </table>
<?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Article Tag'), array('controller' => 'article_tags', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>
<div class="related">
    <h3><?php echo __('Related Article Categories'); ?></h3>
    <?php if (!empty($article['ArticleCategory'])): ?>
    <table cellpadding = "0" cellspacing = "0">
    <tr>
        <th><?php echo __('Id'); ?></th>
        <th><?php echo __('Article Id'); ?></th>
        <th><?php echo __('Category Id'); ?></th>
        <th class="actions"><?php echo __('Actions'); ?></th>
    </tr>
    <?php
        $i = 0;
        foreach ($article['ArticleCategory'] as $articleCategory): ?>
        <tr>
            <td><?php echo $articleCategory['id']; ?></td>
            <td><?php echo $articleCategory['article_id']; ?></td>
            <td><?php echo $articleCategory['category_id']; ?></td>
            <td class="actions">
                <?php echo $this->Html->link(__('View'), array('controller' => 'article_categories', 'action' => 'view', $articleCategory['id'])); ?>
                <?php echo $this->Html->link(__('Edit'), array('controller' => 'article_categories', 'action' => 'edit', $articleCategory['id'])); ?>
                <?php echo $this->Form->postLink(__('Delete'), array('controller' => 'article_categories', 'action' => 'delete', $articleCategory['id']), null, __('Are you sure you want to delete # %s?', $articleCategory['id'])); ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </table>
<?php endif; ?>

    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('New Article Category'), array('controller' => 'article_categories', 'action' => 'add')); ?> </li>
        </ul>
    </div>
</div>
<div class="related">
    <h3><?php echo __('Related Article Sponsors'); ?></h3>
    <?php if (!empty($article['ArticleSponsor'])): ?>
    <table cellpadding = "0" cellspacing = "0">
    <tr>
        <th><?php echo __('Id'); ?></th>
        <th><?php echo __('Article Id'); ?></th>
        <th><?php echo __('Sponsor Id'); ?></th>
        <th><?php echo __('Beneficiary'); ?></th>
        <th class="actions"><?php echo __('Actions'); ?></th>
    </tr>
    <?php
        $i = 0;
        foreach ($article['ArticleSponsor'] as $articleSponsor): ?>
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
