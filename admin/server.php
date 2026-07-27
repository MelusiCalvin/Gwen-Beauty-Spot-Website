<?php


// initializing variables

$username = "";
$email    = "";

$errors = array(); 

// connect to the database
$DATABASE_HOST = getenv('DB_HOST');
$DATABASE_USER = getenv('DB_USERNAME');
$DATABASE_PASS = getenv('DB_PASSWORD');
$DATABASE_NAME = getenv('DB_NAME');

$db = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

// REGISTER USER

if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  
$email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }


  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is 
required"); }
  
if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");
 
 }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM admin_info WHERE admin_name='$username' 
OR admin_email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  
$user = mysqli_fetch_assoc($result);
  
  
if ($user) { // if user exists
    if ($user['admin_info'] === $username) {
      
array_push($errors, "Username already exists");
    }

    
if ($user['admin_email'] === $email) {
      array_push($errors, "email already exists");
   }
  }

  
// Finally, register user if there are no errors in the form
 
 if (count($errors) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database

    
$query = "INSERT INTO admin_info (admin_name, admin_email, admin_password) 
              VALUES('$username', '$email', '$password')";
    
mysqli_query($db, $query);
    
$_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php');
 
 }
}

// ... end of registering user ...

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
  	$query = "SELECT * FROM admin_info WHERE admin_name='$username' AND admin_password='$password'";
  	$results = mysqli_query($db, $query);
  


if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['admin_name'] = $username;
  	 $_SESSION['success'] = "You are now logged in";
  	 header('location: index.php');
  }else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>