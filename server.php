<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $weight = mysqli_real_escape_string($db, $_POST['weight']);
  $mobileNo = mysqli_real_escape_string($db, $_POST['mobileNo']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $bloodgrp = mysqli_real_escape_string($db, $_POST['bloodgrp']);
  $date = mysqli_real_escape_string($db, $_POST['date']);
  
  

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if (empty($weight)) { array_push($errors, "weight is required"); }
  if (empty($mobileNo)) { array_push($errors, "mobileNo is required"); }
  if (empty($bloodgrp)) { array_push($errors, "bloodgrp is required"); }
  if (empty($date)) { array_push($errors, "date is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' OR 	mobile_number='$mobileNo' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
    if ($user['mobile_number'] === $mobile_number) {
      array_push($errors, "Mobile Number already exists");
    }
    
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (username, email, password,	weight,mobile_number,address,	blood_group,	dob) 
  			  VALUES('$username', '$email', '$password','$weight','$mobileNo','$address','$bloodgrp','$date')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['email'] = $email;
       $_SESSION['mobileNo'] = $mobileNo;
       $_SESSION['address'] = $address;
      $_SESSION['blood_group'] = $bloodgrp;
      $_SESSION['dob'] = $date;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

// ... 
// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
      $row = $results->fetch_assoc();
  	   $_SESSION['email'] = $row["email"];
       $_SESSION['mobileNo'] = $row["mobile_number"];
      //  $_SESSION['email'] = $row["email"];
       $_SESSION['address'] = $row["address"];
      $_SESSION['blood_group'] = $row["blood_group"];
      $_SESSION['dob'] = $row["dob"];
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>