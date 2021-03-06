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
class Kohana_elFinder extends Core_elFinder {

	private $config_name = 'elfinder';
	private $config_group_name = 'default';
	protected $config = array();
	protected $default_view = 'elfinder';

	/**
	 * Creates a new elFinder object.
	 *
	 * @param   string  configuration
	 * @return  elFinder
	 */
	public static function factory($config_group_name = NULL)
	{
		return new elFinder($config_group_name);
	}

	/**
	 * Creates a new elFinder object.
	 *
	 * @param   string  configuration
	 * @return  void
	 */
	public function __construct($config_group_name = NULL)
	{
		$this->config_group_name = !empty($config_group_name) ? $config_group_name : $this->config_group_name;
		$this->config = Kohana::config($this->config_name.'.'.$this->config_group_name);
		$this->config['jq_selector'] = 'jq_'.$this->config_name.'_'.$this->config_group_name;
		$this->config['js_cmd_route'] = Route::url($this->config_name, array('config' => $this->config_group_name));
		if($this->config['lang'] == NULL)
		{
			$this->config['lang'] = explode('-', I18n::lang());
			$this->config['lang'] = $this->config['lang'][0];
		}
		parent::__construct($this->config);
	}

	/**
	 * Render the elFinder.
	 *
	 * @param   string   string of the view to use
	 * @return  string  output (HTML)
	 */
	public function render($view = NULL)
	{
		if ($view === NULL)
		{
			$view = $this->default_view;
		}

		$view = View::factory($view, $this->config);

		return $view->render();
	}

	/**
	 * Render the elFinder.
	 *
	 * @return  string  output (HTML)
	 */
	public function __toString()
	{
		return $this->render();
	}
}