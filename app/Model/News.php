<?php
class News extends AppModel {

    public $validate = array(
        'headline' =>'notEmpty',
        'content' => 'notEmpty'

    );
}

