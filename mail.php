<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "ruzitorosyan84@gmail.com"; 
    $subject = "New Message from Website";
    $message = "Name: " . htmlspecialchars($_POST["name"]) . "\n" .
               "Email: " . htmlspecialchars($_POST["email"]) . "\n" .
               "Message: " . htmlspecialchars($_POST["message"]);
    $headers = "From: " . htmlspecialchars($_POST["email"]) . "\r\n" .
               "Reply-To: " . htmlspecialchars($_POST["email"]);

    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>