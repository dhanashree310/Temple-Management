<?php session_start();
error_reporting(0);
// Database Connection
include('includes/config.php');
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Registration</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/volunteer.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<?php include_once('includes/header.php');?>
    <div class= "volunteer">
        <!-- Google Form link -->
        <center><iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfWRWrvAYX7IvG1sSEDkwQlJoomjRk_Cj3oHNqmp8BbdAszOQ/viewform?embedded=true" width="940" height="1829" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe></center>
    </div>
<?php include_once('includes/footer.php');?>

</body>
</html>
