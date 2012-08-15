<?php
App::uses('ProductOption', 'Model');

/**
 * ProductOption Test Case
 *
 */
class ProductOptionTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.product_option', 'app.product');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProductOption = ClassRegistry::init('ProductOption');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProductOption);

		parent::tearDown();
	}

}
