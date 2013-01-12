<?php
		require 'config.php';
		// Inialize session
		session_start();

		// Check, if user is already login, then jump to secured page
		if (isset($_SESSION['username']))
		{
			header('Location: main.php');
		}
		
	$name = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	
	
	$date=$_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day'];
	
	mysql_connect($local,$user,$pass) or die(mysql_error());
	
	mysql_select_db($database_name) or die(mysql_error());
	
	mysql_query("INSERT INTO user(name,username,password,email,birthdate) values('$name','$username','$password','$email','$date')") or die(mysql_error());
	
?>

<html>
<head>
<style type="text/css" media="all">@import "style/style.css";</style> 

</head>
<body>

</p>User file created. Please Login! Back to <a href="index.php">Login</a> page.</p>

</body>
</html>