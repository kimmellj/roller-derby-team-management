<?php
App::uses('CommitteesPerson', 'Model');

/**
 * CommitteesPerson Test Case
 *
 */
class CommitteesPersonTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.committees_person', 'app.person', 'app.committee', 'app.team', 'app.people_team');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CommitteesPerson = ClassRegistry::init('CommitteesPerson');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CommitteesPerson);

		parent::tearDown();
	}

}
