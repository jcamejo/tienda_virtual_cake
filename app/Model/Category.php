<?php
class Category extends AppModel {
    public $hasMany = array(
        'ArticleCategory'
    );

    public $validate = array(
        'name' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty'
            ),
            'isUnique' => array(
                'rule' => 'isUnique',
                'message' => 'Nombre ya registrado'
            )
        )
    );
}

