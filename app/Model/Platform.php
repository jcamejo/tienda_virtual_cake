<?php
class Platform extends AppModel {
    public $hasMany = array(
        'Challenge' => array(
            'className'    => 'Challenge',
            'foreignKey'    => 'platform_id'
        )
    );

    public $validate = array(
        'name' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty'
            ),
            'isUnique' => array(
                'rule' => 'isUnique',
                'message' => 'Este nombre ya ha sido registrado'
            ),
        )
    
    );

}

