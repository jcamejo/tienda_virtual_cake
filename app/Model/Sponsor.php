<?php
class Sponsor extends AppModel {
    public $hasMany = array(
        'ArticleSponsor'
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

