<?php
require 'db.php'; // Include database connection
require 'vendor/autoload.php'; // Include Composer's autoload

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $token = bin2hex(random_bytes(16));
    $expiry = date("Y-m-d H:i:s", strtotime('+1 hour'));

    // Check if the email already exists
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $existingUser = $stmt->fetch();

    if ($existingUser) {
        // Email already registered
        echo "This email is already registered. Please use a different email or log in.";
    } else {
        // Insert user into database
        $stmt = $pdo->prepare("INSERT INTO users (email, password, token, token_expiry, is_verified) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$email, $password, $token, $expiry, 0]);

        // Send verification email using PHPMailer
        $mail = new PHPMailer(true);
        try {
            // Server settings
            $mail->isSMTP();
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            $mail->Host = 'smtp.gmail.com'; // SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'sammytest567@gmail.com'; // Your Gmail address
            $mail->Password = 'Qwerty@123#'; // Your Gmail app password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 465;

            // Recipients
            $mail->setFrom('sammytest567@gmail.com', 'Your Name'); // Sender's email and name
            $mail->addAddress($email); // Use the variable that contains the user's email

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Verify your email';
            $mail->Body = "Click here to verify your email: <a href='localhost/bytex/test/authTest/verify.php?token=$token'>Verify</a>";

            $mail->send();
            echo "Registration successful! Check your email for the verification link.";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="register.php" method="POST">
        Email: <input type="email" name="email" required>
        Password: <input type="password" name="password" required>
        <input type="submit" value="Register">
    </form>
    
</body>
</html>