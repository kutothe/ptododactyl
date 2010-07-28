<?php defined('SYSPATH') or die('No direct script access.');

class Model_List_Item extends ORM
{
	protected $_primary_val		= 'detail';
	
	protected $_table_columns	= array(
		'detail'				=> array('data_type' => 'string',	'is_nullable' => FALSE),
		'created'				=> array('data_type' => 'date',		'is_nullable' => FALSE),
		'users_id'				=> array('data_type' => 'int',		'is_nullable' => FALSE),
		'completed'				=> array('data_type' => 'date',		'is_nullable' => TRUE),
		'completed_users_id'	=> array('data_type' => 'int',		'is_nullable' => TRUE),
		'lists_id'				=> array('data_type' => 'int',		'is_nullable' => FALSE),
		'time_worked'			=> array('data_type' => 'int',		'is_nullable' => FALSE),
	);
}
