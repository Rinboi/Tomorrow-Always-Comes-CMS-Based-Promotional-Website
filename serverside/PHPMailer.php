<?php
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    class MailController{
        private $senderName;
        private $senderEmail;
        private $password;
        private $SMTPhost;

        public function __construct()
        {
            //Load Composer's autoloader
            require '../PHPMailer/src/Exception.php';
            require '../PHPMailer/src/PHPMailer.php';
            require '../PHPMailer/src/SMTP.php';
            $this->senderName = 'Ingenious Geniuses';
            $this->senderEmail = 'ingeniousgeniuses.2021@gmail.com';
            $this->password = 'ftvymiuhmgjipcsi';
            $this->SMTPhost = 'smtp.gmail.com';
        }
        public function sendMail($recipient, $subject){
            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer;

            try {
                $mail->SMTPDebug = 2;                               // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host =  $this->SMTPhost;                            // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = $this->senderEmail;                 // SMTP username
                $mail->Password = $this->password;                           // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to

                $mail->setFrom($this->senderEmail, $this->senderName); // Sets sender
                $mail->addAddress($recipient);                     // Add a recipient

                $mail->addReplyTo($this->senderEmail);

                $mail->isHTML(true);                                  // Set email format to HTML

                $mail->Subject = $subject;
                $mail->Body    = "Thank you for registering and play testing our game! Please take the time to evaluate our project at https://forms.gle/qLCmUm2ghEsJHxte7";
                $mail->send();
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
            }
    }
