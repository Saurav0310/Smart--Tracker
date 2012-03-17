<?php
/* RecievedOn Test cases generated on: 2012-03-12 19:01:26 : 1331559086*/
App::uses('RecievedOn', 'Model');

/**
 * RecievedOn Test Case
 *
 */
class RecievedOnTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.recieved_on', 'app.call', 'app.activity_type', 'app.user', 'app.shift');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->RecievedOn = ClassRegistry::init('RecievedOn');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RecievedOn);

		parent::tearDown();
	}

}
