<?php
# Initialize the session
session_start();

# If user is not logged in then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
  echo "<script>" . "window.location.href='./src/admin/index.php';" . "</script>";  
} else {
  echo "<script>" . "window.location.href='./src/admin/index.php';" . "</script>";  
}
?>
