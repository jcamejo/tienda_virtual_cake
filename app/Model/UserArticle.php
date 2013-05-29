<?php
class UserArticle extends AppModel {
    public $belongsTo = array(
        'User', 'Article'
    );

    public $validate = array(
        'user_id' => 'notEmpty',
        'articleId' => 'notEmpty',
        'purchaseDate' => 'notEmpty',
        'requestCode' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
            ),
            'isUnique' => array(
                'rule' => 'isUnique',
                'message' => 'Request Code ya registrado'
            )
        ),
        'status' => 'notEmpty'
    );
}
