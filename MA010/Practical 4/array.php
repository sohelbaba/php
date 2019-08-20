<!DOCTYPE html>
<html>
<head>
	<title>Array</title>
</head>
<body>
	<form action="" method="POST">
		No1 :  <input type="text" name="no1"><br>
		No2 :  <input type="text" name="no2"><br>
		No3 :  <input type="text" name="no3"><br>
		No4 :  <input type="text" name="no4"><br>
		No5 :  <input type="text" name="no5"><br>
		No6 :  <input type="text" name="no6"><br>
		No7 :  <input type="text" name="no7"><br>
		No8 :  <input type="text" name="no8"><br>
		No9 :  <input type="text" name="no9"><br>
		No10 : <input type="text" name="no10"><br>
		<input type="submit" name="submit">
	</form>

	<?php
		if(isset($_REQUEST['submit']))
		{

			$Array = array($_POST['no1'],$_POST['no2'],$_POST['no3'],$_POST['no4'],$_POST['no5'],$_POST['no6'],$_POST['no7'],$_POST['no8'],$_POST['no9'],$_POST['no10']);

			$len = sizeof($Array);
		
			$sum=0;
			for($i=0;$i<$len;$i++)
			{
				$sum = $sum + $Array[$i];
			}
			echo "Sum of Array Element : ".$sum."<br>";
			echo "<br>";

			echo "Array in Acending order<br>";
			sort($Array);
			for($i=0;$i<$len;$i++)
			{
				echo $Array[$i]." ";
			}
			echo "<br>";
			echo "<br>";
			echo "Array in Decending order<br>";
			rsort($Array);
			for($i=0;$i<$len;$i++)
			{
				echo $Array[$i]." ";
			}
			echo "<br>";
			echo "<br>";
			echo "Even Element in Array<br>";
			for($i=0;$i<$len;$i++)
			{
				if($i %2 == 0)
					echo $Array[$i]." ";
			}
			echo "<br>";echo "<br>";

			echo "Odd Element in Array<br>";
			for($i=0;$i<$len;$i++)
			{
				if($i %2 !== 0)
					echo $Array[$i]." ";
			}
			echo "<br>";
			echo "<br>";
			sort($Array);
			echo "Element in Array<br>";
			for($i=0;$i<$len;$i++)
			{
					echo $Array[$i]." ";
			}

	

		}

	?>
</body>
</html>