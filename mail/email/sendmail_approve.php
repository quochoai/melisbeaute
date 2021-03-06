<?php
    // usage
	function approveMail (
        $toEmail,            // Email address of recipient
        $toName,             // Name of recipient
        $fromEmail,          // Email Address of sender
        $fromName,           // Name of sender 
        $emailSubject,       // Subject of email
        $emailTemplate,      // email Templates found under WEB_ROOT/email-templates/ folder
        $mkhau,
        $gnumber
    ) {
		require_once ROOT_FOLDER.'mail/php-mailer/PHPMailerAutoload.php';        
		$mail = new PHPMailer();

		// set up email recipients and sender
        $mail->CharSet = "UTF-8";
		$mail->From     = $fromEmail;
		$mail->FromName = $fromName;
		$mail->Subject  = $emailSubject;
		$mail->addAddress( $toEmail, $toName );
		$mail->AddReplyTo($fromEmail,$fromName);
		$mail->isHTML( true );
/*
	// Other SETTINGS TO SETUP IN THE FUTURE
		$mail->Host     = 'smtp1.m-powered.org;smtp2.m-powered.org';
		$mail->Mailer   = 'smtp';            
		$mail->SMTPDebug = 3;            
		$mail->isSMTP();
		$mail->Host = "smtp.gmail.com";            
		$mail->SMTPAuth = true;
		$mail->Username = "name@gmail.com";                 
		$mail->Password = "super_secret_password";            
		$mail->SMTPSecure = "tls";            
		$mail->Port = 587;
*/

		//read the email template file
		$message = '';
		$template_file = ROOT_FOLDER."mail/email/templates/" . $emailTemplate ;
		$fh = fopen($template_file, "r");	
		
		while(!feof($fh)) {
			$body = fgets($fh);
            $body = str_replace( "{dear}", _dear, $body);
			$body = str_replace( "{first_name}", $toName, $body);
            $body = str_replace( "{camondkxe}", _camondkk, $body);
            $body = str_replace( "{chaomungdkx}", _chaomungdkx, $body);
            $body = str_replace( "{kkddk}", _kkddk, $body);
            $body = str_replace( "{matkhau}", _mktamthoi, $body);
            $body = str_replace( "{password}", $mkhau, $body);
            $body = str_replace( "{gnum}", _gnumber, $body);
            $body = str_replace( "{gnumber}", $gnumber, $body);
            $body = str_replace( "{linkdn}", _linkdn, $body);
            $body = str_replace( "{trantrong}", _trantrong, $body);
            $body = str_replace( "{cluboto}", _clotvn, $body);		
			$message .=$body;
		}
		if ( empty($msgSuccess) ) {
			 $msgSuccess = 'Mail has been sent';
		}
		if ( empty($msgFailed) ) {
			 $msgFailed = 'There has been an error sending email';
		}
		$mail->Body = $message;    
		if(!$mail->send()){
			  echo $msgFailed;
		} else {
			  echo '';
		}
		$mail->clearAddresses();  
	}