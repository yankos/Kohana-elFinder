<?php defined('SYSPATH') or die('No direct script access.');

// Route for static
Route::set('elfinder/media', 'elfinder/media(/<file>)', array('file' => '.+'))
	->defaults
	(
		array
		(
			'controller' => 'elfinder',
			'action'     => 'media',
			'file'       => NULL,
		)
	);
	
// Main route
Route::set('elfinder', 'elfinder/<config>(/<cmd>)')
	->defaults
	(
		array
		(
			'controller' => 'elfinder',
			'action'     => 'index',
			'config'	=> 'default'
		)
	);
