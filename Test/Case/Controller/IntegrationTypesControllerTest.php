<?php
/* IntegrationTypes Test cases generated on: 2012-03-13 20:34:36 : 1331651076*/
App::uses('IntegrationTypesController', 'Controller');

/**
 * TestIntegrationTypesController *
 */
class TestIntegrationTypesController extends IntegrationTypesController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * IntegrationTypesController Test Case
 *
 */
class IntegrationTypesControllerTestCase extends CakeTestCase {
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

		$this->IntegrationTypes = new TestIntegrationTypesController();
		$this->IntegrationTypes->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->IntegrationTypes);

		parent::tearDown();
	}

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {

	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {

	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {

	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {

	}

}
