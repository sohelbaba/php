<?php
	
	session_start();
	require('database.php');
	$unm = $_POST['unm'];
	$ps = $_POST['ps'];

	$sql = "select * from usermaster where username = '".$unm."' and passwoprd = '".$ps."'";
	$res = mysqli_query($conn,$sql);
	if($res)
	{
		$_SESISON['logged_in'] = $unm;
		header('Location : home.php');
	}
	else
	{
		echo "Check Username and password";
	}

?>