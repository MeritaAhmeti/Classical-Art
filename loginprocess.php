<?php
require_once "config.php";
session_start();
 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: index.php");
  exit;
}


$username_err = $password_err = "";

if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($db, trim($_POST['username']));
  $password = mysqli_real_escape_string($db, trim($_POST['password']));
  if (empty($username)) {
    $username_err = "Username is required!";
  }
  if (empty($password)) {
    $password_err = "Password is required!";
  }
  if (empty($password_err) && empty($username_err)) {
    $salt='anythingyouwant_' ;
    $password = md5($salt.$password);
    
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) 
    {
      $_SESSION['username'] = $username;
      $_SESSION['loggedin'] = true;
      header('location: index.php');
    }
    else
	{
        $username_err ="You have entered an invalid username.";
        $password_err ="You have entered an invalid password.";
    }
  }
}
?>