<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
</head>
<body>
		<form action="" method="POST">
			Marks 1 : <input type="text" name="m1"><br>
			Marks 2 : <input type="text" name="m2"><br>
			Marks 3 : <input type="text" name="m3"><br>
			Marks 4 : <input type="text" name="m4"><br>
			Marks 5 : <input type="text" name="m5"><br>
			<input type="submit" name="submit">
		</form>

		<?php

			$m1 = $_POST['m1'];
			$m2 = $_POST['m2'];
			$m3 = $_POST['m3'];
			$m4 = $_POST['m4'];
			$m5 = $_POST['m5'];

			if(isset($_POST['submit']))
			{

				$tot = $m1 + $m2 + $m3+ $m4+ $m5;
				$per = $tot/5;

			if($m1 < 40 && $m2 < 40 && $m3 < 40 && $m4 < 40 && $m5 < 40)
				echo "Fail<br>";
			else

				if($per >  70)
					echo "Distinction<br>";
				elseif ($per > 60) {
					echo "First Class<br>";
				}
				elseif ($per > 50) {
					echo "Second Class<br>";
				}
				elseif ($per > 40) {
					echo "Pass Class<br>";
				}

			}
		?>
</body>
</html>