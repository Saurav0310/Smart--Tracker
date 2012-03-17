<?php
/* Medium Test cases generated on: 2012-03-12 18:56:32 : 1331558792*/
App::uses('Medium', 'Model');

/**
 * Medium Test Case
 *
 */
class MediumTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.medium', 'app.call', 'app.activity_type', 'app.user', 'app.recieved_ons', 'app.shift');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Medium = ClassRegistry::init('Medium');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Medium);

		parent::tearDown();
	}

}
