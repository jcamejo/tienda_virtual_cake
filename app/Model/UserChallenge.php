<?php
class UserChallenge extends AppModel {
    public $belongsTo = array(
        'User', 'Challenge'
    );

    public $validate = array(
        'user_id' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty'
            ),
            'unique' => array(
                'rule' => array('checkUnique', array('challenge_id', 'user_id')),
                'message' => 'Ya existe un par challenge/user registrado con estos datos'
            )
        ),
        'challenge_id' => 'notEmpty',
        'dateCompleted' => 'notEmpty'

    );

}

