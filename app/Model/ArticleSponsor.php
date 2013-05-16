<?php
class ArticleSponsor extends AppModel {
    public $belongsTo = array(
        'Article', 'Sponsor'
    );
}

