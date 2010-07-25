<?php
defined('SYSPATH') OR die('No Direct Script Access');
 
Class Controller_Hello extends Controller
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
		echo 'test, lolz';
	}

	function action_dynamic($say)
	{
		$this->request->response = 'You said:  '.$say;
	}
}
