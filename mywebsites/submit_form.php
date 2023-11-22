<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Send email
  $to = "ibitowaoa@gmail.com";
  $subject = "Contact Form Submission";
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  mail($to, $subject, $body);

  // Redirect back to the form page after submission
  header("Location: element.html");
  exit;
}
?>





