<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Change these values to your Gmail account and customize the email content
    $to = 'Emonagakowen@gmail.com';
    $subject = 'New message from ' . $name;
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo 'Message sent successfully!';
    } else {
        echo 'Error: Unable to send message.';
    }
} else {
    echo 'Error: Invalid request.';
}
?>
