<?php
$name = $-POST{'name'};
$visitor-email = $-POST{'email'};
$subject = $-POST{'subject'};
$message = $-POST{'message'};

$email-from = 'abdulhaqqdolapo@gmail.com';

$email-subject= 'New Form Submission';

$email-body = "user Name:  $name.\n".
              "user Email:  $visitor-email.\n".
              "Subject:  $subject.\n".
              "user Message:  $message.\n".;

$to = 'abdulhaqqdolpo@gmail.com';

$headers = "From: $email-from \r\n";

$headers ,="Reply- To: $visitor-email \r\n";


mail($to,$email-subject,$email-body,headers);

header("Location; contact.html");
?>