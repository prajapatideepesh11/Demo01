<?php
$servername = "library.c2fiwz3rgd3y.us-west-2.rds.amazonaws.com";
$username = "admin";
$password = "12345678";
$dbname = "library";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

    