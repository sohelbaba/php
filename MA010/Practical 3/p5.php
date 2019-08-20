<?php  
	echo "<table width='100' align='center'>";  
	for($i=1; $i<=20; $i=$i+1) 
	 {
	    if($i % 2 == 0) 
	      {  
	        echo "<tr>";
	        echo "<td style='background-color:yellow'>";    
	    	echo "<center>" . $i;  
	    	echo "</td>";
	    	echo "</tr>"; 
	       } 
	       else
	       { 
	         echo "<tr>";
	         echo "<td style='background-color:red'>";   echo $i;   
	          echo "</td>";  
	          echo "</tr>";   
	      } 
	  } 
	  echo "</table>";
 ?>