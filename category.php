<?php

	session_start();
	if (!isset($_COOKIE['user']))
	{
		header("location:index.php");
	}
	$username1  = $_COOKIE["user"];
   $cat = isset($_GET['cat']) ? $_GET['cat'] : ''
?>

<!DOCTYPE html>

<html>
<head>
	<title>artMaster v1.0</title>

</head>
<body>

      <a class="brand" href="index.php">artMaster</a>
	  	<ul class="nav">
			<li><a href="index.php">Home</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="reg.php">Register</a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Category <b class="caret"></b></a>
				<ul class="dropdown-menu">
				<li><a href="#">Digital Art</a></li>
					<li><a href="traditional.php">Traditional Art</a></li>
					<li><a href="photography.php">Photography</a></li>
					<li><a href="logo.php">Logo</a></li>
					<li><a href="film.php">Film & Animation</a></li>
					<li><a href="manga.php">Manga and Anime</a></li>
					<li><a href="fanart.php">Fan Art</a></li>
					<li class="divider"></li>
					<li class="nav-header">Nav header</li>
					<li><a href="other.php">Other</a></li>
					<li><a href="all.php">All Artwork</a></li>
				</ul>
			</ul>
			</li>
				 <ul class="nav pull-right">
                      <li><a href="profile.php?username=<?php echo $username1; ?>"><?php echo $username1; ?></a></li>
					  <li class="divider-vertical"></li>
					   <li><a href="main.php"><i class="icon-home icon-black"></i></a></li>
                      <li class="divider-vertical"></li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="photo.php">Photo</a></li>
                          <li><a href="upload.php">Upload Photo</a></li>
                          <li><a href="settings.php">Account Settings</a></li>
                          <li class="divider"></li>
                          <li><a href="logout.php">Logout</a></li>
                        </ul>
						</li>
                 </ul>
			
		</ul>

<fieldset></fieldset>

	<legend>Photo</legend>
	<div class="row-fluid">
	<ul class="thumbnails">
		
<?php
	$con=mysql_connect ("localhost","root","");
mysql_select_db("artmaster",$con);
@$sql="select * from table_img where category='$cat' ";
@$query=mysql_query($sql);

while(@$row=mysql_fetch_array($query))
{
 @$image=$row ['photo'];
 @$id=$row ['id'];
 ?>	
			<li class="span2" >
              <a href="image.php?id=<?php echo $id ?>" class="thumbnail" ><img src="image/<?php echo $image; ?>" class="img-other" width="140px" height="140px"/></a>
			  <center><h5><?php echo $image; ?></h5></center>
			  <h6><center><a href="profile.php?<?php echo $username1 ?>"><?php echo $username1 ?></a><center></h6>
			</li>
<?php
}
?>
		
	</ul>
	</div>

      <hr>

      <footer class="muted">
        <center>
		<p>&copy; artMaster 2012 |
		<a href="index.php">Home</a> |
		<a href="profile.php?username=<?php echo $username1; ?>">Profile</a> |
		<a href="photo.php">Photo</a> |
		<a href="upload.php">Upload Photo</a> |
		<a href="settings.php">Settings</a> |
		<a href="logout.php">Logout</a> |
		<a href="about.php">About</a> |
		&copy; artMaster 2012 
		</p></center>
      </footer>

	  
</body>
</html>