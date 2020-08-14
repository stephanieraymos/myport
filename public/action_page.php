<?php 
    if(!empty($_POST["send"])) {
    $name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['telephone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $formcontent="From: $name.\n".
                    "Email: $email.\n".
                    "Message: $message.\n";
    $recipient = "raymosstephanie@outlook.com";
    $subject = "Contact Form";
    $mailheader = "From: $email \r\n";
    $mailheader = "Reply-To: $email \r\n";

    if(mail($recipient, $subject, $formcontent, $mailheader)) {
	    $message = "Your inquiry has been sent.";
	    $type = "success";
	}

    //echo "Thank You for your email!";

    header("Location: index.html");
    }
?>
