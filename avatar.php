<?php 

	session_start();
	if (!isset($_COOKIE['user']))
	{
		header("location:index.php");
	}

	$username1  = $_COOKIE["user"];

$username1  = $_COOKIE["user"];
$con=mysql_connect( "localhost","root","");
mysql_select_db ("artmaster",$con);
if(@$_POST ['submit'])
{
$file = $_FILES ['file'];
$name1 = $_POST['name'];
$type = $file ['type'];
$size = $file ['size'];
$tmppath = $file ['tmp_name']; 
if($name1!="")
{
if(move_uploaded_file ($tmppath, 'image/avatar/'.$name1))//image is a folder in which you will save image
{
$query="insert into avatar set photo='$name1', username='$username1'";
mysql_query ($query) or die ('could not updated:'.mysql_error());
			echo "<script type='text/javascript'>
			alert('Upload Successful!');
			window.location='avatar.php';
			</script>";
}
}
}
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
					   <li><a href="main.php">Home</a></li>
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
	  

<!-- Navigation Bar End -->

<div class="container">
<form class="form-horizontal" name="form" action="" method="post" enctype="multipart/form-data">
<fieldset>

	<legend>Change Avatar</legend>

  <div class="control-group">
    <label class="control-label">Photo</label>
    <div class="controls">
      <input type="file" name="file" />
    </div>
  </div>
  
    <div class="control-group">
    
    <div class="controls">
      <input type="hidden" name="name" class="file" value="<?php echo $username1 ?>"/>
    </div>
  </div>
  

	
  <div class="control-group">
	<div class="controls">
		<button type="submit" name="submit" class="btn" value="Submit">Upload</button>
	</div>
  </div>
  
<legend></legend>
  
</fieldset>  
</form>

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

</div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>	
	
    	
</body>
</html>