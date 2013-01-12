<?php

$email=$_POST['email'];
$username=$_POST['username'];

$con=mysql_connect( "localhost","root","");
mysql_select_db ("artmaster",$con);

mysql_query("Update user Set email='$email' where username='$username'")  or die ('could not updated:'.mysql_error());
			echo "<script type='text/javascript'>
			alert('Email Update Successful!');
			window.location='settings.php';
			</script>";


?>