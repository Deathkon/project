<?php
// Correct answers
$answers = [
    'question1' => 'b',
    'question2' => 'c',
    'question3' => 'b'
];

$score = 0;
$total = count($answers);

// Calculate score
foreach ($answers as $question => $correctAnswer) {
    if (isset($_POST[$question]) && $_POST[$question] === $correctAnswer) {
        $score++;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Results</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <header>
        <div class="navbar">
            <h1>Precision Farming Hub</h1>
            <nav>
                <ul>
                    <li><a href="../views/index.php">Home</a></li>
                    <li><a href="../views/tutorials.php">Tutorials</a></li>
                    <li><a href="../views/sensors.php">IoT Sensors</a></li>
                    <li><a href="../views/data.php">Data Visualizations</a></li>
                    <li><a href="../views/quizzes.php" class="active">Quizzes</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="quiz-section">
            <h2>Quiz Results</h2>
            <p>You scored <strong><?php echo $score; ?></strong> out of <strong><?php echo $total; ?></strong>.</p>

            <?php if ($score === $total): ?>
                <p>Excellent work! You got all the answers correct!</p>
            <?php elseif ($score > 0): ?>
                <p>Good job! Review the material to improve your score.</p>
            <?php else: ?>
                <p>Don't worry! Try again after reviewing the tutorials.</p>
            <?php endif; ?>

            <a href="../views/quizzes.php" class="btn">Try Again</a>
        </section>
    </main>

    <footer>
        <p>© 2024 Precision Farming Hub. All Rights Reserved.</p>
    </footer>
</body>
</html>
