<?php
class TwitterAuth extends AppModel {
    public $useTable = 'twitter_auth';

    public $validate = array(
        'consumerKey' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty'
            ),
            'unique' => array(
                'rule' => array('checkUnique', array('consumerKey', 'consumerSecret')),
                'message' => 'Ya existe un par consumerKey/consumerSecret registrado con estos datos'
            )
        ),
        'consumerSecret' => 'notEmpty',
    );
}

