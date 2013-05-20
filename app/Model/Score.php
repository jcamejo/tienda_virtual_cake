<?php
class Score extends AppModel {

    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id'
        )
    );

    public $validate = array(
        'user_id' => 'notEmpty',
        'score' => 'notEmpty'
    );

}

