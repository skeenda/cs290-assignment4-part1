<?php

	if(isset($_GET['logout'])){
		session_start();
		unset($_SESSION);
		session_destroy();
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8" />
		<title>Login Page </title>
	</head>
	
	<body>
		<form action = "content1.php" method= "post">
			NAME: <input type = "text" name="username"><br>
			<input type = "submit" value="Login">
		</form>
	</body>
</html>