<?php
class Challenge extends AppModel {
    public $hasMany = array(
        'UserChallenge', 'ChallengeParam'
    );

    var $belongsTo = array(
        'Platform' => array(
            'className'    => 'Platform',
            'foreignKey'    => 'platform_id'
         )
    );


}

