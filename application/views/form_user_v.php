<!DOCTYPE html>
<html>
<head>
	<title>Form Input User</title>
</head>
<body>
	<form action="http://localhost/CI/index.php/User/add" method="post">
		Username<br/>
		<input type="text" name="username"></input><br/>
		Password<br/>
		<input type="password" name="password"></input><br/>
		Fullname<br/>
		<input type="text" name="fullname"></input><br/>
		Level<br/>
		<select name="level">
			<option value="admin">Admin</option>
			<option value="user">User</option>
		</select><br/>
		<input type="submit" value="simpan"></input>
	</form>
</body>
</html>