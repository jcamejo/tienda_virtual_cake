<?php
class Sponsor extends AppModel {
    public $hasMany = array(
        'ArticleSponsor'
    );

    public $validate = array(
        'name' => array(
            'allowEmpty' => false
        )
    );
    
}

