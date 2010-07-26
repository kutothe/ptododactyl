<?php defined('SYSPATH') OR die('No Direct Script Access');
 
Class Controller_Hello extends Controller_DefaultTemplate
{

	function __construct(Kohana_Request $request)
	{
		parent::__construct($request);
		$this->profiler = new Profiler;
	}

	function action_index()
	{
		$this->request->response = 'hello, worldz but better...';
	}
	
	function action_test()
	{
		$this->template->title		= 'Hurka Der';
		$this->template->content	= View::factory('list/list_items');
	}

	function action_dynamic($say)
	{
		$this->request->response = 'You said:  '.$say;
	}
}
