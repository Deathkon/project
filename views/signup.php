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
        <h2>Sign up to Access the Platform</h2>
        <!-- Updated form action to include name, role, and password fields -->
        <form id="signupForm" action="../controllers/signup.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="name" placeholder="Enter your username" required><br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required><br>
            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm your password" required><br>
            <label for="role">Role:</label>
            <select id="role" name="role" required>
                <option value="Farmer">Farmer</option>
                <option value="Manager">Manager</option>
                <option value="Admin">Admin</option>
                <option value="Student">Student</option>
            </select><br>
            <button type="submit">Signup</button>
        </form>
        <div id="errorMessage" class="message"></div>
    </div>
    <?php include '../components/footer.php'; ?>

    <script>
        document.getElementById('signupForm').addEventListener('submit', function(event) {
            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('confirmPassword').value;
            var errorMessage = document.getElementById('errorMessage');

            // Password validation
            var passwordRegex = /^(?=.*[A-Z])(?=.*[!@#$%^&*])(?=.*[0-9])(?=.*[a-z]).{8,}$/;

            if (!passwordRegex.test(password)) {
                errorMessage.textContent = "Password must be at least 8 characters long, contain an uppercase letter, a symbol, and a number.";
                event.preventDefault();
            } else if (password !== confirmPassword) {
                errorMessage.textContent = "Passwords do not match.";
                event.preventDefault();
            } else {
                errorMessage.textContent = "";
            }
        });
    </script>
</body>
</html>
