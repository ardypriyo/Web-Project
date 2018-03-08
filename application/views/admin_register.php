<!DOCTYPE html>
<html>
<head>
	<title>Register New Administrator</title>
</head>
<body>
	<form method="post" action="<?php echo base_url().'login/admin_register' ?>">
		<table>
			<tr>
				<td>Username</td>
				<td> : </td>
				<td><input type="text" name="username" maxlength="50">
			</tr>
			<tr>
				<td>Full Name</td>
				<td> : </td>
				<td><input type="text" name="full_name" maxlength="70">
			</tr>
			<tr>
				<td>Password</td>
				<td> : </td>
				<td><input type="password" name="password">
			</tr>
			<tr>
				<td colspan="3">
					<button type="submit">Register</button>
					<button type="reset">Reset</button>
				</td>
			</tr>
		</table>		
	</form>
</body>
</html>