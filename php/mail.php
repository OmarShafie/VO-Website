<?php
if(isset( $_POST['contact_name']))
$name = $_POST['contact_name'];
if(isset( $_POST['contact_email']))
$email = $_POST['contact_email'];
if(isset( $_POST['contact_message']))
$message = $_POST['contact_message'];
if(isset( $_POST['contact_phone']))
$phone = $_POST['contact_phone'];

$content="From: $name \n Email: $email \n Message: $message";
$recipient = "omar@omarshafie.com";
$mailheader = "From: $email \r\n";
mail($recipient, "Message from omarsahfie.com", $content, $mailheader) or die("Error!");
echo "Email sent!";
?>