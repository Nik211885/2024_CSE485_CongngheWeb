<?php
session_start();
session_regenerate_id(true); // Generate a new session ID for enhanced security
session_destroy();
setcookie('logged_in', "", 1, "/", true, true, true); // Secure cookie with HTTP-only and HTTPS
header('Location: login.php');