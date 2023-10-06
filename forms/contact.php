<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "ali.r.amirdehi@gmail.com";
    $headers = "From: $email";

    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";

    if (mail($to, $subject, $email_message, $headers)) {
        echo "Thank you for contacting me! I will get back to you shortly.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
