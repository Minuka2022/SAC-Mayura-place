<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['fullName'];
    $contactNumber = $_POST['contactNumber'];
    $preferredTime = $_POST['preferredTime'];
    $email = $_POST['email'];
    $noOfBricks = $_POST['noOfBricks'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $parish = $_POST['parish'];

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'stanthonymayuraplace.lk';
        $mail->SMTPAuth = true;
        $mail->Username = 'donations@stanthonymayuraplace.lk';
        $mail->Password = '#SAC#2025';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Recipient
        $mail->setFrom('donations@stanthonymayuraplace.lk', 'St. Anthony Mayura Place');
        $mail->addAddress('donations@stanthonymayuraplace.lk');

        // Email Content
        $mail->isHTML(true);
        $mail->Subject = 'New Donation Submission';
        $mail->Body = "
            <h4>Donation Form Submission</h4>
            <p><strong>Full Name:</strong> {$fullName}</p>
            <p><strong>Contact Number:</strong> {$contactNumber}</p>
            <p><strong>Preferred Time:</strong> {$preferredTime}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>No. of Bricks Required:</strong> {$noOfBricks}</p>
            <p><strong>Address:</strong> {$address}</p>
            <p><strong>Country:</strong> {$country}</p>
            <p><strong>Parish/Church:</strong> {$parish}</p>
        ";

        // Send email
        $mail->send();
        echo "Success"; // Indicates success for SweetAlert

    } catch (Exception $e) {
        echo "Error: {$mail->ErrorInfo}";
    }
}
?>
