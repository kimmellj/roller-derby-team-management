<?php
App::uses('Team', 'Model');

/**
 * Team Test Case
 *
 */
class TeamTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.team', 'app.person', 'app.committee', 'app.committees_person', 'app.people_team');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Team = ClassRegistry::init('Team');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Team);

		parent::tearDown();
	}

}
