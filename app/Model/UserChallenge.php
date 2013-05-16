<?php
class UserChallenge extends AppModel {
    public $belongsTo = array(
        'User', 'Challenge'
    );

}

