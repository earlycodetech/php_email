<?php
// to send a html email with large email content

// email content is large-email-content.html

$to = 'user@example.com';
$from = 'sender@example.com';
$fromName = 'SenderName';
$subject = "Send HTML Email in PHP by early code";

// Get HTML contents from file
$htmlContent = file_get_contents("large-email-content.html");

// declare content-type header for HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// other headers - optional
$headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n";
$headers .= 'Cc: support@example.com' . "\r\n";
$headers .= 'Bcc: sales@example.com' . "\r\n";

// call mail function to send email
if(mail($to, $subject, $htmlContent, $headers)){
    echo 'Email sent successfully.';
}else{
   echo 'Email sending failed.';
}
 ?>
