<?php
class ArticleCategory extends AppModel {
    public $belongsTo = array(
        'Article', 'Category'
    );

}

