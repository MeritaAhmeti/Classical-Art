<?php
require_once "config.php";

session_start();

// initializing variables

$username = "";
$username_err = $password_err = $confirm_password_err = "";

// REGISTER USER
if (isset($_POST['reg_user'])) 
{
	// receive all input values from the form
	$username = mysqli_real_escape_string($db, trim($_POST['username']));
	$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

	// form validation: ensure that the form is correctly filled ...
	// by adding (array_push()) corresponding error unto $errors array
	if (empty($username)) { $username_err = "Username is required!"; }
	if (empty($password_1)) { $password_err = "Password is required!"; }
	if ($password_1 != $password_2) {
		$confirm_password_err = "Passwords do not match!";
	}

	$user_check_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
	$result = mysqli_query($db, $user_check_query);
	$user = mysqli_fetch_assoc($result);

	if ($user)
	{ // if user exists
		if (trim($user['username']) === $username) 
		{
			$username_err = "Username already exists!";
		}
	}
	  // Finally, register user if there are no errors in the form
if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {
//$password = md5($password_1);//encrypt the password before saving in the database
	$salt='anythingyouwant_' ;
	$password = md5($salt.$password_1);
	$query = "INSERT INTO users (usergroup, username, password) 
			  VALUES('1', '$username', '$password')";
	mysqli_query($db, $query);
	header('location: login.php');
}
}
?>
