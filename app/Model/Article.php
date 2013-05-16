<?php
class Article extends AppModel {
    public $hasMany = array(
        'UserArticle', 'ArticleTag', 'ArticleCategory', 'ArticleSponsor'
    );
}
