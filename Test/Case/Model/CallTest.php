<?php
/* Call Test cases generated on: 2012-03-13 20:33:03 : 1331650983*/
App::uses('Call', 'Model');

/**
 * Call Test Case
 *
 */
class CallTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.call', 'app.activity_type', 'app.user', 'app.recieved_on', 'app.shift', 'app.integration_type');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Call = ClassRegistry::init('Call');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Call);

		parent::tearDown();
	}

}
