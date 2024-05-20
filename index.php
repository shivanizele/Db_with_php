<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
	  <?php  if (isset($_SESSION['username'])) : ?>
	  <table style="margin-left: 20%;">
		  <tr>
			  <td>Name</td>
			  <td><strong><?php echo $_SESSION['username']; ?></strong> </td>
		  </tr>
		  <tr>
			  <td>Email</td>
			  <td><strong><?php echo $_SESSION['email']; ?></strong> </td>
		  </tr>
		  <tr>
			  <td>mobileNo</td>
			  <td><strong><?php echo $_SESSION['mobileNo']; ?></strong> </td>
		  </tr>
		  <tr>
			  <td>Addres</td>
			  <td><strong><?php echo $_SESSION['address']; ?></strong> </td>
		  </tr>
		  </tr>
		  <tr>
			  <td>blood_group</td>
			  <td><strong><?php echo $_SESSION['blood_group']; ?></strong> </td>
		  </tr>
		  <tr>
			  <td>dob</td>
			  <td><strong><?php echo $_SESSION['dob']; ?></strong> </td>
		  </tr>
	  </table>
	  <br/>
    	<p> <a href="index.php?logout='1'" style="color: red;"><button class="button">Logout</button></a> </p>
    <?php endif ?>
    <!-- logged in user information -->
</div>
		
</body>
</html>