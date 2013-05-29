<?php
class ArticleCategory extends AppModel {
    public $belongsTo = array(
        'Article', 'Category'
    );

    public $validate = array(
        'article_id' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty'
            ),
            'unique' => array(
                'rule' => array('checkUnique', array('article_id', 'category_id')),
                'message' => 'Ya existe un par article/category registrado con estos datos'
            )
        ),
        'category_id' => 'notEmpty'

    );
}

