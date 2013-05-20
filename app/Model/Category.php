<?php
class Category extends AppModel {
    public $hasMany = array(
        'ArticleCategory'
    );

    public $validate = array(
        'name' => 'notEmpty'
    );
}

