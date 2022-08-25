<?php
if(!isset($_POST['name']) ||

!isset($_POST['message']) ||

!isset($_POST['email'])) {

die('We are sorry to proceed your request due to error within form entries');   

}
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['message'];
$email_to = "disham2004@gmail.com";
$email_sub .= "Name: ". $name. " From: ". $email;

$email_message .= "First Name: ".($first_name)."\n";

$email_message .= "Last Name: ".($last_name)."\n";

$email_message .= "Email: ".($email_from)."\n";

$email_message .= "Telephone: ".($telephone)."\n";

$email_message .= "Comments: "($comments)."\n";
$headers = 'From: '.$email."\r\n";
if (@mail($email_to, $email_sub, $msg, $headers)){
    echo("message sent");
}else{
    echo("message not sent");
}
?>
Thank you for your response. I will reach out to you as soon as possible.