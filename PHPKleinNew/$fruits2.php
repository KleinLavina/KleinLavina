<?php
/*
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

function findUser($items, $key, $findUser) {
    $found = "No";
    foreach ($items as $item) {
        if ($item[$key] === $findUser) {
            $found = "Yes";
            break;
        }
    }
    return $found;
}

// Call the function after defining it
echo findUser($users, "username", "user1");
*/
?>
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

function findUser($items, $username) {
    foreach ($items as $item) {
        if ($item['username'] === $username) {
            return $item; // Return the whole user array
        }
    }
    return null; // Return null if not found
}

function authenticateUser($items, $username, $password) {
    $user = findUser($items, $username);
    if ($user && $user['password'] === $password) {
        return "Authentication successful for $username.";
    }
    return "Authentication failed for $username.";
}

// Example Usage
$usernameToFind = "user1";
$userInfo = findUser($users, $usernameToFind);

if ($userInfo) {
    echo "User found: Username: " . $userInfo['username'] . ", Password: " . $userInfo['password'] . "\n";
} else {
    echo "User not found.\n";
}

// Authenticate user
 // Authentication successful
echo authenticateUser($users, "user1", "password1") . "\n"; 
?>
