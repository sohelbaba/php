<?php
	//echo $_COOKIE["Name"]."<br>";
	date_default_timezone_set("Asia/Calcutta");
	//echo date("h:i:sa") ."<br>";
	$da = date("h:i:sa");
	$start = strtotime($_COOKIE["Name"]);
	$end = strtotime($da);

	$e =$da - $start;
	echo "You Visited this page before : " .date("H:i:sa",$e);
?>