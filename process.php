<?php
  if (isset($_POST['email']))  {
  
    //Email information
    $admin_email = "gaurav@believebusiesses.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    //send email
    mail($admin_email, "New Form Submission", $name . ' - ' . $phone, "From:" . $email);
    
    header('Location: https://warm-alpaca-1f52bb.netlify.app/success.html');
  }