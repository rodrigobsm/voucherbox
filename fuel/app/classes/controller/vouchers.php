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
class Controller_Vouchers extends Controller_Template
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
	    $data["vouchers"] = \Model_Voucher::find('all');
        $this->template->title = "Vouchers";
        $this->template->content = \View::forge('vouchers/index', $data);
	}

    public function action_table()
    {
        $data = array();
        $list = \Model_Voucher::find('all');
        foreach ($list as $item) {
            $columns = $item->to_array();
            $columns["action"] = '<div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle btn-sm" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                    <i class="fa fa-cog"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item recipient-edit-btn" data-id="'.$columns["id_voucher"].'"><i
                                                class="fa fa-pencil"></i> Edit</a>
                                    <a class="dropdown-item recipient-delete-btn" data-id="'.$columns["id_voucher"].'"><i
                                                class="fa fa-trash"></i> Delete</a>
                                </div>
                            </div>';
            $data["data"][] = array_values($columns);
        }
        header('Content-Type: application/json');
        echo json_encode($data);
        return false;
    }

    public function action_get($id)
    {
        echo json_encode(\Model_Voucher::find($id)->to_array());
        return false;
    }

    public function action_set()
    {
        if (!empty($_POST["id_voucher"])) {
            // update
            $record = \Model_Voucher::find($_POST["id_voucher"]);
            $record->name = $_POST["name"];
            $record->email = $_POST["email"];
        } else {
            // new
            $record = \Model_Voucher::forge($_POST);
            $record->id_voucher = null;
        }

        echo ($record->save()) ? '1':'0';
        return false;
    }

    public function action_del($id)
    {
        $record = \Model_Voucher::find($id);
        echo ($record->delete()) ? '1':'0';
        return false;
    }

}
