<?php
/* Method Test cases generated on: 2012-03-12 18:47:28 : 1331558248*/
App::uses('Method', 'Model');

/**
 * Method Test Case
 *
 */
class MethodTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.method');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Method = ClassRegistry::init('Method');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Method);

		parent::tearDown();
	}

}
