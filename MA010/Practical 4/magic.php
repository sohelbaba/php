<!DOCTYPE html>
<html>
<head>
	<title>Magic Number</title>
</head>
<body>

	<?php
		
		$a = 407;
		$b =$a;
		$sum=0;
		echo "Number : ".$a."<br>";
		$d=0;
		$rev = 0;
		while (floor($a)) 
		{
			$d = $a % 10;
		 	$sum = $sum + ($d * $d *$d) ;
			$a = $a / 10;
		}


		if($b == $sum)
			echo"Number is Magic Number :<br>";
		else
			echo "number is not Magic Number: <br>";
	?>

</body>
</html>