<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "muhammadhumzaasim18@gmail.com";
    $subject = "New contact form submission from $name";
    $headers = "From: $email\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully. We will get back to you soon.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>
