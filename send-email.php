<?php
$to = 'gloria@gmail.com';
$from = 'info@earlycode.net';
$fromName = 'early code';

$subject = "Send HTML Email in PHP by early code";

$htmlContent = '
    <html>
    <head>
        <title>Welcome to early code</title>
    </head>
    <body>
        <h1 style="color:hotpink">Thanks for registering with early code</h1>
        <p>
          Welcome to endless possibilities
        </p>
    </body>
    </html>';

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
