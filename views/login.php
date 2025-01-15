<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Precision Farming Hub</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <?php include '../components/navbar.php'; ?>
    <div class="login-container">
        <h2>Login to Access the Platform</h2>
        <!-- Updated form action to include name, role, and password fields -->
        <form action="../controllers/login.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="name" placeholder="Enter your username" required><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required><br>
            <label for="role">Role:</label>
            <select id="role" name="role" required>
                <option value="Farmer">Farmer</option>
                <option value="Manager">Manager</option>
                <option value="Admin">Admin</option>
                <option value="Student">Student</option>
            </select><br>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="signup.php">Signup here</a></p>
    </div>
    <?php include '../components/footer.php'; ?>
</body>
</html>
