<?php 

    $name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['telephone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $formcontent="From: $name.\n".
                    "Email: $email.\n".
                    "Message: $message.\n";
    $recipient = "stephanie@stephanieraymos.com";
    $subject = "Contact Form";
    $mailheader = "From: $email \r\n";
    $mailheader = "Reply-To: $email \r\n";

    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

    echo "Thank You for your email!";

    header("Location: index.html");
    
?>