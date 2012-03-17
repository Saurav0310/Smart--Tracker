<?php
/* ActivityType Test cases generated on: 2012-03-12 18:45:49 : 1331558149*/
App::uses('ActivityType', 'Model');

/**
 * ActivityType Test Case
 *
 */
class ActivityTypeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.activity_type', 'app.call');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->ActivityType = ClassRegistry::init('ActivityType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ActivityType);

		parent::tearDown();
	}

}
