<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Email configuration
    $to = "ashutoshrana171@gmail.com";
    $subject = "New message from $name";
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    // Send email
    if (mail($to, $subject, $body)) {
        // Email sent successfully, redirect to success page
        header("Location: success.php");
        exit;
    } else {
        // Failed to send email, log error and redirect to error page
        $error_message = "Failed to send email: $subject";
        error_log($error_message); // Log error
        header("Location: error.php");
        exit;
    }
} else {
    // If the form is not submitted, redirect to the contact page
    header("Location: index.html");
    exit;
}
?>
