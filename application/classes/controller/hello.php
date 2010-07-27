<?php defined('SYSPATH') OR die('No Direct Script Access');
 
Class Controller_Hello extends Controller_DefaultTemplate
{

	function __construct(Kohana_Request $request)
	{
		parent::__construct($request);
	}

	function action_index()
	{
		$this->template->content = 'Ohhhhh yeaaaaah!';
	}
	
	function action_test($list_id=0)
	{
		$this->template->title		= 'Harry\'s Ptestdactyl';
		
		if ($list_id <= 0)
		{
			$this->template->content	= View::factory('list/lists', array(
				'lists'	=> ORM::factory('list')->find_all()
			));
		}
		else
		{
			$this->template->content	= View::factory('list/list_items', array(
				'list'			=> ORM::factory('list', $list_id),
				'list_items'	=> ORM::factory('list_item')->where('lists_id', '=', $list_id)->find_all()
			));
		}
	}
}
