<?php
class Category extends AppModel {
    public $hasMany = array(
        'ArticleCategory'
    );
}

