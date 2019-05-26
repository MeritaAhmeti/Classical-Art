<?php
require_once "config.php";

session_start();

if(isset($_POST['username']))
{
$_SESSION['user']= $_POST['username'];
        $cookie_name = "user";
        $cookie_value = $_SESSION['user'];
        setcookie($cookie_name, $cookie_value, time() +3600, "/"); // 86400 = 1 day
}

// initializing variables
$username = "";
$errors = array(); 

// REGISTER USER
if (isset($_POST['reg_user'])) 
{
	// receive all input values from the form
	$username = mysqli_real_escape_string($db, trim($_POST['username']));
	$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

	// form validation: ensure that the form is correctly filled ...
	// by adding (array_push()) corresponding error unto $errors array
	if (empty($username)) { array_push($errors, "Username is required"); }
	if (empty($password_1)) { array_push($errors, "Password is required"); }
	if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
	}

	$user_check_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
	$result = mysqli_query($db, $user_check_query);
	$user = mysqli_fetch_assoc($result);

	if ($user)
	{ // if user exists
		if (trim($user['username']) === $username) 
		{
		array_push($errors, "Username already exists");
		}
	}
	  // Finally, register user if there are no errors in the form
if (count($errors) == 0) {
//$password = md5($password_1);//encrypt the password before saving in the database
	$salt='anythingyouwant_' ;
	$password = md5($salt.$password_1);
	$query = "INSERT INTO users (username, password) 
			  VALUES('$username', '$password')";
	mysqli_query($db, $query);
	header('location: login.php');
}
}
?>
