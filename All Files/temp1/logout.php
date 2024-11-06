<?php
session_start();

// Destroy all session variables and the session itself
session_unset();
session_destroy();

// Redirect the user to the homepage or login page after logging out
header("Location: index.php"); // or redirect to a specific page
exit();
?>
