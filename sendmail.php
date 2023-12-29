<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set up email parameters
    $to = "adekunleabdulquayum7@gmail.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    // Send the email
    mail($to, $subject, $message, $headers);
}
?>

