<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "nataliaandradeommer@gmail.com";  // Replace with your email address
    $subject = "New Form Submission";

    // Collect form data
    $message = "Name: " . $_POST["firstName"] . " " . $_POST["lastName"] . "\n";
    $message .= "Email: " . $_POST["email"] . "\n";
    $message .= "Location: " . $_POST["location"] . "\n";
    $message .= "Deadline: " . $_POST["deadline"] . "\n";
    $message .= "Services: " . $_POST["services"] . "\n";

    if ($_POST["services"] == "other") {
        $message .= "Other Services: " . $_POST["otherServices"] . "\n";
    }

    $message .= "Project Details: " . $_POST["projectDetails"] . "\n";
    $message .= "How Heard: " . $_POST["howHeard"] . "\n";
    // Add more fields as needed

    // Send email
    mail($to, $subject, $message);

    // Redirect back to your website or show a thank you message
    header("Location: thank-you.html");  // Replace with your thank you page
    exit();
}
?>
