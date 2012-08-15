<?php
/**
 * ProductOptionFixture
 *
 */
class ProductOptionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'qty' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'cost' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'retail' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'product_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'qty' => 1,
			'cost' => 1,
			'retail' => 1,
			'product_id' => 1
		),
	);
}
