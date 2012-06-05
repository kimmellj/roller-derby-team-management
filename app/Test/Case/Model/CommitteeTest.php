<?php
App::uses('Committee', 'Model');

/**
 * Committee Test Case
 *
 */
class CommitteeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.committee', 'app.person', 'app.committees_person', 'app.team', 'app.people_team');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Committee = ClassRegistry::init('Committee');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Committee);

		parent::tearDown();
	}

}
