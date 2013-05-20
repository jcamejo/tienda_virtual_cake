<?php
App::uses('AppModel', 'Model');
/**
 * ChallengeParam Model
 *
 * @property Challenge $Challenge
 */
class ChallengeParam extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Challenge' => array(
			'className' => 'Challenge',
			'foreignKey' => 'challenge_id'
		)
	);

    public $validate = array(
        'challenge_id' => 'notEmpty',
        'param_name' => 'notEmpty',
        'param_value' => 'notEmpty'
    );
}
