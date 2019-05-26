<?php
require_once "config.php";
session_start();
 
$username = $subjecti = $posti = "";
$username_err = $subjecti_err = $posti_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{

	$username = "etnik";
	$subjecti = $_POST["subjecti"];
	$posti = $_POST["posti"];

    if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
    {
        $sql = "INSERT INTO users (username, subjecti, posti) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql))
        {
            mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_subjecti, $param_posti);
            
            $param_username = $username;
            $param_subjecti = $subjecti;
            $param_posti = $posti;
            
            if(mysqli_stmt_execute($stmt))
            {
                header("location: login.php");
            } 
            else
            {
                echo "Something went wrong. Please try again later.";
            }
        mysqli_stmt_close($stmt);
        }
    mysqli_close($link);
    }
}
?>