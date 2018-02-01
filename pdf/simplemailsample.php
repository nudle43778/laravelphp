<?php
    require __DIR__ . '/vendor/autoload.php';
    // prepare PHPMailer
            $mail = new \PHPMailer\PHPMailer\PHPMailer();
            //Set PHPMailer to use SMTP.
            $mail->isSMTP();
            //Enable SMTP debugging
            // 0 = off (for production use)
            // 1 = client messages
            // 2 = client and server messages
            $mail->SMTPDebug = 2;
            //Ask for HTML-friendly debug output
            $mail->Debugoutput = 'html';
            //Set SMTP host name
            $mail->Host = "smtp.gmail.com";
            //Set this to true if SMTP host requires authentication to send email
            $mail->SMTPAuth = true;
            //Provide username and password
            $mail->Username = "mailphp.school@gmail.com";
            $mail->Password = "NotYourBuissiness";
            //If SMTP requires TLS encryption then set it
            $mail->SMTPSecure = "ssl";
            //Set TCP port to connect to
            $mail->Port = 465;
            $mail->From = "msahri94@gmail.com";
            $mail->FromName = "Mehdi";
            $mail->isHTML(true);
            $mail->Subject = 'Mijn eerste mail verstuurd met PHP';
            $message = 'Mijn eerste mail verstuurd met de <b>PHPMailer</b> klasse en dat is een uitstekende klasse!';
            $mail->Body = $message;
            $mail->AltBody = strip_tags($message);
            $email = "mailphp.school@gmail.com";
            $mail->addAddress($email, "De baas van de instelling");
            if (!$mail->send()) {
                echo "Mailer Error: {$mail->ErrorInfo}";
        
            } else {
                echo "De mail werd verstuurd naar: $email";
            }
