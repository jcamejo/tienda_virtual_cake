<?php
class Tag extends AppModel {
    public $hasMany = array(
        'ArticleTag'
    );

    public $validate = array(
        'name' => array(
            'allowEmpty' => false
        )
    );
}

