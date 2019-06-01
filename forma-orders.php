<?php

$firstname = $lastname = $dateOfBirth = $number = $interested = $email  = $payment = $credit = $terms = $nameErr = $emailErr = $lnameErr = $dateErr = $interestErr = $paymentErr = $creditErr =  "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if (empty($_POST["firstname"])) {
    $nameErr = "Firstname is required!";
  } else {
    $firstname = test_input($_POST["firstname"]);

      // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$firstname)) {
      $nameErr = "Only letters and white space allowed!"; 
    }
  }

  if (empty($_POST["lastname"])) {
    $lnameErr = "Lastname is required!";
  } else {
    $lastname = test_input($_POST["lastname"]);

      // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$lastname)) {
      $lnameErr = "Only letters and white space allowed!"; 
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required!";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format!"; 
    }
  }

  if (empty($_POST["date"])) {
    $dateErr = "Date of Birth is required!";
  } else {
    $dateOfBirth = test_input($_POST["date"]);
  }

  if (empty($_POST["interested"])) {
    $interestErr = "This field is required!";
  } else {
    $interested = test_input($_POST["interested"]);
  }

  if (empty($_POST["payment"])) {
    $paymentErr = "Payment is required!";
  } else {
    $payment = test_input($_POST["payment"]);
  }

  if (empty($_POST["credit"])) {
    $creditErr = "Credit card is required!";
  } else {
    $credit = test_input($_POST["credit"]);
  }

  $rez = " 
   | \t First Name :  " . $firstname . "
   | \t Last Name : " . $lastname . "
   | \t Date of Birth : " . $dateOfBirth . "
   | \t Number : " . $number . "
   | \t Interested : " . $interested . "
   | \t Email : " . $email . "
   | \t Payment : " . $payment . "
   | \t Credit : " . $credit . "
     \t " ;

 $DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
		$fileop = fopen("$DOCUMENT_ROOT/PI18_19_Gr16/rezervimet.txt", 'ab');
		fwrite($fileop, $rez);
        fclose($fileop); 
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

  
}

?>