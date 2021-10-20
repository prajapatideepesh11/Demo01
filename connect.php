<?php
$servername = "demo.cqowh5zkeqdq.us-east-2.rds.amazonaws.com";
$username = "admin";
$password = "12345678";
$dbname = "demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

    
