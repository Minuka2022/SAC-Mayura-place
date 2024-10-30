<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['fullName'];
    $contactNumber = $_POST['contactNumber'];
    $preferredTime = $_POST['preferredTime'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $country = $_POST['country'];

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'stanthonymayuraplace.lk';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@stanthonymayuraplace.lk';
        $mail->Password = '#SAC#2024';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        $mail->setFrom('info@stanthonymayuraplace.lk', 'St. Anthony Mayura Place');
        $mail->addAddress('info@stanthonymayuraplace.lk');

        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = "
            <h4>New Contact Form Submission</h4>
            <p><strong>Full Name:</strong> {$fullName}</p>
            <p><strong>Contact Number:</strong> {$contactNumber}</p>
            <p><strong>Preferred Time to Contact:</strong> {$preferredTime}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Address:</strong> {$address}</p>
            <p><strong>Country:</strong> {$country}</p>
        ";

        $mail->send();

        $mail->clearAddresses();
        $mail->addAddress($email);
        $mail->Subject = 'Thank you for contacting us!';
        $mail->Body = "
            <h3>Thank you for reaching out!</h3>
            <p>Hello {$fullName},</p>
            <p>Thank you for contacting us. We will get back to you soon.</p>
            <p>Best Regards,<br>St. Anthony Mayura Place Team</p>
        ";

        $mail->send();

        // Redirect to contact.html with success status
        header("Location: contact.html?status=success");
        exit;
    } catch (Exception $e) {
        // Redirect to contact.html with error status
        header("Location: contact.html?status=error");
        exit;
    }
}
?>
