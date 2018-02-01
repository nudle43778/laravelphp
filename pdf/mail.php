<?php
            // get group selection
            $model = new \ModernWays\Lgu\Model\Operative($this->noticeBoard, true);

            $dal = new \ModernWays\Lgu\Dal\Operative($model, $this->provider);
            $model->setGroupId(filter_input(INPUT_POST, 'Group-Id', FILTER_SANITIZE_NUMBER_INT));
            $model->setStudentList($dal->reading('Group', 'StudentSelectAllInGroup', 'pId = ' . $model->getGroupId(), true));
            // prepare PHPMailer
            $mail = new \PHPMailer;
            //Set PHPMailer to use SMTP.
            $mail->isSMTP();
            //Enable SMTP debugging
            // 0 = off (for production use)
            // 1 = client messages
            // 2 = client and server messages
            $mail->SMTPDebug = 0;
            //Ask for HTML-friendly debug output
            $mail->Debugoutput = 'html';
            //Set SMTP host name
            $mail->Host = "smtp.gmail.com";
            // use
            // $mail->Host = gethostbyname('smtp.gmail.com');
            // if your network does not support SMTP over IPv6
            //Set this to true if SMTP host requires authentication to send email
            $mail->SMTPAuth = true;
            //Provide username and password
            $mail->Username = "mailphp.school@gmail.com";
            $mail->Password = "Ms6789542";
            //If SMTP requires TLS encryption then set it
            $mail->SMTPSecure = "ssl";
            //Set TCP port to connect to
            $mail->Port = 465;
            $mail->From = "msahri94@gmail.com";
            $mail->FromName = "Mehdi";

            $mail->isHTML(true);
            // haal boodschap op
            $model->setMailMessage(str_replace("\n", '<br />', filter_input(INPUT_POST, 'mail-message', FILTER_DEFAULT)));
            $model->setMailSubject(filter_input(INPUT_POST, 'mail-subject', FILTER_SANITIZE_STRING));
            //$mail->Subject = $model->getMailSubject();
            //$mail->Body = $model->getMailMessage();
            //$mail->AltBody = $model->getMailMessage();
            $mail->addAddress("msahri94@gmail.com", "LGU Administratie");

            foreach ($model->getStudentList() as $student) {
                $mail->clearAddresses();
                $mail->Subject = $model->getMailSubject();
                $mail->Body = "Beste {$student['PersonName']}, <br/><br/>{$model->getMailMessage()}";
                $mail->AltBody = "Beste {$student['PersonName']}, \n\n{$model->getMailMessage()}";
                $mail->addAddress("modernways.lgu@gmail.com", "LGU Administratie");
                $mail->addAddress($student['Email']);
                if (!$mail->send()) {
                    $model->setMailFeedback("Mailer Error: {$mail->ErrorInfo}");
                    $student['Email'] = false;

                } else {
                    $model->setMailFeedback("De mail werd verstuurd naar:");
                    $student['Email'] = true;
                }

            }