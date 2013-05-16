<?php

class ArticleTag extends AppModel {
    public $belongsTo = array(
        'Article', 'Tag'
    );
}
