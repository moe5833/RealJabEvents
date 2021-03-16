<?php

if (isset($_POST['submit'])){


  $name = $_POST['name'];
  $emailFrom = $_POST['email'];
  $message = $_POST['message'];
  $email_subject = 'Website Customer Query';

    $emailTo = "mhussein93@hotmail.com";
    $headers = "From: " .$emailFrom;
    $email_body = "Customer Name:" .$name.".\n\n".$message;

mail($emailTo,$email_subject,$email_body,$headers);
header("Location: index.html?mailsend");
}

?>