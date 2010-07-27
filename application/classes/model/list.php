<?php defined('SYSPATH') or die('No direct script access.');

class Model_List extends ORM
{
	protected $_table_columns = array(
		'title'		=> array('data_type' => 'string',	'is_nullable' => FALSE),
		'detail'	=> array('data_type' => 'string',	'is_nullable' => TRUE),
		'lists_id'	=> array('data_type' => 'int',		'is_nullable' => TRUE),
		'users_id'	=> array('data_type' => 'int',		'is_nullable' => FALSE),
		'created'	=> array('data_type' => 'date',		'is_nullable' => FALSE)
	);
}
