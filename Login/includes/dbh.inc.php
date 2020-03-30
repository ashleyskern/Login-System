<?php
// Login info
$dBServername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "Login";

// Create connection
$conn = new mysqli($dBServername, $dBUsername, $dBPassword, $dBName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
