<?php

	class Connection 
	{
		public $conn;
		public $user;
		public $pass;
		public $db_name;

		function __construct($conn,$user,$pass,$db_name)
		{
			$this->conn = $conn;
			$this->user = $user;
			$this->pass = $pass;
			$this->db_name = $db_name;

			//connnection query
			$connection = mysqli_connect($this->conn,$this->user,$this->pass,$this->db_name);

			if(!$connection)
			{
				echo "Error : 401 Database Error";
			}
		}
	}

?>