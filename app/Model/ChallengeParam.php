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
        'challenge_id' => array(
            'unique' => array(
                'rule' => array('checkUnique', array('challenge_id', 'paramName')),
                'message' => 'Ya existe un parametro con el mismo nombre en este reto',
            ),
            'notEmpty' => array(
                'rule' => 'notEmpty'
            )
        ),
        'paramName' => 'notEmpty',
        'paramValue' => 'notEmpty',
    );
}
