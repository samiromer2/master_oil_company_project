<?php
session_start(); //to ensure you are using same session
session_destroy(); //Destroy it! So we are logged out now
header("location:index.html"); // Move back to login.php without a logout message
exit();
?>

