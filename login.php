<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "precision_farming";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error);
    die("Connection failed. Please try again later.");
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $role = $_POST['role'];
    $user_password = $_POST['password'];

    // Use prepared statements for user login to prevent SQL injection
    $stmt = $conn->prepare("SELECT password FROM logins WHERE name = ? AND role = ?");
    $stmt->bind_param("ss", $name, $role);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashed_password);
        $stmt->fetch();

        // Verify the password
        if (password_verify($user_password, $hashed_password)) {
            // Redirect to a welcome page after successful login
            header("Location: content.html");
            exit();
        } else {
            error_log("Invalid password for user: " . $name);
            echo "Invalid password.";
        }
    } else {
        error_log("No user found with the provided credentials: " . $name);
        echo "No user found with the provided credentials.";
    }

    $stmt->close();
}

$conn->close();
?>
