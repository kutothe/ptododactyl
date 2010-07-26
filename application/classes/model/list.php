<?php defined('SYSPATH') or die('No direct script access.');

class Model_List extends Kohana_Model
{
	public $table_name = 'list';
	
	public function getAll()
	{
		return $this->_db->get($this->table_name);
	}
}