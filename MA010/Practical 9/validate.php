<?php

	$conn= mysqli_connect("127.0.0.1:3308","root","","mca10");
	if (!$conn)
	{
    	die("Connection failed: " . mysqli_connect_error());
	}

	if(isset($_POST['submit']))
	{
		print $unm = $_POST['unm'];
		print $ps = $_POST['ps'];
		print $em =$_POST['em'];

		print $sql = mysqli_query($conn,"insert  into usermaster (username,passwoprd,name) values('".$unm."','".$ps."','".$em."')");
		if(!$sql)
		{
			echo "data Not Inserted";
		}
		else
		{
			echo "data Inserted";
		}

	}
?>