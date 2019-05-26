<?php

$firstname = $lastname = $dateOfBirth = $number = $interested = $email = $password = $description = $payment = $credit = $terms = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{

$firstName = $_POST["firstname"];
$lastName = $_POST["lastname"];
$dateOfBirth = $_POST["date"];
$number = $_POST["number"];
$interested = $_POST["interested-in"];
$email = $_POST["email"];
$password = $_POST["pass"];
$description = $_POST["message"];
$payment = $_POST["payment"];
$credit = $_POST["c-number"];
$terms = $_POST["terms"];

$rez = " 
   | \t First Name :  " . $firstName . "
   | \t Last Name : " . $lastName . "
   | \t Date of Birth : " . $dateOfBirth . "
   | \t Number : " . $number . "
   | \t Interested : " . $interested . "
   | \t Email : " . $email . "
   | \t Password : " . $password . "
   | \t Description : " . $description . "   
   | \t Payment : " . $payment . "
   | \t Credit : " . $credit . "
   | \t Terms : " . $terms ;

 $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
		$fileop = fopen("$DOCUMENT_ROOT/Github/test/rezervimet.txt", 'ab');
		fwrite($fileop, $rez);
        fclose($fileop);  


}



?>