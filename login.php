<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "precision_farming";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $user_password = mysqli_real_escape_string($conn, $_POST['password']);

    // Hash the password for security
    $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);

    // Insert user data into the database
    $sql = "INSERT INTO logins (name, role, password) VALUES ('$name', '$role', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to a welcome page after successful login
        header("Location: content.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
