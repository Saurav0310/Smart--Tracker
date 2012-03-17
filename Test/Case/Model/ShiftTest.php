<?php
/* Shift Test cases generated on: 2012-03-12 18:48:34 : 1331558314*/
App::uses('Shift', 'Model');

/**
 * Shift Test Case
 *
 */
class ShiftTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.shift', 'app.call', 'app.activity_type', 'app.user', 'app.recieved_ons');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Shift = ClassRegistry::init('Shift');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Shift);

		parent::tearDown();
	}

}
