<?php

	session_start();
	require_once('database.php');
	if(isset($_POST['submit']))
	{
		$unm = $_POST['unm'];
		$ps = $_POST['ps'];

		$sql = "select * from usermaster where username = '".$unm."' and passwoprd = '".$ps."'";
		if(mysqli_query($conn,$sql))
		{
			$_SESSION["name"] = $unm;
			header('Location:home.php');
		}
		else
		{
			header('Location:index.php');
		}
	}
?>