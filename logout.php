<?php
   session_start();
   
	if (isset($_SESSION))
	{
	    unset($_SESSION);
	    session_unset();
	    session_destroy();
	}
	session_start();
	header("location: index.php");

?>