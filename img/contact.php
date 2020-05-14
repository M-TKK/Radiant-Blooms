<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $select_val = $_POST['select'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];
  

  $mailTo = "lmaomitch@gmail.com";
  $headers = "From: .$mailFrom";
  $txt = "You have received an e-mail from ".$name.".\n\n".$select_val.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: contact-submission.html?mailsend");
}

?>
