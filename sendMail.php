<?php

if(isset($_POST['submit'])) {
    $mailto = "wpennebaker@hotmail.com";

    $name = $_POST['name'];
    $fromEmail = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $header = "From: " . $fromEmail;

    $result = mail($mailto, $subject, $message, $header);

    if($result) $success = "Sent!";
    else $failted = "Failed...";
}

?>