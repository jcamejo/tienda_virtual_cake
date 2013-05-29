<?php
class User extends AppModel {
    public $hasMany = array(
        'UserArticle', 'UserChallenge'
    );

    public $hasOne = 'Score';

    public $displayField = 'facebookId';

    public $validate = array(
        'joinDate' => array(
            'rule' => 'notEmpty'
        ),
        'facebookId' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty' 
            ),
            'unique' => array(
                'rule' => 'isUnique',
                'message' => 'This facebook ID has already been saved.'
            )
        ),
        'twitterId' => array(
            'rule' => 'isUnique',
            'message' => 'This twitter ID has already been saved.',
            'allowEmpty' => true
        ),
        'firstName' => array(
            'rule' => 'notEmpty'
        ),
        'lastName' => array(
            'rule' => 'notEmpty'
        ),
        'email' => array(
            'rule' => 'email',
            'allowEmpty' => true
        ),
        'phone' => array(
            'rule' => 'numeric',
            'message' => 'Please supply a correct phone number',
            'allowEmpty' => true
        )
    );
}
