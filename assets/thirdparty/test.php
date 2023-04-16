<?php

require_once 'PHPMailerAutoload.php';
require_once 'class.phpmailer.php';

// mysendmail("suryaravi1987@gmail.com", "Test", "<h1>Hello</h1>");

function mysendmail($to, $sub, $body)
{
	// echo $to;
	// echo $sub;
	// echo $body;

$mail = new PHPMailer();
// $mail->SMTPDebug = 3;  
$mail->SMTPDebug = 3;                
$mail->isSMTP();               
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;        


// $mail->Username = 'rupalipakhale1607@gmail.com';
// $mail->Password = '9594055656';

$mail->Username = "richamishra201995@gmail.com";
$mail->Password = "#rich@misty2121";

$mail->SMTPSecure = 'tls';        
// $mail->Port = 467;
$mail->Port = 587;


$mail->setFrom('richamishra201995@gmail.com', 'Mailer');
-$mail->addAddress($to);  
$mail->isHTML(true);

$mail->Subject = $sub;
$mail->Body= $body;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    // echo 'Mailer Error: ' . $mail->ErrorInfo;
} else 
{
    echo 'Message has been sent';
}
}
?>