<?php 

	$array1 = array("10", 100, 100, "a"); 
	$array2 = array(1, 3, "2", 1); 
	array_multisort($array1, $array2); 
	print_r($array1); 
	echo("<br>"); 
	print_r($array2); 
	?>