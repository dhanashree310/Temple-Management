<?php
session_start();
error_reporting(0);
include('includes/config.php');

// Function to generate Google Maps link
function generateMapLink($latitude, $longitude) {
     return "https://www.google.com/maps?q=$latitude,$longitude";
 }

  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>	Temple Management || Temples</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script src="js/jquery.min.js"></script>
<!-- <script type="text/javascript">
        function openLocationOnMap(latitude, longitude) {
            // Open Google Maps in a new tab with the specified location
            window.open("https://www.google.com/maps?q=" + latitude + "," + longitude);
        }
</script> -->
</head>
<body>
<?php include_once('includes/header.php');?>
	<!-- prayer -->
	<div class="prayer">
		<div class="container">
			<h2>Temples</h2>
			<?php
			 if (isset($_GET['page_no']) && $_GET['page_no']!="") {
    $page_no = $_GET['page_no'];
    } else {
        $page_no = 1;
        }

    $total_records_per_page = 5;
    $offset = ($page_no-1) * $total_records_per_page;
    $previous_page = $page_no - 1;
    $next_page = $page_no + 1;
    $adjacents = "2"; 

    $result_count = mysqli_query($con,"SELECT COUNT(*) As total_records FROM tbltemple");
    $total_records = mysqli_fetch_array($result_count);
    $total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
    $second_last = $total_no_of_pages - 1; // total page minus 1
$ret=mysqli_query($con,"select *from  tbltemple LIMIT $offset, $total_records_per_page");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
			<div class="prayer-top">
				<div class="col-md-4 prayer-left">
					<a href="single-temple.php?tid=<?php echo  htmlentities($row['ID']);?>"><img src="admin/templeimages/<?php echo htmlentities($row['TempleImage1']);?>" class="img-responsive" alt="" /></a>
				</div>
				<div class="col-md-8 prayer-right">
					<a href="single-temple.php?tid=<?php echo  htmlentities($row['ID']);?>"><h3><?php echo  htmlentities($row['TempleName']);?></h3></a>
					<h6><?php echo  htmlentities($row['City']);?> (<?php echo  htmlentities ($row['State']);?>), <?php echo  htmlentities($row['Country']);?></h6>
					<p><?php echo  htmlentities($row['Description']);?></p>
                          <!-- Location button -->
                        <!-- <a href="<?php echo generateMapLink($row['Latitude'], $row['Longitude']);?>" class="btn btn-primary" target="_blank">Location</a> -->
					<a href="book-darshan.php?darshanbookid=<?php echo  htmlentities($row['ID']);?>" class="btn btn-success">Darshan Booking</a>
					<a href="donation.php?donationid=<?php echo  htmlentities($row['ID']);?>" class="btn btn-info">Donation</a>
					<!-- <button class="btn btn-primary" onclick="openLocationOnMap()">Location</button> -->
                    <a href="https://www.google.com/maps/place/Govardhan+Ecovillage/@19.6554842,72.962615,17z/data=!3m1!4b1!4m6!3m5!1s0x3be70e5cec283d59:0xff923ef999861fde!8m2!3d19.6554842!4d72.9651899!16s%2Fg%2F1td2sbzl?entry=ttu" class="btn btn-primary">Location</a>
				</div>
				<div class="clearfix"> </div>
			</div><?php 
$cnt=$cnt+1;
}?>
			
			
		</div>
	</div>
	<ul class="pagination" style="padding-left: 100px;">
    
    <li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
    <a <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>>Previous</a>
    </li>
       
    <?php 
    if ($total_no_of_pages <= 10){       
        for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
            if ($counter == $page_no) {
           echo "<li class='active'><a>$counter</a></li>";  
                }else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                }
        }
    }
    elseif($total_no_of_pages > 10){
        
    if($page_no <= 4) {         
     for ($counter = 1; $counter < 8; $counter++){       
            if ($counter == $page_no) {
           echo "<li class='active'><a>$counter</a></li>";  
                }else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                }
        }
        echo "<li><a>...</a></li>";
        echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
        echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
        }

     elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {         
        echo "<li><a href='?page_no=1'>1</a></li>";
        echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";
        for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {         
           if ($counter == $page_no) {
           echo "<li class='active'><a>$counter</a></li>";  
                }else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                }                  
       }
       echo "<li><a>...</a></li>";
       echo "<li><a href='?page_no=$second_last'>$second_last</a></li>";
       echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
            }
        
        else {
        echo "<li><a href='?page_no=1'>1</a></li>";
        echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";

        for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
          if ($counter == $page_no) {
           echo "<li class='active'><a>$counter</a></li>";  
                }else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
                }                   
                }
            }
    }
?>
    
    <li <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
    <a <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>Next</a>
    </li>
    <?php if($page_no < $total_no_of_pages){
        echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
        } ?>
</ul>
				
	<?php include_once('includes/footer.php');?>
</body>
</html>