<?php
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $mailFrom; = $_POST['email'];
    $message = $_POST['message'];
    
    $mailTo = "imthedawn@yahoo.com";
    $subject = "Mail From FIC Website";
    $msg = "Name: ".$name."\n"."Wrote to you :"."\n\n".$message;

    $headers = "From: ".$mailFrom;
    if(mail($mailTo,$subject,$msg,$headers)){
        echo "<h1>Mail Sent Successfully! Thank You"." ".$name.",We will contact you shortly</h1>";
    }
    else{
        echo "Something Went wrong!";
    }

}
?>