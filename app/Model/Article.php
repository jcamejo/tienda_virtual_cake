<?php
class Article extends AppModel {
    public $hasMany = array(
        'UserArticle', 'ArticleTag', 'ArticleCategory', 'ArticleSponsor'
    );

    public $validate = array(
        'name' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            ),
            'isUnique' => array(
                'rule' => 'isUnique',
                'message' => 'Nombre ya registrado'
            )
        ),
        'code' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty'
            ),
            'isUnique' => array(
                'rule' => 'isUnique',
                'message' => 'Codigo ya registrado'
            )
        ),
        'imageURL' => array(
            'extension' => array(
                'rule'=> array('extension', array('gif','jpeg','png','jpg')),
                'message' => 'Please supply a valid image',
            ) 
        ),
        'cost' => array(
            'rule' => 'notEmpty'
        ),
        'stock' => array(
            'rule' => 'notEmpty'
        )
    );

}
