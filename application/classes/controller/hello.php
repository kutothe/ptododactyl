<?php defined('SYSPATH') OR die('No Direct Script Access');
 
Class Controller_Hello extends Controller
{

	function __construct(Kohana_Request $request)
	{
		parent::__construct($request);
		$this->profiler = new Profiler;
	}

    function action_index()
    {
        echo 'hello, worldz!';
	}
	
	function action_test()
	{
		echo 'test, lol';
	}
}
