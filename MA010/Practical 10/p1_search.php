<?php

	//get value from search page
	$unm = $_GET['p'];
	$hint = array();
	if(strlen($unm) > 0)
	{
		$data = array(
   			"a" => "Akhilesh",
    	    "b" => "bhargav",
    		"c" => "Chamnlal",
    		"d" => "dharmesh",
    		"ak" => "Akhilesh",
    		"am" => "Amisha",
    	);

    
		$latestQuery = strlen($unm);
    	foreach ($data as $key => $element)
    	{
    		 if ($key == $unm)
    		 {
    		 	//echo "  ". $element . "<br>";
        		$hint[$key] = $element;		
   			 }

    	}
	}

	$sol = array();
	$i= 0;
	foreach ($hint as $key => $value) {
		$sol[$i] = $value;
		$i++;
	}

	if(count($sol) == 0)
	{
		echo json_encode("Not Found..........");
	}
	else{

		foreach ($sol as $key) 
		{	
			echo json_encode($key);
		}
	}
	
?>