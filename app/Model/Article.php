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
            )
        ),
        'code' => array(
            'rule' => 'notEmpty'
        ),
        'image_url' => array(
            'extension' => array(
                'rule'=> array('extension', array('gif','jpeg','png','jpg')),
                'message' => 'Please supply a valid image',
            ) 
        ),
        'cost' => array(
            'rule' => 'notEmpty'
        )

    );

}
