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

    // PHPMailer instance for admin email
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

        // Admin email settings
        $mail->setFrom('sandeepkumar941732@gmail.com', 'IT Developer');  // Sender email and name
        $mail->addAddress('sandeepkumar941732@gmail.com', 'Admin');   // Admin's email

        // Email content for admin
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;                            // Use dynamic subject
        $mail->Body    = "You have received a new message from <br><b>$name</b>.<br>
                          <strong>Email:</strong> $email<br>
                          <strong>Budget:</strong> $budget<br>
                          <strong>Message:</strong>$message";
        $mail->AltBody = "You have received a new message from $name.\n\n
                          Email: $email\n
                          Budget: $budget\n\n
                          Message:\n
                          $message"; // Plain text version for non-HTML email clients

        // Send email to admin
        $mail->send();

        // Send confirmation email to the user
        $mail->clearAddresses(); // Clear the recipient list
        $mail->addAddress($email, $name); // Send to the user who filled the form

        // Email content for user
        $mail->Subject = "Confirmation: We received your message";
        $mail->Body    = "Dear <b>$name</b>,<br><br>
                          Thank you for reaching out! We have received your message:<br><br>
                          <strong>Subject:</strong> $subject<br>
                          <strong>Budget:</strong> $budget<br>
                          <strong>Message:</strong><br>$message<br><br>
                          We will get back to you shortly.<br><br>
                          Best regards,<br>Your Team";
        $mail->AltBody = "Dear $name,\n\n
                          Thank you for reaching out! We have received your message:\n\n
                          Subject: $subject\n
                          Budget: $budget\n\n
                          Message:\n$message\n\n
                          We will get back to you shortly.\n\n
                          Best regards,\nYour Team";

        // Send email to user
        $mail->send();

        echo 'Email successfully sent to admin and user';

        // Delay for 2 seconds and then redirect
        sleep(2); // Wait for 2 seconds
        header('Location: index.html');
        exit; // Ensure no further code executes after the redirect
    } catch (Exception $e) {
        echo "Email sending failed. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
