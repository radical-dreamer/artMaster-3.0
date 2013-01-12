<html>
<?php 

	session_start();
	if (!isset($_COOKIE['user']))
	{
		header("location:index.php");
	}
	
	$username1 = $_COOKIE['user'];
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

	<legend>Members</legend>
	<table class="table table-bordered">
	<center><td>Username</td></center><td>Member Name</td><td>Member E-Mail E-Mail</td><td>Member Birthday</td></tr>
<?php
// build SELECT query


	$con=mysql_connect ("localhost","root","");

	// Connect to MySQL
	if ( !( $database = mysql_connect( "localhost",
	"root", "" ) ) )                      
	die( mysql_error());
	
		// open Products database
	if ( !mysql_select_db( "artmaster", $database ) )
	die(mysql_error());
	
	mysql_select_db("artmaster",$con);
	@$sql="SELECT id,name,username,email,birthdate FROM user";
	@$query=mysql_query($sql);
	while(@$row=mysql_fetch_array($query))
	{
		@$id=$row ['id'];
		@$name=$row ['name'];
		@$username=$row ['username'];
		@$email=$row ['email'];
		@$birthdate=$row ['birthdate'];
	?>
	<tr>
		<center>
		<td><a href="profile.php?username=<?php echo $username ?>"><?php echo $username ?></a></td>
		<td><?php echo $name ?></td>
		<td><?php echo $email ?></td>
		<td><?php echo $birthdate ?></td>
		</center>
	</tr>
	
	<?php
	}
	
	// query Products database
	
		
		mysql_close( $database );
		?><!-- end PHP script -->
	
	</table>
	
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


