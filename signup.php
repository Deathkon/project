<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="navbar">
            <h1>Precision Farming Hub</h1>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="tutorials.html">Tutorials</a></li>
                    <li><a href="sensors.html">IoT Sensors</a></li>
                    <li><a href="data.html">Data Visualizations</a></li>
                    <li><a href="quizzes.html">Quizzes</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="signup-section">
            <h2>Signup</h2>
            <form action="signup.php" method="POST">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br>
                <label for="role">Role:</label>
                <select id="role" name="role" required>
                    <option value="Farmer">Farmer</option>
                    <option value="Manager">Manager</option>
                    <option value="Admin">Admin</option>
                    <option value="Student">Student</option>
                </select><br>
                <button type="submit">Signup</button>
            </form>
        </section>
    </main>

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
                <li><a href="index.html">Home</a></li>
                <li><a href="tutorials.html">Tutorials</a></li>
                <li><a href="sensors.html">IoT Sensors</a></li>
                <li><a href="data.html">Data Visualizations</a></li>
                <li><a href="quizzes.html">Quizzes</a></li>
            </ul>
        </div>
    </footer>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        require 'conn.php';

        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $role = $_POST['role'];

        $stmt = $conn->prepare("INSERT INTO logins (name, password, role) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $password, $role);

        if ($stmt->execute()) {
            echo "Signup successful!";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    }
    ?>
</body>
</html>
