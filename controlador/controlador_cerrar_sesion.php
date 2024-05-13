<?php
// resume current session
session_start();
// This function destroys all data recorded in a session and ends the session
session_destroy();
// This line redirects the user to the login page specified in the URL
header("location:/PLANTILLA-PHP-MASTER/vista/login/login.php");

?>
