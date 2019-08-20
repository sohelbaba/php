<!DOCTYPE html>
<html>
<head>
	<title>Palindrom Number</title>
</head>
<body>
	<?php
		$a = 121;
		$b =$a;
		echo "Number : ".$a."<br>";
		$d=0;
		$rev = 0;
		while (floor($a)) 
		{
			$d = $a % 10;
			$rev = $rev * 10 + $d;
			$a = $a / 10;
		}


		if($b == $rev)
			echo"Number is Palindrom :<br>";
		else
			echo "number is not Palindrom: <br>";
	?>
</body>
</html>