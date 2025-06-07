<!-- <!DOCTYPE HTML>
<html>
<head>
    <title>Temple Locations</title>
</head>
<body>
    <h1>Temple Locations</h1>
    <?php
    // Include database connection
    include('includes/config.php');

    // Fetch temple locations from the database
    $query = "SELECT * FROM tbltemple";
    $result = mysqli_query($con, $query);

    // Display temple locations
    while ($row = mysqli_fetch_assoc($result)) {
        $templeName = $row['TempleName'];
        $latitude = $row['Latitude'];
        $longitude = $row['Longitude'];
    ?>
        <div>
            <h2><?php echo $templeName; ?></h2>
            <p>Location: <?php echo $latitude; ?>, <?php echo $longitude; ?></p>
            <a href="https://www.google.com/maps?q=<?php echo $latitude; ?>,<?php echo $longitude; ?>" target="_blank">View on Google Maps</a>
            <form action="https://www.google.com/maps" method="get" target="_blank">
                <input type="hidden" name="q" value="<?php echo $latitude; ?>,<?php echo $longitude; ?>">
                <button type="submit">Location</button>
            </form>
        </div>
    <?php } ?>
</body>
</html> -->
