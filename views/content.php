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
    <?php 
    session_start();
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit();
    }
    include '../components/navbar.php'; 
    ?>

    <main>
        <section id="tutorials">
            <h2>Step-by-Step Tutorials</h2>
            <p>Learn how to implement IoT technology for precision farming with these detailed guides.</p>
            <div class="tutorial-list">
                <article>
                    <img src="../assets/images/setup-sensors.jpg" alt="Setting up IoT Sensors for precision farming">
                    <h3>1. Setting Up IoT Sensors</h3>
                    <p>Learn how to install and configure soil moisture and temperature sensors.</p>
                    <a href="setup-sensors.php" class="btn-readmore">Read More</a>
                </article>
                <article>
                    <img src="../assets/images/connect-network.jpg" alt="Connecting Sensors to Network for real-time data">
                    <h3>2. Connecting Sensors to the Network</h3>
                    <p>Step-by-step instructions to connect sensors to a Wi-Fi network for real-time data.</p>
                    <a href="connect-network.php" class="btn-readmore">Read More</a>
                </article>
                <article>
                    <img src="../assets/images/analyze-data.jpg" alt="Interpreting Sensor Data for decision-making">
                    <h3>3. Interpreting Sensor Data</h3>
                    <p>Learn how to analyze data collected by IoT devices for decision-making.</p>
                    <a href="analyze-data.php" class="btn-readmore">Read More</a>
                </article>
            </div>
        </section>
    </main>
    <?php include '../components/footer.php'; ?>
</body>
</html>
