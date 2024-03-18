<?php
session_start();
// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Regenerate the session ID
session_regenerate_id(true);

// Clear the cache to prevent users from accessing protected pages after logging out
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

// Redirect the user to the login page
header("Location: ../../../public/index.php?page_name=login");
exit();
?>
