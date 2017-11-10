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
 * The Recipients Controller.
 *
 * This controller is reponsible for recipients management.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Recipients extends Controller_Template
{
	/**
	 * The main action
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
	    $data = array();
	    $data["recipients"] = \Model_Recipients::find('all');
        $this->template->title = "Recipients";
        $this->template->content = \View::forge('recipients/index', $data);
	}

}
