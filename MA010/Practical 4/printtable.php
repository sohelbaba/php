<?php
	$number = $_POST['nm'];
	echo "Number : ".$_POST['nm'] ."<br>";
	echo "<table border='1'>";
	for($i=1;$i<=$number;$i++)
		echo "<tr><td>".$number." * ".$i." = ".$number * $i."<br>"."</tr></td>";
?>