<?php
    // Retrieve form data
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Email details
    $email_from = 'dwijkale@gmail.com'; // Update this to SR Convent's actual email
    $email_subject = "New Form Submission from SR Convent Website";
    
    // Email body format
    $email_body = "User Name: $name.\n".
                  "User Email: $visitor_email.\n".
                  "Subject: $subject.\n".
                  "User Message: $message.\n";

    // Target email address
    $to = "dwijkale@gmail.com"; // Update this to SR Convent's actual contact email

    // Headers for sender and reply-to address
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";

    // Send the email
    mail($to, $email_subject, $email_body, $headers);

    // Redirect to contact confirmation page
    header("Location: contact.html");
?>
