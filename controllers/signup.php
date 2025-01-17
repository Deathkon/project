<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require 'conn.php';

    $username = isset($_POST['name']) ? $_POST['name'] : null;
    $password = isset($_POST['password']) ? $_POST['password'] : null;
    $confirmPassword = isset($_POST['confirmPassword']) ? $_POST['confirmPassword'] : null;
    $role = isset($_POST['role']) ? $_POST['role'] : null;

    // Check if any field is empty
    if (empty($username) || empty($password) || empty($confirmPassword) || empty($role)) {
        echo "All fields are required.";
        exit();
    }

    // Server-side password validation
    if (strlen($password) < 8 || !preg_match('/[A-Z]/', $password) || !preg_match('/[!@#$%^&*]/', $password) || !preg_match('/[0-9]/', $password)) {
        echo "Password must be at least 8 characters long, contain an uppercase letter, a symbol, and a number.";
        exit();
    }

    // Check if passwords match
    if ($password !== $confirmPassword) {
        echo "Passwords do not match.";
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
