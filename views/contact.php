<?php
    $name = $_POST['name'];
    $company = $_POST['company'];
    $visitor_email = $_POST['email'];
    $phone_number = $_POST['phone'];
    $message = $_POST['message'];

    $email_from = 'phamj1998@gmail.com';
    $email_subject = "New Form Submission"

    $email_body = "User name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Phone Number: $phone_number.\n".
                        "User Message: $message.\n".
    
    $to = "phamj1998@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply to: $visitor_email \r\n";

    mail($to, $email_subject, $email_body,$headers);

    header("Location: contact.html");
?>