<?php
require '../PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'letruongthinh0210@gmail.com';                 // SMTP username
$mail->Password = 'iuemiuanhsaobang@';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'letruongthinh0210@gmail.com';
$mail->FromName = 'Mailer';
$mail->addAddress('letruongthinh0210@gmail.com', 'Joe User');     // Add a recipient
$mail->addAddress('thriving1991la@gmail.com');               // Name is optional
$mail->addReplyTo('letruongthinh0210@gmail', 'Information');
$mail->addCC('thinh.le@vnetwork.vn');
$mail->addBCC('thinh.le@vnetwork.vn');

$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}