<?php

//user info
require_once('Connection.php');
class User 
{
	public $con;
	function __construct()
	{
		$this->con= new Connection("127.0.0.1:3308","root","","mca10");
	}

	public function Get_user_details()
	{
		$sql = "select * from usermaster";
		$res = mysqli_query($this->con,$sql);
		$data = mysqli_fetch_array($res);
		if(!(mysqli_num_rows($data) > 0))
		{
			echo "Error :: 402 Getting Data From Database";
		}
	}

	public function Check_Login($unm,$ps)
	{
		$sql = "select * from usermaster where username = '$unm' and passwoprd ='$ps'";
		$res = mysqli_query($this->conn,$sql);
		$data = mysqli_fetch_array($res);
		if(!(mysqli_num_rows($data) > 0)
		{
			echo "Error :: 408 Login Error";
		}
	}
}

?>