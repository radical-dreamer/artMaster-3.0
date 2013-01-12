<?php 

	session_start();
	if (!isset($_COOKIE['user']))
	{
		header("location:index.php");
	}

	$con=mysql_connect( "localhost","root","");
mysql_select_db ("artmaster",$con);
	$username1  = $_COOKIE["user"];
	
	$name = mysql_query("Select name,email, birthdate,country from user where username='$username1'");
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

<legend>Account Settings</legend>
<table class="table table-striped" onselectstart="return false">
<?php 
while($row = mysql_fetch_array($name))
  {?>
  
 <tr>
	<td>Name</td><td><?php echo $row['name']; ?></td>
 </tr>
 
 <tr>
	<td>Username</td><td><?php echo $username1; ?></td>
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

<!-- Update Name -->

<legend>Update Data</legend>
<fieldset></fieldset>

<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
        Change name
      </a>
    </div>
	  <div id="collapseOne" class="accordion-body collapse in">
      <div class="accordion-inner">
	  <form class="form-horizontal" name="form" action="update_name.php" method="post">
	
			<div class="control-group">
			
			<div class="controls">
			  <input type="hidden" name="username" value="<?php echo $username1 ?>" class="inputButton"/>
			</div>
		  </div>
		  
		  <div class="control-group">
			<label class="control-label">Update Name</label>
			<div class="controls">
			  <input type="text" name="name" class="inputButton"/ style="width:20%"><button type="submit" name="submit" class="btn" value="Submit">Update</button>
			</div>
		  </div>
		  
	</form>	 
      </div>
    </div></div>
  



<!-- Update Password -->




<div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
        Change Password
      </a>
    </div>
    <div id="collapseTwo" class="accordion-body collapse">
      <div class="accordion-inner">
			<form class="form-horizontal" name="form" action="update_password.php" method="post">
			<div class="control-group">
			
			    <div class="controls">
				  <input type="hidden" name="username" value="<?php echo $username1 ?>" class="inputButton"/>
					</div>
				</div>
  
			  <div class="control-group">
				<label class="control-label">Update Password</label>
				<div class="controls">
				  <input type="password" name="password" class="inputButton" style="width:20%"/><button type="submit" name="submit" class="btn" value="Submit">Update</button>
				</div>
			  </div>
			  </form>
	</div>
		  
		  
    </div>
 </div>
      
  


<!-- Update Email -->	


	<div class="accordion-group">
        <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                Change E-Mail
            </a>
        </div>
        <div id="collapseThree" class="accordion-body collapse">
            <div class="accordion-inner">
			<form class="form-horizontal" name="form" action="update_email.php" method="post">		
			<div class="control-group">	
				<div class="controls">
				  <input type="hidden" name="username" value="<?php echo $username1 ?>" class="inputButton"/>
				</div>
			 </div>
 
			 <div class="control-group">
				<label class="control-label">Update Email</label>
				<div class="controls">
				  <input type="email" name="email" class="inputButton" style="width:20%"/><button type="submit" name="submit" class="btn" value="Submit">Update</button>
				</div>
			 </div>
			</form>
			</div>
        </div>
    </div>
	
 
  


  <!-- Update Country -->

<div class="accordion-group">
        <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                Change Country
            </a>
        </div>
        <div id="collapseFour" class="accordion-body collapse">
            <div class="accordion-inner">
			<form class="form-horizontal" name="form" action="update_country.php" method="post">
	
	<div class="control-group">
    
    <div class="controls">
      <input type="hidden" name="username" value="<?php echo $username1 ?>" class="inputButton"/>
    </div>
  </div>
  
    <div class="control-group">
    <label class="control-label">Update Country</label>
    <div class="controls">
      <input type="text" name="country" class="inputButton" style="width:20%"/><button type="submit" name="submit" class="btn" value="Submit">Update</button>
    </div>
  </div>
			</form>
			</div>
        </div>
</div>  
  

 
   <!-- Update Birthday -->	
   
   <div class="accordion-group">
        <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive">
                Change Birthday
            </a>
        </div>
        <div id="collapseFive" class="accordion-body collapse">
            <div class="accordion-inner">
			<form class="form-horizontal" name="form" action="update_birthday.php" method="post">
   <div class="control-group">
  <label class="control-label">Update Date of Birth</label>
    <div class="controls">
		<input type="hidden" name="username" value="<?php echo $username1 ?>" class="inputButton"/>
		<select name="day" >
			<option value="">Day</option>
			<option value="1">1</option>
			<option value="2">2</option> 
			<option value="3">3</option> 
			<option value="4">4</option> 
			<option value="5">5</option> 
			<option value="6">6</option> 
			<option value="7">7</option> 
			<option value="8">8</option> 
			<option value="9">9</option> 
			<option value="10">10</option> 
			<option value="11">11</option> 
			<option value="12">12</option>
			<option value="13">13</option> 
			<option value="14">14</option> 
			<option value="15">15</option> 
			<option value="16">16</option> 
			<option value="17">17</option> 
			<option value="18">18</option> 
			<option value="19">19</option> 
			<option value="20">20</option> 
			<option value="21">21</option> 
			<option value="22">22</option> 
			<option value="23">23</option> 
			<option value="24">24</option> 
			<option value="25">25</option> 
			<option value="26">26</option> 
			<option value="27">27</option> 
			<option value="28">28</option> 
			<option value="29">29</option> 
			<option value="30">30</option> 
			<option value="31">31</option>
		</select>
		
		<select name="month">
			<option value="">Month</option>
			<option value="1">Jan</option> 
			<option value="2">Feb</option> 
			<option value="3">Mar</option> 
			<option value="4">Apr</option> 
			<option value="5">May</option> 
			<option value="6">Jun</option> 
			<option value="7">Jul</option> 
			<option value="8">Aug</option> 
			<option value="9">Sep</option> 
			<option value="10">Oct</option> 
			<option value="11">Nov</option> 
			<option value="12">Dec</option>
		</select>
		
		
		<select name="year">
			<option value="">Year</option>
			<option value="2004">2004</option>
			<option value="2003">2003</option>
			<option value="2002">2002</option>
			<option value="2001">2001</option>
			<option value="2010">2000</option> 
			<option value="1999">1999</option>
			<option value="1998">1998</option>
			<option value="1997">1997</option>
			<option value="1996">1996</option> 
			<option value="1995">1995</option>
			<option value="1994">1994</option>
			<option value="1993">1993</option>
			<option value="1992">1992</option>
			<option value="1991">1991</option>
			<option value="1990">1990</option>
		</select>
		<button type="submit" name="submit" class="btn" value="Submit">Update</button>
		
    </div>
	
  </div>
  </form>
			</div>
        </div>
</div> 
   
 
  
  </div><!--Last-->
  
	 <form class="form-horizontal" name="form" action="update_profilephoto.php" method="post">
			<fieldset>

			<legend>Update Profile Photo</legend>

		  <div class="control-group">
			<label class="control-label">Photo</label>
			<div class="controls">
			  <input type="file" name="file" />
			</div>
		  </div>
		  
		  <div class="control-group">
			<div class="controls">
			  <input type="hidden" name="name" class="file" value="profile"/>
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

	
    	
</body>
</html>