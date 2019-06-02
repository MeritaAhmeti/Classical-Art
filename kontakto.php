<?php

//==============================================================================================
// PHP MAILER!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once("vendor/PHPMailer/PHPMailer/src/PHPMailer.php");
require_once("vendor/PHPMailer/PHPMailer/src/Exception.php");
require_once("vendor/PHPMailer/PHPMailer/src/SMTP.php");
require 'vendor/autoload.php';

$mail = new PHPMailer(true);							
$msg = '';
if(filter_has_var(INPUT_POST, 'submit'))
{
	//Te dhenat nga form
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	//Shiko nese fushat jane te mbushura
	if(!empty($email) && !empty($name) && !empty($message))
	{
		//Tash me shiku a eshte emaila valide
		if(filter_var($email, FILTER_VALIDATE_EMAIL) === false)
		{
			$msg = 'Email is not valid!';
		}
		else
		{
		// Passing true enables exception
		try
		{
		    $mail->SMTPDebug = 0;
		    $mail->isSMTP();
		    $mail->Host = 'smtp.gmail.com';
		    $mail->SMTPAuth = true;
		    $mail->Username = 'classicaalart@gmail.com';
		    $mail->Password = '12345678blla';
		    $mail->SMTPSecure = 'tls';
		    $mail->Port = 587;
		    $mailto = trim('classicaalart@gmail.com');
		    // recipients
		    $mail->setFrom($email,$name);
		    $mail->addAddress($mailto,$mailto);

 			   // Content
		    $mail->isHTML(true);                            
		    $mail->Subject = 'Message from '. $name;
			$mail->Body = '
				<h2>Message from contact</h2>
				<h4>Name</h4><p>'.$name.'</p>
				<h4>Email</h4><p>'.$email.'</p>
				<h4>Message</h4><p>'.$message.'</p>';

		    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		    $mail->send();
		    $msg = 'Your e-mail is sent!';
			}
			catch (Exception $e) 
			{
				$msg = 'Your e-mail is not sent!';
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