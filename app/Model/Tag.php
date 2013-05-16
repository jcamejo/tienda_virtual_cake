<?php
class Tag extends AppModel {
    public $hasMany = array(
        'ArticleTag'
    );
}

