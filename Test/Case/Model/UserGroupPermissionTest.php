<?php
/* UserGroupPermission Test cases generated on: 2012-03-15 20:58:24 : 1331825304*/
App::uses('UserGroupPermission', 'Model');

/**
 * UserGroupPermission Test Case
 *
 */
class UserGroupPermissionTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.user_group_permission', 'app.user_group', 'app.user', 'app.call', 'app.activity_type', 'app.recieved_on', 'app.shift', 'app.integration_type', 'app.login_token');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->UserGroupPermission = ClassRegistry::init('UserGroupPermission');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserGroupPermission);

		parent::tearDown();
	}

}
