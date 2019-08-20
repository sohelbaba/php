<!DOCTYPE html>
<html>
<head>
	<title>Program 2</title>
</head>
<body>
		<table border="1" style="width: 250px;text-align: center">
			<tr>
				<td>Values</td>
				<td>Data Types</td>
			</tr>
			<tr>
				<td><?php $var = True; ?> True </td>
				<td><?php echo gettype($var) ; ?></td>
			</tr>
			<tr>
				<td><?php $var = 9; ?> 9 </td>
				<td><?php echo gettype($var) ; ?></td>
			</tr>
			<tr>
				<td><?php $var = 7.5; ?> 7.5 </td>
				<td><?php echo gettype($var) ; ?></td>
			</tr>
			<tr>
				<td><?php $var = "Hello123"; ?> Hello123 </td>
				<td><?php echo gettype($var) ; ?></td>
			</tr>
			<tr>
				<td><?php $var = Array(1,2,3); ?> Array(1,2,3) </td>
				<td><?php echo gettype($var) ; ?></td>
			</tr>
			<tr>
				<td><?php $var = null; ?> null </td>
				<td><?php echo gettype($var) ; ?></td>
			</tr>
			<tr>
				<td><?php $var = tmpfile(); ?> tmpfile() </td>
				<td><?php echo gettype($var) ; ?></td>
			</tr>

		</table>
</body>
</html>