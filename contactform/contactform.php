<?php
     $name= $_POST['name'];
     $visitor_email= $_POST['email'];
     $subject= $_POST['subject'];
     $message= $_POST['message'];
     $email_from= 'abrahamkurashitest@gmail.com';
     

     $to_email = "$email_from";
    
     $body = "User Name: $name. \n".
             "User Email: $visitor_email.\n".
             "User subject: $subject.\n". 
             "User Message: $message.\n";
     $headers = "From: $email_from";
 
     if (mail($to_email, $subject, $body, $headers)) {
        echo "Email successfully sent";
     } else {
        echo "Email sending failed...";
}

?>