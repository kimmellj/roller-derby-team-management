<?php
App::uses('Person', 'Model');

/**
 * Person Test Case
 *
 */
class PersonTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.person', 'app.committee', 'app.committees_person', 'app.team', 'app.people_team');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Person = ClassRegistry::init('Person');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Person);

		parent::tearDown();
	}

}
