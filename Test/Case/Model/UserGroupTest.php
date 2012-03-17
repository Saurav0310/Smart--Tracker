<?php
/* UserGroup Test cases generated on: 2012-03-15 20:56:36 : 1331825196*/
App::uses('UserGroup', 'Model');

/**
 * UserGroup Test Case
 *
 */
class UserGroupTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.user_group', 'app.user_group_permission', 'app.user', 'app.call', 'app.activity_type', 'app.recieved_on', 'app.shift', 'app.integration_type', 'app.login_token');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->UserGroup = ClassRegistry::init('UserGroup');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserGroup);

		parent::tearDown();
	}

}
