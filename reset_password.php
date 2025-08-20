<?php
include 'connect.php';
// Check if the token is valid
if (isset($_GET['token'])) {
    $token = $_GET['token'];
} else {
    echo "Invalid token.";
    exit;
}

// Validate token
$stmt = $conn->prepare("SELECT email FROM password_resets WHERE token = ? AND expires >= ?");
$expires = date("U");
$stmt->bind_param("si", $token, $expires);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows == 1) {
    // Token is valid, show reset password form
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $new_password = trim($_POST['new_password']);
        $confirm_password = trim($_POST['confirm_password']);

        // Validate passwords
        if (empty($new_password) || empty($confirm_password)) {
            echo "Both password fields are required.";
            exit;
        }

        if ($new_password !== $confirm_password) {
            echo "Passwords do not match.";
            exit;
        }

        // Get email associated with the token
        $stmt->bind_result($email);
        $stmt->fetch();

        // Update the password
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("UPDATE users SET password = ? WHERE email = ?");
        $stmt->bind_param("ss", $hashed_password, $email);
        $stmt->execute();

        // Delete the token from the database
        $stmt = $conn->prepare("DELETE FROM password_resets WHERE token = ?");
        $stmt->bind_param("s", $token);
        $stmt->execute();

        echo "Your password has been reset successfully.";
    } else {
        // Display the reset password form
        echo '<form action="" method="POST">
                <label for="new_password ">New Password:</label>
                <input type="password" name="new_password" required>
                <label for="confirm_password">Confirm Password:</label>
                <input type="password" name="confirm_password" required>
                <input type="submit" value="Reset Password">
              </form>';
    }
} else {
    echo "Invalid or expired token.";
}

$stmt->close();
$conn->close();
?>