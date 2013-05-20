<?php
class User extends AppModel {
    public $hasMany = array(
        'UserArticle', 'UserChallenge'
    );

    public $displayField = 'facebookid';

    public $validate = array(
        'join_date' => array(
            'rule' => 'notEmpty'
        ),
        'facebookid' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty' 
            )
        ),
        'first_name' => array(
            'rule' => 'notEmpty'
        ),
        'last_name' => array(
            'rule' => 'notEmpty'
        ),
        'email' => array(
            'rule' => 'email',
            'allowEmpty' => true
        ),
        'phone' => array(
            'rule'    => 'numeric',
            'message' => 'Please supply a correct phone number',
            'allowEmpty' => true
        )
    );
}
