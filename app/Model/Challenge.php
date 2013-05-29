<?php
class Challenge extends AppModel {
    public $hasMany = array(
        'UserChallenge', 'ChallengeParam'
    );
    public $displayField = 'friendlyName';

    var $belongsTo = array(
        'Platform' => array(
            'className' => 'Platform',
            'foreignKey' => 'platform_id'
         )
    );

    public $validate = array(
        'platform_id' => array(
            'rule' => 'notEmpty' 
        ),
        'action' => array(
            'rule' => 'notEmpty'
        ),
        'reward' => array(
            'rule' => 'numeric',
            'allowedEmpty' => true
        ),
        'status' => array(
            'rule' => 'notEmpty'
        )


    );


}

