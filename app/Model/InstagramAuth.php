<?php
class InstagramAuth extends AppModel {
    public $useTable = 'instagram_auth';

    public $validate = array(
        'userName' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty'
            ),
            'unique' => array(
                'rule' => array('checkUnique', array('UserName', 'clientId')),
                'message' => 'Ya existe un par user_name/client_id registrado con estos datos'
            )
        ),
        'clientId' => 'notEmpty',
        'accessToken' => 'notEmpty'
    );
}

