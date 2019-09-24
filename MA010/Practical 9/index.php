<!DOCTYPE html>
<html>
<head>
	<title>User Registration Form</title>
</head>
<body>
		<form action="validate.php" method="POST" name="Myform">
			<table border="1">
				<tr>
					<td><b style="color:red">*</b>User Name : </td>
					<td><input type="text" name="unm" id="unm" onchange="validateUserName()">
						<label id="demo" style="color:red"></label>
					</td>
				</tr>
				<tr>
					<td><b style="color:red">*</b>Password  :</td>
					<td><input type="Password" name="ps" id="ps" onchange="validatePassword()">
						<label id="psdemo" style="color:red"></label>
					</td>
				</tr>
				<tr>
					<td><b style="color:red">*</b>Email : </td>
					<td><input type="text" name="em" id="em" onchange="validateEmail()">
						<label id="emdemo" style="color:red"></label>
					</td>
				</tr>
				<tr>
					<td><b style="color:red">*</b>Conatct Number : </td>
					<td><input type="text" name="cno" id="cno" onchange="validateNumber()">
						<label id="cnodemo" style="color:red"></label>
					</td>
				</tr>
				<tr>
					<td>Address : </td>
					<td><input type="text" name="add" id="add"></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="submit" onclick="submitform()"></td>
				</tr>
			</table>
		</form>

		<a href="login.php">Alerady Register!!!</a>
</body>
</html>

<script type="text/javascript">
	
	function validateUserName() 
	{
		var x = document.forms["Myform"]["unm"].value;
		if (x.length == 6) 
 		{
 			document.getElementById("demo").innerHTML = "{ Ok!!! }";
 			return true;
  		}
  		else
  		{
  			document.getElementById("demo").innerHTML = "{ UserName must be 6 Charcter!!! }";
  			return false;
  		}
 	
	} 

	function validatePassword() 
	{
		var str = document.forms["Myform"]["ps"].value;

 		if (str.match(/[a-z]/g) || str.match(/[A-Z]/g) && str.match(/[0-9]/g) || str.match(/[^a-zA-Z\d]/g) && str.length >= 8 )
 		{
            document.getElementById("psdemo").innerHTML = "{ Ok!!! }";  
  		}
  		else 
  		{
            document.getElementById("psdemo").innerHTML = "{ 8 to 12 char, at least one numeric, alpha and special char!! }";
  		}
 	
	} 


	function validateEmail() 
	{

 		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(document.forms["Myform"]["em"].value) == false) 
        {
             document.getElementById("emdemo").innerHTML = "{Emaill xyz@gmai.com}";
            return false;
        }

         document.getElementById("emdemo").innerHTML = "{ OK!!!}";
 	
	} 

	function validateNumber() 
	{

 		var reg = /([0-9])$/;

        if (reg.test(document.forms["Myform"]["cno"].value) == false) 
        {
             document.getElementById("cnodemo").innerHTML = "{+91 9754564564123 Formate}";
            return false;
        }

         document.getElementById("cnodemo").innerHTML = "{ OK!!!}";
 	
	} 
</script>