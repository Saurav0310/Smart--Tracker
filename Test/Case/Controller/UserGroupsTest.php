<?php
/* UserGroups Test cases generated on: 2012-03-15 20:57:19 : 1331825239*/
App::uses('UserGroups', 'Controller');

/**
 * TestUserGroups *
 */
class TestUserGroups extends UserGroups {
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
 * UserGroups Test Case
 *
 */
class UserGroupsTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('y');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->UserGroups = new TestUserGroups();
		$this->->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserGroups);

		parent::tearDown();
	}

}
