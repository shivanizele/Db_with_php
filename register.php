<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
	  <br>
	  <p>Healthcare Registration System</p>
	  <p>  <strong> ( Welcome to Mai Mangeshkar Hospital )</strong>	</p>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Patient Name : </label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
	  <div class="input-group">
  	  <label>Weight of patient: </label>
  	  <input type="text" name="weight">
  	</div>
	  <div class="input-group">
  	  <label>Mobile No: </label>
  	  <input type="number" name="mobileNo">
  	</div>
	  <div class="input-group">
  	  <label>Address: </label>
  	  <input type="text" name="address">
  	</div>	
	  <div class="input-group">
			<label for="Blood Group">Blood Group:</label>
		<select name="bloodgrp" id="Blood Group" class="field">
			<option  value="">Select</option>
			<option value="AB+">AB+</option>
			<option value="A+">A+</option>
			<option value="B+">B+</option>
			<option value="O+">O+</option>
			<option value="AB-">AB-</option>
			<option value="A-">A-</option>
			<option value="B-">B-	</option>
			<option value="O-">O-</option>
		</select>
	  </div>
	  <div class="input-group">
	  <label for="Date">Date of Birth:</label>
  <input type="date" id="Date" name="date" c>
	  </div>
  	<div class="input-group">
  	  <button type="submit" class="btn1" name="reg_user">Register</button>
		 
  	</div>

	  <hr/>
	  <hr/>
	  <br/>
	  <div>
  	
	  </div>
	  <p>
  		Already a member? <a href="login.php" class="signin">Sign in </a>
		  <!-- <button  class="btn" name="reg_user"><a href="login.php" class="signup">Sign in </a></button> -->
  	</p>
  </form>
  
</body>
</html>