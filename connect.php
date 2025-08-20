<?php
// Database connection
$host = 'localhost'; // Change if your database is hosted elsewhere
$db = 'Travel';
$user = 'root'; // Your database username
$pass = 'pass123'; // Your database password

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>