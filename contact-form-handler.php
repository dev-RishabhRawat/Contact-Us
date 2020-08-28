<?php
$first_name = $_POST['First Name'];
$last_name = $_POST['Last Name'];
$visitor_email =$_POST['Email'];
$contact = $_POST['Mobile'];
$message = $_POST['Message'];
$email_from = "dev.rishabh.2901@gmail.com";
$email_subject = "New Form Submission";
$email_body = "User name:"."$first_name"." "."$last_name"."\n User Email: $visitor_email.\n"."user Message: $message.\n";
$to = "rishabhr71@gmail.com";
$headers = "Form: $email_from \r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location : index.html");
 
?>