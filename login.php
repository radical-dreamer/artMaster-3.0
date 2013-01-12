<?php

		include('config.php');
		
		mysql_connect("$local","$user","$pass") or die(mysql_error());
	
		mysql_select_db("$database_name") or die(mysql_error());

		$username =$_POST['username'];
		$password =$_POST['password'];
		
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);
		
		$sql=mysql_query("SELECT * FROM $tbl_name WHERE username='$username' and password='$password'");
		
		$numrows = mysql_num_rows($sql);
		if ($numrows != 0) {
		while ($row = mysql_fetch_assoc($sql)) {
			$username = $row['username'];
			$password = $row['password'];
			$name = $row['name'];
			session_start();
			setcookie("user", $username, time()+3600);
			//session_regenerate_id();
			//$user = mysql_fetch_assoc($result);
			//$_SESSION['name'] = $name;
			//session_write_close();
			header("location:main.php");
		}
		
		}
		else 
		{		
			echo "<script type='text/javascript'>
			alert('Wrong Username or Password');
			window.location='index.php';
			</script>";
		}
?>