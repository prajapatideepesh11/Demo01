<?php
$servername = "localhost";
$username = "root";
$password = "Qwer@1234";
$dbname = "demo01";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

    
