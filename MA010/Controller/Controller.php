<?php
	
	require_once('Model/Model.php');
	require_once('Controller/send_user_req.php');
/**
 *  Contains the request and responce
 */
class Controller 
{	
	public $model;

	public function __construct()
	{
		$this->model = new Model();
	}

	public function invoke_user_details()
	{
		$obj = new Send_User_Req();
		$obj->Get_Details();
	}
}
?>