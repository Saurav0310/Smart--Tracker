<?php
/* Call Fixture generated on: 2012-03-13 20:33:02 : 1331650982 */

/**
 * CallFixture
 *
 */
class CallFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'activity_type_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'activity_date' => array('type' => 'date', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'start_time' => array('type' => 'time', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'end_time' => array('type' => 'time', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'recieved_on_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'shift_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'report_number' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'integration_type_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'activity_type_id' => 1,
			'user_id' => 1,
			'activity_date' => '2012-03-13',
			'start_time' => '20:33:02',
			'end_time' => '20:33:02',
			'recieved_on_id' => 1,
			'shift_id' => 1,
			'report_number' => 1,
			'integration_type_id' => 1
		),
	);
}
