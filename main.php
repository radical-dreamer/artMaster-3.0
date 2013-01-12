<?php

	session_start();
	if (!isset($_COOKIE['user']))
	{
		header("location:index.php");
	}

	$username1  = $_COOKIE["user"];

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
			
			<li><a href="members.php">Members</a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Category <b class="caret"></b></a>
				<ul class="dropdown-menu">
				<li><a href="#">Digital Art</a></li>
					<li><a href="category.php?cat=Photography">Photography</a></li>
					<li><a href="category.php?cat=Photography">Fan Art</a></li>
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

<div class="container">

	<!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Welcome to artMaster!</h1>
        <p>This is an online community showcasing website where you can show various forms of user-made artwork. By using this website, user can upload artwork,
   		   can give comments to other user artworks and can rate it.</p>
        <p><a class="btn btn-primary btn-large">Learn more &raquo;</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span4">
          <h2>Popular</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="popular.php">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>Latest</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="latest.php">View details &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Register</h2>
		  <p>Forgot your password? </br>
		  Click <a href="#">Here</a></p>
        </div>
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

</div>
	<!-- Javascript -->
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