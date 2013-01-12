<?php
	if (isset($_COOKIE['user']))
	{
		header("location:main.php");
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
			</li>
		</ul>
		<form class="navbar-form pull-right" method="post" action="login.php">
            <input class="span2" type="text" placeholder="Username" name="username">
            <input class="span2" type="password" placeholder="Password" name="password">
            <button type="submit" class="btn">Login</button>
        </form>

<form class="form-horizontal" method="post" action="register.php">
<fieldset>

	<legend>Registration Form</legend>

  <div class="control-group">
    <label class="control-label" for="inputName">Full Name</label>
    <div class="controls">
      <input type="text" id="inputName" placeholder="Full Name" name="name">
    </div>
  </div>

  <div class="control-group">
    <label class="control-label" for="inputUsername">Username</label>
    <div class="controls">
      <input type="text" id="inputUsername" placeholder="Username" name="username">
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label" for="inputPassword">Password</label>
    <div class="controls">
      <input type="password" id="inputPassword" placeholder="Password" name="password">
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label" for="inputEmail">Email</label>
    <div class="controls">
      <input type="email" id="inputEmail" placeholder="Email" name="email">
    </div>
  </div>
  
  <div class="control-group">
  <label class="control-label">Date of Birth</label>
    <div class="controls">
	
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
		</script>
		
    </div>
  </div>
	
  <div class="control-group">
	<div class="controls">
		<button type="reset" name="reset" value="Reset" class="btn">Reset</button> <button type="submit" class="btn">Register</button>
	</div>
  </div>
  
<legend></legend>
  
</fieldset>  
</form>

    	
</body>
</html>