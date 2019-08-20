<?php

	require('config.php');
	if(isset($_POST['submit']))
	{
		$unm = $_POST['unm'];
		$ps = $_POST['ps'];
		$mno = $_POST['mobileno'];
		$em = $_POST['email'];
		$gen =$_POST['gen'];
		$city=$_POST['city'];
		$occupation = $_POST['occupation'];
		$dob = $_POST['db'];
		$secque = $_POST['secque'];
		$secans = $_POST['secans'];

		$sql ="INSERT INTO `usertbl`(`Username`, `Password`, `Mobileno`, `Email`, `Gender`, `City`, `Occupation`, `Dob`, `Secret_ques`, `Secret_ans`) VALUES ('".$unm."','".$ps."','".$mno."','".$em."','".$gen."','".$city."','".$occupation."','".$dob."','".$secque."','".$secans."')";

		if (mysqli_query($conn, $sql)) {
    		echo "New record created successfully";
		} else {
   		 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}





	}
?>