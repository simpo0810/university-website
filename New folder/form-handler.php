<?php
$name = $_POST['name'];
$visitor_email= $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from="dasimpliceintungane3@gmail.com";

$email_subject='NEw form sub'


$email_body="User Name:$name.\n". 
"User Email:$visitor_email.\n"
"suject:$subject.\n" 
"user message:$message.\n"


$to="simpo69800688@gmail.com";
$headers="From:$email_from\r\n";

$headers="Reply-To:$visitor-email\r\n";

mail($to,$email_subject,$email_body,$headers)

header("Location:contact.html");

?>