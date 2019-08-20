<?php

	$try[] = array("11", "12", "15", "22", "41", "42"); 
	$try[] = array("6", "7", "16", "17", "22", "23"); 

	$count = count ($try);
	for ($i=0; $i<$count; $i++)
	{
		  $countmore=count($try[$i]); 
		  for ($j=0; $j < $countmore; $j++)
		  { 
		  	 print ("i$i j$j " . $try[$i][$j] . "<br> ");  
		  } 
		  print ("<br>"); 
	}
 ?>