<?php 
		if(isset($_POST['sendmail'])) {
			require 'class.phpmailer.php';
			require 'credential.php';

			$mail = new PHPMailer;

			// $mail->SMTPDebug = 4;                               // Enable verbose debug output

			$mail->isSMTP();                                      // Set mailer to use SMTP
			$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			$mail->SMTPAuth = true;                               // Enable SMTP authentication
			$mail->Username = EMAIL;                 // SMTP username
			$mail->Password = PASS;                           // SMTP password
			$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			$mail->Port = 587;                                    // TCP port to connect to

			$mail->setFrom("Sachin Dubey");
			$mail->addAddress("sachindubey1993@gmail.com");     // Add a recipient

			$mail->addReplyTo(EMAIL);
			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = "Email from your website";
			$mail->Body    = '<table border="1"><tr><th>Name</th><td>'.$_POST['name'].'</td></tr><tr><th>Email</th><td>'.$_POST['email'].'</td></tr><tr><th>Subject</th><td>'.$_POST['subject'].'</td></tr><tr><th>Message</th><td>'.$_POST['message'].'</td></tr></table>';
			$mail->AltBody = $_POST['message'];

			if(!$mail->send()) {
			    echo 'Message could not be sent.';
			    echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
			    echo 'Message has been sent';
			    header('location: index.php?mailstatus=success');
			}
		}
	 ?>