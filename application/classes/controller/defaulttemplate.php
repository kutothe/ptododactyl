<?php defined('SYSPATH') or die('No direct script access.');

class Controller_DefaultTemplate extends Controller_Template
{

	public $template = 'templates/default';

	/**
	 * Initialize properties before running the controller methods (actions),
	 * so they are available to our action.
	*/
	public function before()
	{
		// Run anything that need ot run before this.
		parent::before();
        
        if ( ! Auth::instance()->logged_in() )
        {
            if ( $this->request->controller != 'auth' )
            {
                // If we want to force people to log in,
                //   we can uncomment this line
                // TODO -- send some message saying (you must login!)
                //$this->request->redirect('index.php/auth/login');
            }
        }

		if ($this->auto_render)
		{
			// Initialize empty values
			$this->template->title				= 'Ptododactyl Rulez!';
			$this->template->meta_keywords		= '';
			$this->template->meta_description   = '';
			$this->template->meta_copywrite		= '';
			$this->template->header				= View::factory('includes/header');
			$this->template->content			= '';
			$this->template->footer				= View::factory('includes/footer');
			$this->template->styles				= array();
			$this->template->scripts			= array();
		}
	}

	/**
	 * Fill in default values for our properties before rendering the output.
	*/
	public function after()
	{
		if ($this->auto_render)
		{
			// Define defaults
			$styles		= array(
				'../assets/css/reset.css'	=> 'screen',
				'assets/css/styles.css'		=> 'screen'
			);
			$scripts	= array(
				url::site('../assets/js/jquery/jquery-1.4.2.min.js'),
				url::site('assets/js/scripts.js')
			);

			// Add defaults to template variables.
			$this->template->styles		= array_reverse(array_merge($this->template->styles, $styles));
			$this->template->scripts	= array_reverse(array_merge($this->template->scripts, $scripts));
		}

		// Run anything that needs to run after this.
		parent::after();
	}
}
