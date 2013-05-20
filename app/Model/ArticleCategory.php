<?php
class ArticleCategory extends AppModel {
    public $belongsTo = array(
        'Article', 'Category'
    );

    public $validate = array(
        'article_id' => 'notEmpty',
        'category_id' => 'notEmpty'

    );
}

