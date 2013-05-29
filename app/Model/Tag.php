<?php
class Tag extends AppModel {
    public $hasMany = array(
        'ArticleTag'
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

