<!DOCTYPE html>
<html>
<head>
	<title>Prime Number</title>
</head>
<body>
		<?php
			$number = 7;
			for ($i = 2; $i <= $number-1; $i++) 
			{  
      			if ($number % $i == 0) 
      			{  
      				$value= True; 
      			}
      		}

      		if (isset($value) && $value) {  
    				 echo 'The Number '. $number . ' is not prime';  
			}  else {  
   					echo 'The Number '. $number . ' is prime';  
   			}

		?>
</body>
</html>