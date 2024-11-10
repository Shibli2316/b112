<?php
require 'db.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Check if the token exists and is valid
    $stmt = $pdo->prepare("SELECT * FROM users WHERE token = ? AND token_expiry > NOW()");
    $stmt->execute([$token]);
    $user = $stmt->fetch();

    if ($user) {
        // Update user to verified
        $stmt = $pdo->prepare("UPDATE users SET is_verified = 1, token = NULL WHERE token = ?");
        $stmt->execute([$token]);

        echo "Your email has been verified! You can now sign in.";
    } else {
        echo "Invalid or expired token.";
    }
}
