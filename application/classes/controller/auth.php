<?php
defined('SYSPATH') OR die('No Direct Script Access');
 
Class Controller_Auth extends Controller
{
	// TODO -- this should be passed into the constructor or something.
	// TODO -- OR, use a default root controller?
	private $default_destination = 'index.php/hello';

	function __construct(Kohana_Request $request)
	{
		parent::__construct($request);
		$this->profiler = new Profiler;
	}

	function action_index()
	{
		$this->request->redirect('index.php/auth/login');
	}

	function action_login()
	{
		if ( isset( $_GET['destination'] ) )
		{
			$ref = $_GET['destination'];
		}
		elseif ( Request::$referrer != '' )
		{
			$ref = Request::$referrer;
		}
		else
		{
			$ref = $this->default_destination;
		}
		print "(debug) the referrer was: $ref<br>";
		$view = View::factory('pages/auth/login');
		$view->destination = $ref;
		$this->request->response = $view->render();
	}
	
	function action_logout()
	{
		Auth::instance()->logout();
		// TODO -- flash message about succes or whatever
		$this->request->redirect($this->default_destination);
	}

	function action_do_login()
	{
		$destination = $_POST['destination'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$auth = Auth::instance();
		$success = $auth->login($username, $password);
		if ( $success == True )
		{
			// TODO -- flash about success?
			// flash here  git://github.com/daveWid/message.git
			$this->request->redirect($destination);
		}
		else
		{
			// TODO -- flash about failure?
			// flash here  git://github.com/daveWid/message.git
			$this->request->redirect(
				"index.php/auth/login?destination=".urlencode($destination));
		}
	}

}
