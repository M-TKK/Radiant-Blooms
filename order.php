<?php
  // Looking for the submit

  if(filter_has_var(INPUT_POST, 'submit')){

    // Grabbing the data
    $firstName = htmlspecialchars($_POST['first-name']);
    $lastName = htmlspecialchars($_POST['last-name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $selected_val = htmlspecialchars($_POST['color']);
    $address = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);
    $state = htmlspecialchars($_POST['state']);
    $code = htmlspecialchars($_POST['post-code']);
    $message = htmlspecialchars($_POST['message']);

    $toEmail = 'lmaomitch@gmail.com';
    $subject = 'New Order From ' .$email;
    $body =  '<h2>Order Request</h2>
             <h4>First Name</h4><p>'.$firstName.'</p>
             <h4>Last Name</h4><p>'.$lastName.'</p>
             <h4>Phone</h4><p>'.$phone.'</p>
             <h4>Email</h4><p>'.$email.'</p>
             <h4>I would like to order</h4><p>'.$selected_val.'</p>
             <h4>Address</h4><p>'.$address.'</p>
             <h4>City</h4><p>'.$city.'</p>
             <h4>State</h4><p>'.$state.'</p>
             <h4>Post Code</h4><p>'.$code.'</p>
             <h4>Message</h4><p>'.$message.'</p>
    
    ';

    $headers = "MIME-Version: 1.0" ."\r\n";
    $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";
    
    // From

    $headers .= "From: " .$name. "<".$email.">"."\r\n";

    if(mail($toEmail, $subject, $body, $headers)){
        // Email Sent
        header("location: order-success.html?mailsend");
    } else {
      
    }
             
  }
?>


