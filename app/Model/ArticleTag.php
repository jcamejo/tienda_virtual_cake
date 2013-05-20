<?php

class ArticleTag extends AppModel {
    public $belongsTo = array(
        'Article', 'Tag'
    );

    public $validate = array(
        'article_id' => 'notEmpty',
        'tag_id' => 'notEmpty'
    );
}
