<?php
require_once "config.php";
session_start();
 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: index.php");
  exit;
}
 
 // LOGIN USER

if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($db, trim($_POST['username']));
  $password = mysqli_real_escape_string($db, trim($_POST['password']));
  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }
  if (count($errors) == 0) {
    $salt='anythingyouwant_' ;
    $password = md5($salt.$password);
    //$password = md5($password);
    //$password=sha1($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['loggedin'] = true;
      header('location: index.php');
    }else {
        array_push($errors, "Wrong username/password combination");
    }
  }
}
?>