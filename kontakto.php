<?php
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
				//Ne qofte se fushat nuk jane te zbrazta edhe emaila eshte ne rregull atehere ekzekutohet qikjo
				$toEmail = "etnik.g8@gmail.com";
				$subject = 'Message from '. $name;
				$body = '
				<h2>Message from contact</h2>
				<h4>Name</h4><p>'.$name.'</p>
				<h4>Email</h4><p>'.$email.'</p>
				<h4>Message</h4><p>'.$message.'</p>';

				// Email headers
				$headers = "MIME-Version: 1.0"."\r\n";
				$headers .= "Content-Type:text/html;charset=UTF-8"."\r\n";

				// Headers shtese

				$headers .= "From: ".$name. "<".$email.">"."\r\n";

				if(mail($toEmail,$subject,$body,$headers))
				{
					//Emaili dergohet
					$msg = 'Your e-mail is sent!';
				}
				else
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