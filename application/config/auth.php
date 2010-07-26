<?php defined('SYSPATH') or die('No direct access allowed.');

return array(

	'driver'       => 'File',
	'hash_method'  => 'sha1',
	'salt_pattern' => '1, 3, 5, 9, 14, 15, 20, 21, 28, 30',
	'lifetime'     => 1209600,
	'session_key'  => 'auth_user',

	// Username/password combinations for the Auth File driver
	'users' => array(
		'admin' => '6325bb7527fd6b3db8432f88d488d361ad27246e1d452a55d8',
		// ...which stands for 'bananas' in crypto land.  I got this by using
		// Auth::instance()->hash_password('bananas'); 
	),

);
