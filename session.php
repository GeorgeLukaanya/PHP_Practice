<?php
// Start the session
session_start();

// Set session variables
$_SESSION["username"] = "JohnDoe";
$_SESSION["email"] = "john.doe@example.com";
$_SESSION["loggedin"] = true;

echo "Session variables are set.";
?>