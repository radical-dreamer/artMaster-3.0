<?php
	require 'config.php';
		// Inialize session
	session_start();
	if (!isset($_COOKIE['user']))
	{
		header("location:index.php");
	}
	$username  = $_COOKIE["user"];
	
?>

<?php

	$comment  = $_POST['comment'];
	$img_id = $_POST['img_id'];
	
	
	mysql_connect($local,$user,$pass) or die(mysql_error());
	
	mysql_select_db($database_name) or die(mysql_error());
	
	mysql_query("INSERT INTO img_comment(img_id,comment,username, date_comment) values('$img_id','$comment','$username',CURDATE())") or die(mysql_error());
	
	echo "<script type='text/javascript'>
			
			window.location='image.php?id=$img_id';
			</script>";
	
?>

<html>
<head>
<style type="text/css" media="all">@import "style/style.css";</style> 

</head>
<body>

</p>User file created. Please Login! Back to <a href="index.php">Login</a> page.</p>

</body>
</html>