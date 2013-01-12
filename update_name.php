<?php

$name=$_POST['name'];
$username=$_POST['username'];

$con=mysql_connect( "localhost","root","");
mysql_select_db ("artmaster",$con);

mysql_query("Update user Set name='$name' where username='$username'")  or die ('could not updated:'.mysql_error());
			echo "<script type='text/javascript'>
			alert('Name Update Successfull!');
			window.location='settings.php';
			</script>";


?>