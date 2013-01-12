<?php

	session_start();
	if (!isset($_COOKIE['user']))
	{
		header("location:index.php");
	}
	$username1  = $_COOKIE["user"];
	
	$id = isset($_GET['id']) ? $_GET['id'] : ''
	
   
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


<!-- Navigation Bar End -->


<fieldset>

	<legend>Photo</legend>
<?php
	$con=mysql_connect ("localhost","root","");
mysql_select_db("artmaster",$con);



@$sql="select * from table_img where id='$id'";

@$query=mysql_query($sql);
while(@$row=mysql_fetch_array($query))
{
 @$image=$row ['photo'];
 @$userimage=$row ['user'];
 ?>
        <center><a href="image/<?php echo $image; ?>" onclick="window.open(this.href,'new','width=250, height=250');return false;" ><img src="image/<?php echo $image; ?>"  class="img-polaroid" width="30%" height="30%" ></a></center>

<?php
}
			$avatar33 = "select photo from avatar where username='$userimage'"; 
			@$query14=mysql_query($avatar33);
				while(@$row=mysql_fetch_array($query14))
				{
					@$photo3=$row ['photo'];				
				}
?>

		<!-- Uploader Section -->
		
		<div class="media">
		  <a class="pull-left" href="profile.php?username=<?php echo $userimage; ?>">
			<img class="media-object" src="image/avatar/<?php echo $photo3 ?>" width="64" height="64" >
		  </a>
		  <div class="media-body">
			<h4 class="media-heading"><?php echo $image ?></h4>
			<h6>Uploaded by <a href="profile.php?username=<?php echo $userimage; ?>"><?php echo $userimage ?></h6></a>
		 	
			<!-- Nested media object -->
		  </div>
		  <div>
		  </br>
		  	<center>Average Rating:<h2> <?php  $rtt = mysql_query("SELECT * FROM table_img WHERE id='$id'");
						$row = mysql_fetch_row($rtt);
						ini_set("precision", 3);
						if($row[7]>0){
		  					echo $row[6]/$row[7];
		  				}else{
		  					echo "No Rating";
		  				}

		  					
		  				?>
		  	</h2></br>
		  		<div class="progress" style="width:30%">
 				 <div class="bar" style="width: <?php echo $row[6]/$row[7]/5 * 100?>%;"></div>
				</div>
		  	</br>

		  	<p>Rate This Image</p>
		  	<form name="voteform" action="vote.php" method="post">
		  		<input type="radio" name="vote" value="1"> 1
		  		<input type="radio" name="vote" value="2"> 2
		  		<input type="radio" name="vote" value="3"> 3
		  		<input type="radio" name="vote" value="4"> 4
		  		<input type="radio" name="vote" value="5"> 5
		  		<input type="hidden" value="<?php echo $id ?>" name="img_id" />
		  		<input type="submit" value="Submit">
		  	</form>
		  	</center>
		  </div>
		</div>
</br>
<legend></legend>
</br>

		<!-- comment Section -->
		<?php 
		
		
			@$sql2="select comment,username,date_comment from img_comment where img_id='$id'";
			
			@$query2=mysql_query($sql2);
			while(@$row=mysql_fetch_array($query2))
			{
				@$comment=$row ['comment'];
				@$user_comment=$row ['username'];
				@$date_comment=$row['date_comment'];
				?>
				
				
				<div class="media">
				  <a class="pull-left" href="profile.php?username=<?php echo $user_comment; ?>">
						<?php 
						
						$avatar6 = "select photo from avatar where username='$user_comment'"; 
						@$query16=mysql_query($avatar6);
						while(@$row=mysql_fetch_array($query16))
						{
							@$photo16=$row ['photo']; ?>
				
					<?php } ?>
						<img class="media-object" src="image/avatar/<?php echo $photo16 ?>" width="64" height="64">
					
				  </a>
				  <div class="media-body">
				  <div class="well well-small">
					<h4 class="media-heading">
					<a href="profile.php?username=<?php echo $user_comment ?>"><?php echo $user_comment ?>   </a>
					<small  class="pull-right"><a href="profile.php?date_comment=" class="muted"><?php echo $date_comment ?></a></small>
					</h4>
				    </br>
					<?php
						
						echo $comment;
					?>
				  </div>
				  
				  
				
				</div>
				  </div>
					<?php
			}		
	
		?>
 
    <!-- Nested media object -->
	
	<!-- Write comment Section -->
		</br>
		<legend></legend>
		<?php 

		$avatar = "select photo from avatar where username='$username1'"; 
		@$query12=mysql_query($avatar);
			while(@$row=mysql_fetch_array($query12))
			{
				@$photo=$row ['photo'];				
			}
		?>
		<div class="media">
		  <a class="pull-left" href="profile.php?username=<?php echo $username1; ?>">
			<img class="media-object" src="image/avatar/<?php echo $photo ?>" width="64" height="64">
			<center><?php echo $username1 ?></center>
		  </a>
		  <div class="media-body">
			<h4 class="media-heading">Your Comment</h4>
			<form action="comment.php" method="post">
			<textarea rows="3" cols="50" placeholder="Type your comment" name="comment"></textarea>
			<input type="hidden" value="<?php echo $id ?>" name="img_id" />
			<button type="submit" class="btn">Comment</button>
			</form>
		 
			<!-- Nested media object -->
		  </div>
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