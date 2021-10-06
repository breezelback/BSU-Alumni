
<?php 


require_once "./../plugins/PHPMailer/PHPMailer.php";
require_once "./../plugins/PHPMailer/SMTP.php";
require_once "./../plugins/PHPMailer/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mailer {
    
    //public $mail;
    public function sendEmail($email, $recipeinct_name) {
        
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Mailer = "smtp";

        // $mail->SMTPDebug  = 1;  
        $mail->SMTPAuth   = TRUE;
        $mail->SMTPSecure = "tls";
        $mail->Port       = 587;
        $mail->Host       = "smtp.gmail.com";
        // $mail->Username   = "jaredladrera21@gmail.com";
        // $mail->Password   = "2013107148";
        $mail->Username   = "bsu.atms@gmail.com";
        $mail->Password   = "jekjek32";

        $mail->IsHTML(true);
        $mail->AddAddress($email, $recipeinct_name);
        $mail->SetFrom($email, "A.T.M.S");
        // $mail->AddReplyTo("reply-to-email@domain", "reply-to-name");
        // $mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
        $mail->Subject = "Account approval by BSU Alumni";
        $content = "This is a Test Email sent via Gmail SMTP Server using PHP mailer class. this is by bsu alumni project";

        $mail->MsgHTML($content); 
        if($mail->Send()) {
            return true;
        } else {
            return false;
        }
    }


    public function sendSrCode($sr_code, $email, $name) {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Mailer = "smtp";

        // $mail->SMTPDebug  = 1;  
        $mail->SMTPAuth   = TRUE;
        $mail->SMTPSecure = "tls";
        $mail->Port       = 587;
        $mail->Host       = "smtp.gmail.com";
        // $mail->Username   = "jaredladrera21@gmail.com";
        // $mail->Password   = "2013107148";
        $mail->Username   = "bsu.atms@gmail.com";
        $mail->Password   = "jekjek32";

        $mail->IsHTML(true);
        $mail->AddAddress($email, $name );
        $mail->SetFrom($email, "A.T.M.S");
        // $mail->AddReplyTo("reply-to-email@domain", "reply-to-name");
        // $mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
        $mail->Subject = "SR Code ";
        $content = 'Hi mr/ms '.$name.' this your SR Code: <b> '.$sr_code.'</b>';

        $mail->MsgHTML($content); 
        if($mail->Send()) {
            return true;
        } else {
            return false;
        }
    }



}



?>