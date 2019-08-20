<?php

	session_start();
	if($_SESSION["name"] == NULL)
	{
		echo"“You are not logged in";
		echo "<a href='login.php'>Login</a>";
	}
	else
	{
		echo "Login<br>";
		echo "HELLO".$_SESSION["name"];
	}
?>

<a href="logout.php">Log Out</a>