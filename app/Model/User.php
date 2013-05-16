<?php
class User extends AppModel {
    public $hasMany = array(
        'UserArticle', 'UserChallenge'
    );
}
