<?php
include 'connect.php';
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Validate inputs
    if (empty($email) || empty($password)) {
        echo "Email and password are required.";
        exit;
    }

    // Check if user exists
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        // User exists, now check the password
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        // Verify the password
        if (password_verify($password, $hashed_password)) {
            // Password is correct, start a session
            session_start();
            $_SESSION['user_id'] = $id; // Store user ID in session
            echo "Login successful!";
            // Redirect to a welcome page or dashboard
            header("Location: home.php");
            exit;
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that email.";
    }

    $stmt->close();
}

$conn->close();
?>