<!DOCTYPE html>
<html>
<head>
	<title>Array</title>
</head>
<body>
	<?php
		$student1  = array('a'=>'Sohel' ,'b' => 'Samir','c' => 'Rauhl' );
		extract($student1);
		echo "Variable from array <br>";
		echo $rno =$a ."<br>";
		echo $name =$b ."<br>";
		echo $rno =$c ."<br>";
		$student2  = array(1 =>78 ,2 =>82 ,3 =>83);

		echo "MERGE THE TWO ARRAY <br>";
		print_r(array_merge($student1,$student2));

		echo "<br>";
		$info = array
 				 (array(1,'Sohel',80),
 				 array(2,'Rahul',90),
 				 array(3,'Ramesh',95));

 		print_r($info)

	?>
</body>
</html>