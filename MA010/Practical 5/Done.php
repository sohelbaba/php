<?php

if(isset($_POST['submit']))
{
  // get details of the uploaded file
	$examno = $_POST['examno'];
	$Course = $_POST['course'];
	$java = $_POST['java'];	
	$python = $_POST['python'];
	$isp = $_POST['isp'];
	$rti = $_POST['rti'];
	$cns = $_POST['cns'];

	$tot = $java+$rti+$isp+$cns+$python;
	$per = $tot/5 * 100;

	if($per > 70)
		$grade ="Distinction";
	elseif ($per > 50) {
		$grade ="First Class";
	}
	elseif ($per > 40) {
		$grade ="Second Class";
	}
	elseif ($per > 33) {
		$grade = "Pass Class";
	}
	else
	{
		$grade ="Fail";
	}

	function myerror($error_no,$error_msg)
	{
		echo "Error : [ ".$erronno ."] : ".$error_msg;
		echo "This will end file";

	}

	set_error_handler("myerror");

	$fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
	$fileName = $_FILES['uploadedFile']['name'];
	$fileSize = $_FILES['uploadedFile']['size'];
	$fileType = $_FILES['uploadedFile']['type'];
	$fileNameCmps = explode(".", $fileName);
	$fileExtension = strtolower(end($fileNameCmps));

	$uploadFileDir = '../uploaded_files/';
	$newFileName = md5(time() . $fileName) . '.' . $fileExtension;
	$dest_path = $uploadFileDir . $newFileName;

	if($fileSize > 25000)
		echo "File Size is more than 25kb";

	if($fileExtension == 'jpg' ||  $fileExtension == 'jpeg' || $fileExtension == 'png')
	{
		if(move_uploaded_file($fileTmpPath, $dest_path)) 
		{
		 	 echo "File is successfully uploaded ";
		}
		else
		{
	  		die("Error :: Uploading File");
		}
	}
	else
	{
		echo "File should be (.jpg,.jpeg,.png)";
	}
}
?>

<table border="1">
	<tr>Student Information</tr>
	<tr>
		<td>Exam No : </td>
		<td><?php echo $examno; ?></td>
	</tr>
	<tr>
		<td>Course : </td>
		<td><?php echo $Course; ?></td>
	</tr>
	<tr>
		<td>Java : </td>
		<td><?php echo $java; ?></td>
	</tr>
	<tr>
		<td>PHP : </td>
		<td><?php echo $rti; ?></td>
	</tr>
	<tr>
		<td>Python :  </td>
		<td><?php echo $python; ?></td>
	</tr>
	<tr>
		<td>ISP : </td>
		<td><?php echo $isp; ?></td>
	</tr>
	<tr>
		<td>CNS : </td>
		<td><?php echo $cns; ?></td>
	</tr>
	<tr>
		<td>Total : </td>
		<td><?php echo $tot; ?></td>
	</tr>
	<tr>
		<td>Percentage  : </td>
		<td><?php echo $per; ?></td>
	</tr>
	<tr>
		<td>Class</td>
		<td><?php echo $grade ;?></td>
	</tr>

</table>

