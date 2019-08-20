<?php

	require_once('config.php');
	if(isset($_POST['submit']))
	{
		$unm = $_POST['unm'];
		$ps = $_POST['ps'];

		$sql = "select * from usertbl where username = '".$unm."' and password = '".$ps."'";
		if(mysqli_query($conn,$sql))
		{
			echo "Welcome!!!";
		}
		else
		{
			echo "Check Username and password";
		}
	}
?>