<html>
<?php 

	session_start();
	if (!isset($_COOKIE['user']))
	{
		header("location:index.php");
	}
	
	$username1 = $_COOKIE['user'];
	$username = isset($_GET['username']) ? $_GET['username'] : ''
?>
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
	  
<?php
// build SELECT query
	
	// Connect to MySQL
	$con=mysql_connect( "localhost","root","");
	mysql_select_db ("artmaster",$con);
	
	$name = mysql_query("Select * from user where username='$username'");
	$foto = mysql_query("Select photo from avatar where username='$username'");
?>
<legend>Profile Settings</legend>	
	<table class="table" >
<?php 
while(($row = mysql_fetch_array($name)) && ($row2 = mysql_fetch_array($foto)))
  { ?>
  

  
 <tr>
	<td rowspan="5" width="200" height="200"><a href="image/avatar/<?php echo $row2['photo']; ?>" target="_blank"><img src="image/avatar/<?php echo $row2['photo']; ?>" width="200" height="200" class="thumbnail"></a></td><td>Name</td><td><?php echo $row['name']; ?></td>
 </tr>
 
 <tr>
	<td>Username</td><td><?php echo $username; ?></td>
 </tr>
 
 <tr>
	<td>E-Mail</td><td><?php echo $row['email']; ?></td>
 </tr>
 
  <tr>
	<td>Birthday</td><td><?php echo $row['birthdate']; ?></td>
 </tr>
 
   <tr>
	<td>Country</td><td><?php echo $row['country']; ?></td>
 </tr>
 
 <?php
 
 }
 ?>
 
</table>
	
	  <hr>
      
      <fieldset>

	  <legend>Latest Artwork Upload</legend>
      
      <div class="row-fluid">
	<ul class="thumbnails">
      
      <?php
			$con=mysql_connect ("localhost","root","");
		mysql_select_db("artmaster",$con);
		@$sql="select * from table_img where user='$username' order by id desc LIMIT 6";
		@$query=mysql_query($sql);
		
		while(@$row=mysql_fetch_array($query))
		{
		 @$image=$row ['photo'];
		 @$id=$row ['id'];
		 ?>	
			<li class="span2" >
			<a href="image.php?id=<?php echo $id ?>" class="thumbnail" ><img src="image/<?php echo $image; ?>" class="img-other" width="140px"	height="140px"><center><h5><?php echo $image; ?></h5></center></a>
			
			</li>
		<?php
		}
	?>
    
    	</ul>
	</div>
    <p align="right"><a href="photo.php?user=<?php echo $username; ?>" >Show All</a></p>

      
      	  <legend>Highest Artwork Rating</legend>
          
      <div class="row-fluid">
	<ul class="thumbnails">
      
      <?php
			$con=mysql_connect ("localhost","root","");
		mysql_select_db("artmaster",$con);
		@$sql="select * from table_img where user='$username' order by avg_rating desc LIMIT 6";
		@$query=mysql_query($sql);
		
		while(@$row=mysql_fetch_array($query))
		{
		 @$image=$row ['photo'];
		 @$id=$row ['id'];
		 @$avg_rating = $row['avg_rating'];
		 ?>	
			<li class="span2" >
			<a href="image.php?id=<?php echo $id ?>" class="thumbnail" ><img src="image/<?php echo $image; ?>" class="img-other" width="140px"	height="140px"/><center><?php echo $avg_rating ?></center></a>
			
			</li>
		<?php
		}
	?>
    	</ul>
	</div>
      
      </fieldset>
      
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


