<?php
require_once "config.php";
session_start();
 
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    if (isset($_POST['new-post'])) {
    	$username = $_SESSION["username"];
    	$subjecti = $_POST["subjecti"];
    	$posti = $_POST["posti"];
        $query = "INSERT INTO post (username, subjecti, posti) 
                  VALUES('$username', '$subjecti', '$posti')";
        mysqli_query($db, $query);
        header("location: index.php");
    }
}

//Per me marr postin e fundit
$username2= $subjecti2 = $posti2 = $created_at ="";
$sql = "SELECT * FROM post ORDER BY ID DESC LIMIT 1";
$result = mysqli_query($db, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $username2 = $row['username'];
        $subjecti2 = $row['subjecti'];
        $posti2 = $row['posti'];
        $created_at = $row['created_at'];
    }
}
$_SESSION['username2'] = $username2;
$_SESSION['subjecti2'] = $subjecti2;
$_SESSION['posti2'] = $posti2;
$_SESSION['created_at'] = $created_at;
?>