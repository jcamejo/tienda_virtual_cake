<?php

class ArticleTag extends AppModel {
    public $belongsTo = array(
        'Article', 'Tag'
    );

    public $validate = array(
        'article_id' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty'
            ),
            'unique' => array(
                'rule' => array('checkUnique', array('article_id', 'tag_id')),
                'message' => 'Ya existe un par article/tag registrado con estos datos'
            )
        ),
        'tag_id' => 'notEmpty'
    );
}
