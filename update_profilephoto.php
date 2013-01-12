<?php 

	session_start();
	if (!isset($_COOKIE['user']))
	{
		header("location:index.php");
	}


$username1  = $_COOKIE["user"];
$con=mysql_connect( "localhost","root","");
mysql_select_db ("artmaster",$con);

$file = $_FILES['file'];
$name1 = $_POST ['name'];

$tmppath = $file ['tmp_name']; 
if($name1!="")
{
if(move_uploaded_file ($tmppath, 'image/'.$name1))//image is a folder in which you will save image
{
$query="insert into avatar set photo='$name1' where username='$username1'";
mysql_query ($query) or die ('could not updated:'.mysql_error());
			echo "<script type='text/javascript'>
			alert('Upload Successful!');
			window.location='avatar.php';
			</script>";
}
}

?>