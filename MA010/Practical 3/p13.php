<?php 

	$array1=array(1,2,3,4,5,6);
	$array3=array(7,8,9,10,11,12);
	
	echo"<br/><b>Value of original array is:</b><br/>";
	print_r($array1);

	$array2=array('a','b','c'); 
	array_push($array1,$array2); 
	echo"<br/><b>After appending an array:</b><br/>"; 
	print_r($array1); 
	$var="new variable"; 
	
	echo"<br/><b>After appending a value:</b><br/>";
	array_push($array1,$var); 
	print_r($array1); 
	
	echo"<br/><b>After appending to itself :</b><br/>"; 
	array_push($array1,$array3);
	print_r($array1); ?> 