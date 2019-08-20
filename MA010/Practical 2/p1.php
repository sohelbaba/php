<!DOCTYPE html>
<html>
<head>
	<title>Program 1</title>
</head>
<body>
	<?php
		echo "Checking the data types <br>";
		$x=1001;
		echo gettype($x);
		echo "changing the data type int to double <br>";
		echo settype($x,'double');
		//settype(var, type)
		echo $x;
	?>
</body>
</html>