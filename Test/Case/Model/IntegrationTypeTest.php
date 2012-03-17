<?php
/* IntegrationType Test cases generated on: 2012-03-13 20:33:36 : 1331651016*/
App::uses('IntegrationType', 'Model');

/**
 * IntegrationType Test Case
 *
 */
class IntegrationTypeTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.integration_type', 'app.call', 'app.activity_type', 'app.user', 'app.recieved_on', 'app.shift');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->IntegrationType = ClassRegistry::init('IntegrationType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->IntegrationType);

		parent::tearDown();
	}

}
