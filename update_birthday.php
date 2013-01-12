<?php

	$username=$_POST['username'];
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	
	
	$date=$_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day'];

	$con=mysql_connect( "localhost","root","");
	mysql_select_db ("artmaster",$con);

	mysql_query("Update user Set birthdate='$date' where username='$username'")  or die ('could not updated:'.mysql_error());
			echo "<script type='text/javascript'>
			alert('Birthday Update Successful!');
			window.location='settings.php';
			</script>";


?>


	