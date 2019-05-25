<?php
require_once "config.php";

session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: index.php");
  exit;
}
 
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{

	$username = $_POST["username"];
	$password = $_POST["password"];
	$confirm_password = $_POST["password2"];

	if(empty(trim($_POST["username"])))
	{
		$username_err = "Please enter a username.";
	}
	else
	{
		$sql = "SELECT id FROM users WHERE username = ?";

		if($stmt = mysqli_prepare($link, $sql))
		{
			mysqli_stmt_bind_param($stmt, "s", $param_username);

			$param_username = trim($username);

			if(mysqli_stmt_execute($stmt))
			{
				mysqli_stmt_store_result($stmt);

				if(mysqli_stmt_num_rows($stmt) == 1)
				{
					$username_err = "This username is already taken.";
				}
				else
				{
					$username = trim($username);
				}
			}
			else
			{
				echo "Something went wrong! Please try again later.";
			}
		}
		mysqli_stmt_close($stmt);
	}



	if(empty(trim($password)))
	{
		$password_err = "Please enter a password.";
	}
	elseif (strlen(trim($password)) <6)
	{
		$password_err = "Password must have atleast 6 characters.";
	}
	else
	{
		$password = trim($password);
	}


	if(empty(trim($confirm_password)))
	{
		$confirm_password_err = "Please confirm password.";
	}
	else
	{
		$confirm_password = trim($confirm_password);
		if(empty($password_err) && ($password != $confirm_password))
		{
			$confirm_password_err = "Password did not match!";
		}
	}


    if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
    {
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql))
        {
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); 
            
            if(mysqli_stmt_execute($stmt))
            {
                header("location: login.php");
            } 
            else
            {
                echo "Something went wrong. Please try again later.";
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($link);
}
?>
