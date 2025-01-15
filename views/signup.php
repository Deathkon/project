<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorials Precision Farming Hub</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="navbar">
            <h1>Precision Farming Hub</h1>
            <nav>
                <ul>
                    <li><a href="../views/index.php">Home</a></li>
                    <li><a href="../views/login.php" class="active">Tutorials</a></li>
                    <li><a href="../views/sensors.php">IoT Sensors</a></li>
                    <li><a href="../views/data.php">Data Visualizations</a></li>
                    <li><a href="../views/quizzes.php">Quizzes</a></li>
                    <li><a href="../views/signup.php">Signup</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="login-container">
        <h2>Login to Access the Platform</h2>
        <!-- Updated form action to include name, role, and password fields -->
        <form action="../controllers/signup.php" method="POST">
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
            <button type="submit">Signup</button>
        </form>
    </div>
    <footer>
        <div class="footer-content">
            <p>Your ultimate destination for IoT-powered farming knowledge and tools.</p>
            <div class="socials">
                <a href="https://www.linkedin.com/in/queen-clemence-01a888214?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="https://www.linkedin.com/in/queen-clemence-01a888214?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://www.instagram.com/umwamikazi___?igsh=dTE0ZXJtd2Ewcmhi" target="https://www.instagram.com/umwamikazi___?igsh=dTE0ZXJtd2Ewcmhi"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Precision Farming Hub | All Rights Reserved</p>
            <ul class="footer-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Tutorials</a></li>
                <li><a href="sensors.php">IoT Sensors</a></li>
                <li><a href="data.php">Data Visualizations</a></li>
                <li><a href="quizzes.php">Quizzes</a></li>
            </ul>
        </div>
    </footer>
    
</body>
</html>
