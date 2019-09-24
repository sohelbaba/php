<!DOCTYPE html>
<html>
<head>
	<title>Username Suggest(Google Suggestion)</title>
<script type="text/javascript">
	
	function showResult(str) 
	{
 		if (str.length==0)
 		{
   			document.getElementById("livesearch").innerHTML="";
    		document.getElementById("livesearch").style.border="0px";
		}
  
 		if (window.XMLHttpRequest)
 		{
 			//object created
    		xmlhttp=new XMLHttpRequest();
  		} 
 
 		 xmlhttp.onreadystatechange=function() 
 		 {
    		if (this.readyState==4 && this.status==200)
    		{

      			document.getElementById("livesearch").innerHTML=this.responseText;
   			}
  		}
  		xmlhttp.open("GET","p1_search.php?p="+str,true);
  		xmlhttp.send();
}
</script>
</head>
<body>
	<h1>Ajax Username Suggestions : </h1><br>
	<form action="" method="POST">
		Username : <input type="text" name="unm"  onkeyup="showResult(this.value)"><br><br><br>

		<b>Suggestions : </b><br>

		<p id="livesearch"> </p><br>

	</form>
</body>
</html>