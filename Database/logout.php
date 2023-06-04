<?php
session_start(); // Start the session

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect the user back to the index page
header("Location: ../Components/index.php");
exit(); // Terminate further execution
?>
