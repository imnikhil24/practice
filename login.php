<?php
// Dummy user credentials (insecure for demonstration purposes)
$validUsername = 'admin';
$validPassword = 'password123';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get user input
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate user credentials (insecure for demonstration purposes)
    if ($username === $validUsername && $password === $validPassword) {
        // Authentication successful
        echo 'Login successful!';
    } else {
        // Authentication failed
        echo 'Invalid username or password.';
    }
}
?>
