

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate form inputs (add appropriate validation as needed)
    $recipient = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Set additional headers (optional)
    $headers = "From: $recipient\r\n"; // Replace with the sender's email address
    $headers .= "Reply-To: $recipient\r\n"; // Replace with the sender's email address

    // Send the email
    if (mail($recipient, $subject, $message, $headers)) {
        // Email sent successfully
        echo "Email sent successfully!";
    } else {
        // Email sending failed
        echo "Error sending email. Please try again.";
    }
}
?>
