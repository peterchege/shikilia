<?php
/**
 * Tutorial: PHP Login Registration system
 *
 * Page : Logout
 */

// start session
session_start();

// Destroy user session
unset($_SESSION['user_id']);

// Redirect to index.php page
header("Location: index.php");
?>