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

	$vote  = $_POST['vote'];
	$img_id = $_POST['img_id'];
	$not_voted = 0;
	
	mysql_connect($local,$user,$pass) or die(mysql_error());
	
	mysql_select_db($database_name) or die(mysql_error());

	
	//	Duplicate Vote Detection 1 - TBD
	$test2r = mysql_query("SELECT * FROM user WHERE username='$username'");
	$user_info = mysql_fetch_row($test2r);


	$test = mysql_query("SELECT * FROM vote_table WHERE user_id='$user_info[0]' AND img_id='$img_id'");
	$num_rows = mysql_num_rows($test);

	if ($num_rows > 0) {
		$not_voted = 0;
	}
	else {
		$not_voted = 1;
	}


	if($not_voted == 1){

		$rtt = mysql_query("SELECT * FROM table_img WHERE id='$img_id'");
		$row = mysql_fetch_row($rtt);
	
		$newcumulative_vote = $row[6] + $vote;
		$newtotal_vote = $row[7] + 1;
		ini_set("precision", 3);
		$avg = $newcumulative_vote / $newtotal_vote;
	
		

		mysql_query("UPDATE table_img SET cumulative_vote='$newcumulative_vote' WHERE id='$img_id'") or die(mysql_error());
		mysql_query("UPDATE table_img SET total_vote='$newtotal_vote' WHERE id='$img_id'") or die(mysql_error());
		mysql_query("UPDATE table_img SET avg_rating='$avg' WHERE id='$img_id'") or die(mysql_error());
	

	
		//ADD NEW VOTE TO VOTE TABLE

		mysql_query("INSERT INTO vote_table(user_id,img_id) VALUES('$user_info[0]','$img_id')") or die(mysql_error());
	
	}

	echo "<script type='text/javascript'>
			window.location='image.php?id=$img_id';
		  </script>";
	
?>