<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set up email parameters
    $to = "sidofficial1005@gmail.com";
    $subject = "New message from your website";
    $body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "Message sent successfully!";
    } else {
        echo "Error: Unable to send message.";
    }
} else {
    // Redirect back to the contact form if accessed directly
    header("Location: index.html");
    exit;
}
?>
