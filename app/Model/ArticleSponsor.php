<?php
class ArticleSponsor extends AppModel {
    public $belongsTo = array(
        'Article', 'Sponsor'
    );

    public $validate = array(
        'article_id' => 'notEmpty',
        'sponsor_id' => 'notEmpty'
    );
}

