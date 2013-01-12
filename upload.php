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
$name1 = $_POST ['name'];
$category1 = $_POST ['category'];
$type = $file ['type'];
$size = $file ['size'];
$tmppath = $file ['tmp_name']; 
if($name1!="")
{
if(move_uploaded_file ($tmppath, 'image/'.$name1))//image is a folder in which you will save image
{
$query="insert into table_img set photo='$name1', user='$username1', category='$category1', date_uploaded=CURDATE()";
mysql_query ($query) or die ('could not updated:'.mysql_error());
			echo "<script type='text/javascript'>
			alert('Upload Successful!');
			window.location='upload.php';
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


<form class="form-horizontal" name="form" action="" method="post" enctype="multipart/form-data">
<fieldset>

	<legend>Upload Photo</legend>

  <div class="control-group">
    <label class="control-label">Photo</label>
    <div class="controls">
      <input type="file" name="file" />
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label">Name</label>
    <div class="controls">
      <input type="text" name="name" class="file"/>
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label">Category</label>
    <div class="controls">
		<select name="category">
			<option value="">Category</option>
			<option value="Digital Art">Digital Art</option> 
			<option value="Traditional Art">Traditional Art</option> 
			<option value="Photography">Photography</option> 
			<option value="Logo">Logo</option> 
			<option value="Film & Animation">Film & Animation</option> 
			<option value="Manga and Anime">Manga and Anime</option> 
			<option value="Fan Art">Fan Art</option> 
			<option value="Other">Other</option> 
		</select>
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
    	
</body>
</html>