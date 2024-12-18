<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php'; // Composer autoloader for PHPMailer

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $budget = $_POST['budget'];

    // PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // SMTP Server settings
        $mail->isSMTP();                                      // Use SMTP
        $mail->Host       = 'smtp.gmail.com';                 // Gmail SMTP server
        $mail->SMTPAuth   = true;                             // Enable SMTP authentication
        $mail->Username   = 'sandeepkumar941732@gmail.com';   // Your Gmail address
        $mail->Password   = 'wwzw ypxt mzwq lxln';            // Your Gmail App-Specific Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;   // TLS encryption
        $mail->Port       = 587;                              // Port for TLS

        // Sender and Recipient settings
        $mail->setFrom('sandeepkumar941732@gmail.com', 'Your Name');  // Sender email and name
        $mail->addAddress('sandeepkumar941732@gmail.com', 'Recipient Name'); // Recipient email and name

        // Email content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;                            // Use dynamic subject
        // Create dynamic message content
        $mail->Body    = "You have received a new message from <br><b>$name</b>.<br>
                          <strong>Email:</strong> $email<br>
                          <strong>Budget:</strong> $budget<br>
                          <strong>Message:</strong>$message";
        $mail->AltBody = "You have received a new message from $name.\n\n
                          Email: $email\n
                          Budget: $budget\n\n
                          Message:\n
                          $message"; // Plain text version for non-HTML email clients

        // Send email
        $mail->send();
        echo 'Email successfully sent';
    } catch (Exception $e) {
        echo "Email sending failed. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
