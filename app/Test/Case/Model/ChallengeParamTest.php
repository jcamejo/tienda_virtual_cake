<?php
App::uses('ChallengeParam', 'Model');

/**
 * ChallengeParam Test Case
 *
 */
class ChallengeParamTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.challenge_param',
		'app.challenge',
		'app.platform',
		'app.user_challenge',
		'app.user',
		'app.user_article',
		'app.article',
		'app.article_tag',
		'app.tag',
		'app.article_category',
		'app.category',
		'app.article_sponsor',
		'app.sponsor'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ChallengeParam = ClassRegistry::init('ChallengeParam');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ChallengeParam);

		parent::tearDown();
	}

}
