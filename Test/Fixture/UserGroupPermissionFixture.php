<?php
/* UserGroupPermission Fixture generated on: 2012-03-15 20:58:24 : 1331825304 */

/**
 * UserGroupPermissionFixture
 *
 */
class UserGroupPermissionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'user_group_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'collate' => NULL, 'comment' => ''),
		'controller' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_general_ci', 'comment' => '', 'charset' => 'latin1'),
		'action' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_general_ci', 'comment' => '', 'charset' => 'latin1'),
		'allowed' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'user_group_id' => 1,
			'controller' => 'Lorem ipsum dolor sit amet',
			'action' => 'Lorem ipsum dolor sit amet',
			'allowed' => 1
		),
	);
}
