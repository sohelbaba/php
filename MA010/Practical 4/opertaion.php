<!DOCTYPE html>
<html>
<head>
	<title>Airthmatic Operation</title>
</head>
<body>
	<form action="" method="POST">
		NUMBER 1 : <input type="text" name="nm1"><br><br>
		NUMBER 2 : <input type="text" name="nm2"><br><br>
		<input type="submit" name="ADDITION" value="ADDITION">
		<input type="submit" name="SUBTRACTION" value="SUBTRACTION">
		<input type="submit" name="MULTIPLICATION" value="MULTIPLICATION">
		<input type="submit" name="DIVISION" value="DIVISION">
	</form>
	
	<br><br>
	<?php

		$n1 = $_POST['nm1'];
		$n2 = $_POST['nm2'];

		if(isset($_POST['ADDITION']))
		{
			$sum = $n1 + $n2;
			echo "ADDITION : ". $sum ."<br>";
		}

		if(isset($_POST['SUBTRACTION']))
		{
			$sum = $n1 - $n2;
			echo "SUBTRACTION : ". $sum."<br>";
		}

		if(isset($_POST['MULTIPLICATION']))
		{
			$sum = $n1 * $n2;
			echo "MULTIPLICATION : ". $sum."<br>";
		}

		if(isset($_POST['DIVISION']))
		{
			$sum = $n1 / $n2;
			echo "DIVISION : ". $sum."<br>";
		}
	?>
</body>
</html>