<?php
class UserArticle extends AppModel {
    public $belongsTo = array(
        'User', 'Article'
    );
}
