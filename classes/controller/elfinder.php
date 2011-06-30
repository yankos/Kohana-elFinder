<?php defined('SYSPATH') or die('No direct script access.');

/**
 * elFinder generator.
 *
 * @category	Base
 * @author		VIVAsg
 * @copyright	(c) 2011 VIVAsg
 * @link		http://vivasg.com
 * @license		http://opensource.org/licenses/bsd-license.php, BSD
 * @version		1.0
 */
class Controller_Elfinder extends Controller {

	/**
	 * This action for processing command to elFinder core
	 */
	public function action_index()
	{
		$elFinder = elFinder::factory(Request::current()->param('config'));
		ob_start();
		$elFinder->run();
		$elFinder_output = ob_get_contents();
		ob_end_clean();
		
		$this->response->body($elFinder_output);
	}
	
	/**
	 * Action for send static files (css, js, img)
	 */
	public function action_media()
	{		
		$response = $this->response;
		// Get the file path from the request
		$file = $this->request->param('file');

		// Find the file extension
		$ext = pathinfo($file, PATHINFO_EXTENSION);

		// Remove the extension from the filename
		$file = substr($file, 0, -(strlen($ext) + 1));
		
		$file = Kohana::find_file('media', $file, $ext);
		if($file)
		{
			
			// Check if the browser sent an "if-none-match: <etag>" header, and tell if the file hasn't changed
			$response->check_cache(sha1(Request::current()->uri()).filemtime($file), Request::current());
			
			// Send the file content as the response
			$response->body(file_get_contents($file));
		}
		else
		{
			// Return a 404 status
			$response->status(404);
		}

		// Set the proper headers to allow caching
		$response->headers(array('Content-Type' => File::mime_by_ext($ext), 'Content-Length' => strval(filesize($file)), 'Last-Modified' => strval(date('r', filemtime($file)))));
	}
}