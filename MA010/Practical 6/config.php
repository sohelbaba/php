<?php

	$conn= mysqli_connect("127.0.0.1:3308","root","","student");
	if (!$conn)
	{
    	die("Connection failed: " . mysqli_connect_error());
	}
?>