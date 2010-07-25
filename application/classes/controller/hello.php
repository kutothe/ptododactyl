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
		$this->request->redirect('index.php/hello/no_diggity/1');
	}

	function action_no_diggity($the_way_you_work_it)
	{
		// A constant for this demonstration
		$msg = 'Try passing in values between 1 and 4';
	
		// Some sanity checking	
		if ( $the_way_you_work_it < 1 or $the_way_you_work_it > 4 )
		{
			$msg = 'Between 1 and 4!  :(';
			$the_way_you_work_it = 1;
		}

		// I like the way you work it.  No diggity.
		if ( $the_way_you_work_it == 1 )
		{
			$view = View::factory('pages/hello');
			$view->content = $msg;
			$this->request->response = $view->render();
		}
		elseif ( $the_way_you_work_it == 2 )
		{
			$data['content'] = $msg;
			$view = View::factory('pages/hello', $data);
			$this->request->response = $view->render();
		}
		elseif ( $the_way_you_work_it == 3 )
		{
			$view = View::factory('pages/hello')->set('content', $msg);
			$this->request->response = $view->render();
		}
		elseif ( $the_way_you_work_it == 4 )
		{
			$content = 'fooblong';
			$view = View::factory('pages/hello')->bind('content', $content);
			// Well no shit...
			$content = $msg;
			$this->request->response = $view->render();
		}
	}
}
