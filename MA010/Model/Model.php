<?php

	/**
	 * Model Class
	 */

	require_once('Model/User.php');
	class Model
	{
		public void function login_req()
		{
			$login = new User();
			$login->Check_Login("sohel",123);
		}
	}

?>