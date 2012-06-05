<?php
/**
 * CommitteesPersonFixture
 *
 */
class CommitteesPersonFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'committee_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'person_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'indexes' => array('PRIMARY' => array('column' => array('committee_id', 'person_id'), 'unique' => 1), 'fk_committees_people_committees1' => array('column' => 'committee_id', 'unique' => 0), 'fk_committees_people_people1' => array('column' => 'person_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'committee_id' => 1,
			'person_id' => 1
		),
	);
}
