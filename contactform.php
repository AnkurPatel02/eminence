<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "info@kshitijspaces.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail form ".$name.".\n\n".$message;


    mail($mailTo, $subject, $txt, $headers);
    header("Location: thankyou.html");
}