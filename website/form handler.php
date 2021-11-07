<?php
$name = $-POST['name'];
$visitor-email = $_POST['email'];
$subject = $-POST['subject'];
$message = $_POST['message'];

$email_from = 'snehagowda238@gmail.com';

$email_subject = 'New Form Submission'

$email-body = "User Name: $name. \n".
              "User Email: $visitor_email. \n".
              "Subject: $subject. \n".
              "User Message: $message. \n";

$to =  'snehagowda238@gmail.com';

$header = "From: $email_from \r\n";

$header .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");   
?>