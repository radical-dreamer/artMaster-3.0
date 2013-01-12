<?php

// Inialize session
//session_start();

setcookie("user", "", time()-3600);
// Delete all session variables
session_destroy();

// Jump to login page
header('Location: index.php');

?>