<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "precision_farming";
// Create connection using prepared statements
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection and add error handling
if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error);
    die("Connection failed. Please try again later.");
}
echo "Connected successfully";
?>
