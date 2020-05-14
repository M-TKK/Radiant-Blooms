<?php
  // Looking for the submit

  if(filter_has_var(INPUT_POST, 'submit')){

    // Grabbing the data
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $toEmail = 'lmaomitch@gmail.com';
    $subject = 'Contact Request From ' .$name;
    $body =  '<h2>Contact Request</h2>
             <h4>Name</h4><p>'.$name.'</p>
             <h4>Phone</h4><p>'.$phone.'</p>
             <h4>Email</h4><p>'.$email.'</p>
             <h4>Message</h4><p>'.$message.'</p>
    ';

    $headers = "MIME-Version: 1.0" ."\r\n";
    $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";
    
    // From

    $headers .= "From: " .$name. "<".$email.">"."\r\n";

    if(mail($toEmail, $subject, $body, $headers)){
        // Email Sent
        header("location: contact-success.html?mailsend");
    } else {
      
    }
             
  }
?>


