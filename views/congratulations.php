<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congratulations</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>
    <div class="congratulations-container">
        <h1>Congratulations!</h1>
        <p>You have successfully signed up.</p>
        <button onclick="window.location.href='../index.php'">Go to Dashboard</button>
    </div>

    <script>
        // Confetti animation script
        function createConfetti() {
            const confettiContainer = document.createElement('div');
            confettiContainer.classList.add('confetti-container');
            document.body.appendChild(confettiContainer);

            for (let i = 0; i < 100; i++) {
                const confetti = document.createElement('div');
                confetti.classList.add('confetti');
                confetti.style.left = Math.random() * 100 + 'vw';
                confetti.style.animationDuration = Math.random() * 3 + 2 + 's';
                confettiContainer.appendChild(confetti);
            }
        }

        window.onload = createConfetti;
    </script>
</body>
</html>
