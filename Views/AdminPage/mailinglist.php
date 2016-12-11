<?php

function massmail($email, $message, $title){
include($_SERVER['DOCUMENT_ROOT']."/Content/PHPMailer/PHPMailerAutoload.php");
date_default_timezone_set('Etc/UTC');
$emailsExploded = explode(",", $email);
$mail = new PHPMailer;
$mail->isSMTP();
//$mail->SMTPDebug = 2;
$mail->Debugoutput = 'html';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "fauresidency@gmail.com";
$mail->Password = "FAUresidency1234";
$mail->setFrom('info@fauresidency.com', 'FAU Residency');
// $mail->addAddress("$email", '');
if(!empty($emailsExploded)){
    foreach($emailsExploded as $emailAddress){
        $mail->AddAddress(trim($emailAddress));
    }}
$mail->Subject = "$title";
$mail->Body = "$message";
// $mail->addAttachment('images/phpmailer_mini.png');
// $mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));

if (!$mail->send()) {
   //  echo "Mailer Error: " . $mail->ErrorInfo;
   return 0;
} else {
    return 1;
}}
