<?php
//get data from form   
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];

$to = "nmishika567@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@fitindiaiiitkota.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>