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
            echo "Invalid password.";
        }
    } else {
        echo "No user found with the provided credentials.";
    }

    $stmt->close();
}

$conn->close();
?>
