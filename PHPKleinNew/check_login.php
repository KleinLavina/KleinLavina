<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Username, password, and captcha from the form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $captcha = $_POST['captcha'];

    // Include the user data from another file (optional)
    $users = include "userdata.php"; // Ensure userdata.php is correctly structured

    // Authenticate the user
    $message = authenticateUser($users, $username, $password, $captcha);

    // Display message or redirect accordingly
    echo $message;
}

function authenticateUser($data, $username, $password, $captcha) {
    // CAPTCHA validation: allow if the CAPTCHA matches
    if ($captcha === $_SESSION['code']) {
        // Check each user in the data array
        foreach ($data as $user) {
            // Verify username and password
            if ($user['username'] === $username && $user['password'] === $password) {
                // Success: set session variables and redirect
                $_SESSION['login_user'] = $username;
                $_SESSION['logged_in'] = 'yes';
                header("Location: index.php");
                exit;
            }
        }

        // If no match is found for the username and password
        $_SESSION['error_msg'] = 'Invalid username or password.';
        header("Location: index.php?page=login");
        exit;

    } else {
        // If the CAPTCHA doesn't match
        $_SESSION['error_msg'] = 'CAPTCHA did not match.';
        header("Location: index.php?page=login");
        exit;
    }
}

?>
