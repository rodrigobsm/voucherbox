<?php
/**
 * Fuel
 *
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.8
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2016 Fuel Development Team
 * @link       http://fuelphp.com
 */

namespace Oil;

/**
 * Oil\Scaffold Class
 *
 * @package		Fuel
 * @subpackage	Oil
 * @category	Core
 */
class Generate_Admin extends Generate_Scaffold
{
	public static $view_subdir = 'admin/';

	public static $controller_prefix = 'Admin_';
	public static $model_prefix = '';

	public static $controller_parent = 'Admin';

	public static function _init()
	{
		static::$controller_parent = \Config::get('controller_prefix', 'Controller_').static::$controller_parent;

		parent::_init();
	}

	public static function forge($args, $subfolder)
	{

		$default_files = array(
			array(
				'source' => $subfolder.'/controllers/template.php',
				'location' => 'classes/controller/template.php',
				'type' => 'controller',
			),
			array(
				'source' => $subfolder.'/controllers/admin.php',
				'location' => 'classes/controller/admin.php',
				'type' => 'controller',
			),
			array(
				'source' => '/template.php',
				'location' => 'views/admin/template.php',
				'type' => 'views',
			),
			array(
				'source' => 'dashboard.php',
				'location' => 'views/admin/dashboard.php',
				'type' => 'views',
			),
			array(
				'source' => 'login.php',
				'location' => 'views/admin/login.php',
				'type' => 'views',
			),
		);

		foreach ($default_files as $file)
		{
			// check if there's a template in app, and if so, use that
			if (is_file(APPPATH.'views/'.static::$view_subdir.$file['source']))
			{
				Generate::create(APPPATH.$file['location'], file_get_contents(APPPATH.'views/'.static::$view_subdir.$file['source']), $file['type']);
			}
			else
			{
				Generate::create(APPPATH.$file['location'], file_get_contents(\Package::exists('oil').'views/'.static::$view_subdir.$file['source']), $file['type']);
			}
		}

		parent::forge($args, $subfolder);
	}
}

/* End of file oil/classes/generate/admin.php */
