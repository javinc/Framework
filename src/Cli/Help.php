<?php //-->

//activated by: generate product

namespace Eve\Framework\Cli;

use Handlebars\Handlebars;
use Handlebars\Loader\StringLoader as HandlebarsLoader;

class Help extends \Eve\Framework\Base
{
	protected $cwd = null;
	
	/**
	 * We need the CWD
	 *
	 * @param string
	 */
	public function __construct($cwd) 
	{
		$this->cwd = $cwd;
	}
	
	/**
	 * Runs the CLI process
	 *
	 * @param array
	 * @return mixed
	 */
	public function run(array $args) 
	{
		Index::info('Help Menu');
		Index::info('- `eve generate <schema> <namespace>`     Generates files based on schema');
		Index::info('- `eve database <schema> <namespace>`     Generates database table/s schema');
		
		die(0);
	}
}