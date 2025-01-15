<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IoT Sensors</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

</head>
<body>
    <?php include '../components/navbar.php'; ?>

    <main>
        <section class="sensors-section">
            <h2>IoT Sensors for Precision Farming</h2>
            <p>Explore the sensors commonly used to optimize agricultural practices and improve crop yields.</p>

            <div class="sensor-card">
                <img src="../assets/images/soil moisture.jpg" alt="Soil Moisture Sensor">
                <h3>Soil Moisture Sensor</h3>
                <p>Measures the moisture content in soil to help farmers optimize irrigation and reduce water wastage.</p>
            </div>

            <div class="sensor-card">
                <img src="../assets/images/temperature sensor.jpg" alt="Temperature Sensor">
                <h3>Temperature Sensor</h3>
                <p>Monitors soil and air temperatures, providing insights for planting and climate control.</p>
            </div>

            <div class="sensor-card">
                <img src="../assets/images/ph sensor.jpg" alt="pH Sensor">
                <h3>pH Sensor</h3>
                <p>Determines the soil's pH level to guide fertilization and ensure optimal crop growth.</p>
            </div>
        </section>
    </main>

    <?php include '../components/footer.php'; ?>
</body>
</html>
