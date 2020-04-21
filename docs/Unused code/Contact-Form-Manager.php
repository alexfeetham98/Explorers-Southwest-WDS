<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'test@test.com';

    $email_subject = "New Enquiry";

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                    "User Message: $message.\n";

    $to = "alex2.feetham@live.uwe.ac.uk";

    $headers = "Form: $email_from \r\n";

    $headers .="Reply-To: $visitor_email \r\n";

    mail($to, $email_subject,$email_body,$headers);

    header("Location: Contact.html");


?>