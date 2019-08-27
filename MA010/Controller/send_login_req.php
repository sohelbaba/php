<?php
	
	//send data of user to check the authentication to Model/user.php\
	require_once('Model/Model.php');

	class Send_User_Req
	{
		public $user;

		public function __constructor()
		{
			$this->user = new User();
		}
		
		public function Get_Details()
		{
			if(isset($_POST['submit']))
			{
				$us = $this->user->Check_Login("Sohel",123);
			}
		}
		
	}
?>