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
	    $data["recipients"] = \Model_Recipient::find('all');
        $this->template->title = "Recipients";
        $this->template->content = \View::forge('recipients/index', $data);
	}

    public function action_get($id)
    {
        echo json_encode(\Model_Recipient::find($id)->to_array());
        return false;
    }

    public function action_set()
    {
        if (!empty($_POST["id_recipient"])) {
            // update
            $record = \Model_Recipient::find($_POST["id_recipient"]);
            $record->name = $_POST["name"];
            $record->email = $_POST["email"];
        } else {
            // new
            $record = \Model_Recipient::forge($_POST);
            $record->id_recipient = null;
        }

        echo ($record->save()) ? '1':'0';
        return false;
    }

    public function action_del($id)
    {
        $record = \Model_Recipient::find($id);
        echo ($record->delete()) ? '1':'0';
        return false;
    }

}
