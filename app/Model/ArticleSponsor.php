<?php
class ArticleSponsor extends AppModel {
    public $belongsTo = array(
        'Article', 'Sponsor'
    );

    public $validate = array(
        'article_id' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty'
            ),
            'unique' => array(
                'rule' => array('checkUnique', array('article_id', 'sponsor_id')),
                'message' => 'Ya existe un par article/sponsor registrado con estos datos'
            )

        ),
        'sponsor_id' => 'notEmpty',
    );
}

