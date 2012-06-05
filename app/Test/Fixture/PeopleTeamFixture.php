<?php
/**
 * PeopleTeamFixture
 *
 */
class PeopleTeamFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'person_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'team_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'active' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
		'eligible' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => array('person_id', 'team_id'), 'unique' => 1), 'fk_people_teams_teams1' => array('column' => 'team_id', 'unique' => 0), 'fk_people_teams_people1' => array('column' => 'person_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'person_id' => 1,
			'team_id' => 1,
			'active' => 1,
			'eligible' => 'Lorem ipsum dolor sit amet'
		),
	);
}
