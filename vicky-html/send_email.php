<s></s><?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Set recipient email address
    $to = "vigneshbalu96@gmail.com"; // Replace with your email

    // Set email subject
    $subject = "Message from Contact Form";

    // Compose the email content
    $email_content = "Name: $fullname\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n\n";
    $email_content .= "Message:\n$message\n";

    // Set headers
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email";

    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email. Please try again later.";
    }
} else {
    // Redirect back to the contact page if accessed directly
    header("Location: contact.html");
    exit;
}
?>
