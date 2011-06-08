# Kohana-elFinder

This is a module for integration elFinder with Kohana 3.1.

To configure the module see the file in the config. All settings in the file correspond to the settings elFinder.
For deteils see http://elrte.org/redmine/projects/elfinder/wiki/Connector_Configuration_EN#PHP

# Requirements
* jQuery, tested on version 1.6.1.

# Example
public function action_index()
{
	...
	$this->template->elfinder_0 = elFinder::factory();
	$this->template->elfinder_1 = elFinder::factory('user');
	...
}

In example 'user' is a name of group in config file.
