<?php
$users = [
    [
        'username' => 'user1',
        'password' => 'password1',
    ],
    [
        'username' => 'user2',
        'password' => 'password2',
    ],
    [
        'username' => 'user3',
        'password' => 'password3',
    ],
    [
        'username' => 'user4',
        'password' => 'password4',
    ],
];

function authenticateUser($data, $username, $password) {
    foreach ($data as $user) { // Iterate over the data array
        if ($user['username'] === $username) {
            if ($user['password'] === $password) {
                return "Authentication successful for $username.";
                $_SESSION['login_user']=$myusername;
		$_SESSION['logged_in'] = 'yes';
		header("location: index.php");
            } else {
                return "Authentication failed for $username. Incorrect password.";
            }
        }
    }
    return "User not found.";
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the username and password from the form
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Authenticate the user
    $message = authenticateUser($users, $username, $password);
    echo $message;
}
?>

<!-- HTML Form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
