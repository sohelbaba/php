<!DOCTYPE html>
<html>
<head>
	<title>Student Registration Form</title>
</head>
<body>
		<form method="POST" action="Done.php" enctype="multipart/form-data">
			<table border="1" align="center">
				<tr>
					Student Information
				</tr>
				<tr>
					<td>Exam Number</td>
					<td><input type="text" name="examno"></td>
				</tr>
				<tr>
					<td>Course</td>
					<td>
						<select name="course">
							<option value="">Select</option>
							<option value="BCA">BCA</option>
							<option value="MCA">MCA</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Java</td>
					<td><input type="text" name="java"></td>
				</tr>
				<tr>
					<td>RTI</td>
					<td><input type="text" name="rti"></td>
				</tr>
				<tr>
					<td>Python</td>
					<td><input type="text" name="python"></td>
				</tr>
				<tr>
					<td>ISP</td>
					<td><input type="text" name="isp"></td>
				</tr>
				<tr>
					<td>CNS</td>
					<td><input type="text" name="cns"></td>
				</tr>
				<tr>
					<td>Upload Photo</td>
					<td> <input type="file" name="uploadedFile" /></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit"></td>
				</tr>
			</table>
		</form>
</body>
</html>