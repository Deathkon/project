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
    <?php include '../components/navbar.php'; ?>

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

    <?php include '../components/footer.php'; ?>
</body>
</html>
