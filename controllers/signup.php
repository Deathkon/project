<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require 'conn.php';

    $username = isset($_POST['name']) ? $_POST['name'] : null;
    $password = isset($_POST['password']) ? $_POST['password'] : null;
    $role = isset($_POST['role']) ? $_POST['role'] : null;

    // Check if any field is empty
    if (empty($username) || empty($password) || empty($role)) {
        echo "All fields are required.";
        exit();
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO logins (name, password, role) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $hashed_password, $role);

    if ($stmt->execute()) {
        // Set session variables
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $role;

        // Redirect to congratulations page after successful signup
        header("Location: ../views/congratulations.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
