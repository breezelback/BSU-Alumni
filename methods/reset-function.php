<?php 
require("mysqliConnection.php");

require_once "./../plugins/PHPMailer/PHPMailer.php";
require_once "./../plugins/PHPMailer/SMTP.php";
require_once "./../plugins/PHPMailer/Exception.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$database = new Database;
     


$srcode = $_POST['srcode'];
$email = $_POST['email'];

$sql = ' SELECT `id`, `name`, `lastname`, `middle_name`, `email_address`, `department`, `mobile_number`, `course`, `sr_code`, `account_password`, `account_status`, `employment_status`, `profile_pic`, `date_register` FROM `user_information` WHERE sr_code LIKE "'.$srcode.'" AND email_address LIKE "'.$email.'" ';
$exec = $database->conn->query($sql);

if ($exec->num_rows > 0) 
{
    $new_password = $srcode.'-'.createRandomPassword();

    $update = ' UPDATE user_information SET account_password = "'.$new_password.'" WHERE sr_code LIKE "'.$srcode.'" AND email_address LIKE "'.$email.'" ';
    $database->conn->query($update);

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
    $mail->AddAddress($email, 'A.T.M.S.');
    $mail->SetFrom($email, "A.T.M.S.");
    // $mail->AddReplyTo("reply-to-email@domain", "reply-to-name");
    // $mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
    $mail->Subject = "Password Reset";
    $content = "Your new password is <b>".$new_password."</b> please update your password for security.";

    $mail->MsgHTML($content); 
    $mail->Send();

    header('location: ../password-reset.php?auth=success');
    echo "true";
}
else
{
    echo "false";
}



function createRandomPassword() { 

    $chars = "abcdefghijkmnopqrstuvwxyz023456789"; 
    srand((double)microtime()*1000000); 
    $i = 0; 
    $pass = '' ; 

    while ($i <= 7) { 
        $num = rand() % 33; 
        $tmp = substr($chars, $num, 1); 
        $pass = $pass . $tmp; 
        $i++; 
    } 

    return $pass; 

} 



?>