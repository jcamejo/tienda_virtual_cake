<?php
class Sponsor extends AppModel {
    public $hasMany = array(
        'ArticleSponsor'
    );
    
}

