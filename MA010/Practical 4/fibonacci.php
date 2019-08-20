<!DOCTYPE html>
<html>
<head>
	<title>Fibonacci Series</title>
</head>
<body>
		<form action="" method="POST">
			NUMBER : <input type="text" name="nm">
			<input type="submit" name="submit">
		</form>

		<?php

			$nm = $_POST['nm'];
			$a=0;
			$b=1;
			echo $a;
			echo $b;

			for($i=2;$i<=$nm;$i++)
			{
				$c= $a+$b;
				echo $c;
				$a= $b;
				$b=$c;
			}
		?>
</body>
</html>