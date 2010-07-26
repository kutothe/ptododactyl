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

	/*
	 * Hey Balz... so I'm just screwing around with testing stuff here.
     * This is by no means a long-term shtick.
     *
     * but hey.. I got basic file-based auth working
     * ...gonna hang onto it for now and do sql later in the game.
     * this is hyper easy to manage during development.
     */
	// This is interested if you go to 
	// http://localhost/kohana/ptododactyl/index.php/hello/login/bananas
	function action_login($password)
	{
		$auth = Auth::instance();
		$username = 'admin';
		// The real password is 'bananas'

		echo "<p>logged in before?  ";
		echo $auth->logged_in() ? 'Yes!' : 'No.';
		echo "</p>";
		
		$auth->logout();
		
		echo "<p>...and now?  ";
		echo $auth->logged_in() ? 'Yes!' : 'No.';
		echo "</p>";
		
		$auth->login($username, $password);
		
		echo "<p>...and now?  ";
		echo $auth->logged_in() ? 'Yes!' : 'No.';
		echo "</p>";
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
