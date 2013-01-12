<?php

$password=$_POST['password'];
$username=$_POST['username'];

$con=mysql_connect( "localhost","root","");
mysql_select_db ("artmaster",$con);

mysql_query("Update user Set password='$password' where username='$username'")  or die ('could not updated:'.mysql_error());
			echo "<script type='text/javascript'>
			alert('Password Update Successful!');
			window.location='settings.php';
			</script>";


?>