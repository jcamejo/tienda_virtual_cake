<?php
class Platform extends AppModel {
    public $hasMany = array(
        'Challenge' => array(
            'className'    => 'Challenge',
            'foreignKey'    => 'platform_id'
        )
    );

    public $validate = array(
        'name' => 'notEmpty'
    );

}

