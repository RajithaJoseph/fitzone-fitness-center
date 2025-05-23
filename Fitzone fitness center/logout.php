<?php
// logout.php
session_start(); // Start the session

// Destroy all session data
session_unset();
session_destroy();


sleep(1);
// Redirect to the login page or home page
header("Location: login_form.php");
exit();
?>
