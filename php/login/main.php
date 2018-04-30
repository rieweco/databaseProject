<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="../../styles/style.css">
</head>

<body>
<img src="../../images/main_image.jpg" alt="Dunder Mifflin">

<form action="Employee_page.php" method="post">

	<div class = "Employee_Login">

		<label for="usernamename"><b>Username:</b></label>
		<input type="text" name ='uname' placeholder="Employee number" required>
		<br />
		<br />

		<label for="password"><b>Password:</b></label>
		<input type="password" name='pword' placeholder="Password" required>
		<br />

		<input type="submit" value="login">
		<input type="reset" value="Reset">
	</div>
</form>
</body>
</html>
