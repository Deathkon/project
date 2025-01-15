<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizzes</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

</head>
<body>
    <header>
        <div class="navbar">
            <h1>Precision Farming Hub</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="login.php">Tutorials</a></li>
                    <li><a href="sensors.php">IoT Sensors</a></li>
                    <li><a href="data.php">Data Visualizations</a></li>
                    <li><a href="quizzes.php" class="active">Quizzes</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="quiz-section">
            <h2>Test Your Knowledge</h2>
            <p>Challenge yourself with these questions about IoT sensors and precision farming.</p>

            <!-- Updated form action to include name, role, and password fields -->
            <form class="quiz-form" method="POST" action="../controllers/process_quiz.php">
                <!-- Question 1 -->
                <div class="quiz-question">
                    <h3>1. What does a soil moisture sensor measure?</h3>
                    <label><input type="radio" name="question1" value="a"> Soil temperature</label><br>
                    <label><input type="radio" name="question1" value="b"> Soil moisture content</label><br>
                    <label><input type="radio" name="question1" value="c"> Soil pH level</label><br>
                </div>

                <!-- Question 2 -->
                <div class="quiz-question">
                    <h3>2. Which sensor is used to monitor air temperature?</h3>
                    <label><input type="radio" name="question2" value="a"> pH sensor</label><br>
                    <label><input type="radio" name="question2" value="b"> Soil moisture sensor</label><br>
                    <label><input type="radio" name="question2" value="c"> Temperature sensor</label><br>
                </div>

                <!-- Question 3 -->
                <div class="quiz-question">
                    <h3>3. Why is precision farming important?</h3>
                    <label><input type="radio" name="question3" value="a"> Reduces crop yield</label><br>
                    <label><input type="radio" name="question3" value="b"> Optimizes resource usage</label><br>
                    <label><input type="radio" name="question3" value="c"> Increases fertilizer wastage</label><br>
                </div>

                <button type="submit" class="btn">Submit</button>
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
