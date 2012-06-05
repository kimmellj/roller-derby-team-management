<?php
App::uses('PeopleTeam', 'Model');

/**
 * PeopleTeam Test Case
 *
 */
class PeopleTeamTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.people_team', 'app.team', 'app.person', 'app.committee', 'app.committees_person');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PeopleTeam = ClassRegistry::init('PeopleTeam');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PeopleTeam);

		parent::tearDown();
	}

}
