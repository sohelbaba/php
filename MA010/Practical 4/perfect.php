<!DOCTYPE html>
<html>
<head>
	<title>Perfect Number</title>
</head>
<body>
	<?php
		
		$a = 6;
		$sum=0;
		for($i=1; $i < $a; $i++)
    	{
        	if ($a%$i == 0)
        	{
            	$sum = $sum + $i;
        	}
    	}

    	if($sum == $a)
    		echo "number is perfect<br>";
    	else
    		echo "number is not perfect<br>";
	?>
</body>
</html>