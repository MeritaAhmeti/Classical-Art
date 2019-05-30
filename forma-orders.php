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
		$fileop = fopen("$DOCUMENT_ROOT/PI18_19_Gr16-master/rezervimet.txt", 'ab');
		fwrite($fileop, $rez);
        fclose($fileop);          


}

$msg = '';
if(filter_has_var(INPUT_POST, 'buy-tickets'))
{
   $firstName = $_POST["firstname"];
   $lastName = $_POST["lastname"];
   $dateOfBirth = $_POST["date"];
   $number = $_POST["number"];
   $interested = $_POST["interested-in"];
   $email = $_POST["email"];
   $description = $_POST["message"];
   $payment = $_POST["payment"];
   $credit = $_POST["c-number"];
   $terms = $_POST["terms"];

   if(!empty($firstName) && !empty($lastName) &&!empty($dateOfBirth) &&!empty($number) &&!empty($interested) &&!empty($email) &&!empty($description) &&!empty($payment) &&!empty($credit)   &&!empty($terms))
     { 

      if(filter_var($email, FILTER_VALIDATE_EMAIL) === false)
      {
         $msg = 'Email is not valid';
      }
      else
      {
         $toEmail = "erblinberisha@hotmail.com";
         $subject =" Message from : " . $firstName;
         $body = '
         <h2>New message ! </h2>
         <h4>Name</h4><p>' . $firstName . '</p>
         <h4>Email</h4><p>' .$email. '</p>';

         $headers = "MIME-Version: 1.0"."\r\n";
         $headers .= "Content-Type:text/html;charset=UTF-8"."\r\n";

         $headers .= "From: ".$firstName. "<".$email.">"."\r\n";

         if(mail($toEmail,$subject,$body,$headers))
            {
               //Emaili dergohet
               $msg = 'Your email is sent!';
            }
            else
            {
               $msg = 'Your email is not sent!';
            }
         }

      }

         else
      {
         //Nese nuk jane te mbushura
         $msg = 'Please fill in all fields!';
      }


      }

?>
