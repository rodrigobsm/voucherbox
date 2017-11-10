<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.8
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2016 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Dashboard Controller.
 *
 * This is the first page seen by the user. It gives an overview of the current status of the system.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Dashboard extends Controller_Template
{
	/**
	 * The dashboard page - default home page
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
        $data = array();
        $data["total_recipients"] = count(\Model_Recipients::find('all'));
        $this->template->title = "Dashboard";
        $this->template->content = \View::forge('dashboard/index', $data);
	}

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
        $data = array();
        $this->template->title = "Page Not Found";
        $this->template->content = \View::forge('dashboard/404', $data);
	}
}
