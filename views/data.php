<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Visualizations</title>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

</head>
<body>
    <?php include '../components/navbar.php'; ?>

    <main>
        <section class="data-visualizations">
            <h2>Data Visualizations</h2>
            <p>Explore real-time and historical data from IoT sensors to make informed farming decisions.</p>

            <div class="chart-container">
                <h3>Soil Moisture Levels</h3>
                <img src="../assets/images/soil moisture levels.jpg" alt="Soil Moisture Chart">
            </div>

            <div class="chart-container">
                <h3>Temperature Trends</h3>
                <img src="../assets/images/temperature trends.jpg" alt="Temperature Chart">
            </div>

            <div class="chart-container">
                <h3>pH Level Variations</h3>
                <img src="../assets/images/ph scale variation .jpg" alt="pH Level Chart">
            </div>
        </section>
    </main>

    <?php include '../components/footer.php'; ?>
</body>
</html>
