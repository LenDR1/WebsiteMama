<?php

if (isset($_POST['submit'])){
    $name = $_POST['fullname'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "lenneth.00@hotmail.com";
    $headers  "From: ".$mailFrom;
    $txt = "You have received an e-mail from".$name.".\n\n".$message;

    mail($mailTo, "Contact from Website", $txt, $headers);
    header("Location: contact.html?mailsend");
}