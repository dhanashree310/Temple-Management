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
    <title>Spiritual Teachings</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/spiritual.css" rel="stylesheet" type="text/css" media="all" />
    
    <style>
       /* Add this style to your style.css file */
       .container {
           margin-top: 20px; /* Adjust the value as needed */
           
       }

       .card {
           border: 1px solid #ADD8E6; /*Adjust the values as needed */
           border-radius: 5px;
           margin-bottom: 20px;
           background: linear-gradient(to top, #ADD8E6, white);
       }
       
       /* Add a border around the text content */
       .text-container {
           border: 1px solid black; /* Border style */
           padding: 20px; /* Padding to create space between text and border */
           border-radius: 5px; /* Rounded corners */
           margin-bottom: 20px;
           margin-right: 50px;
       }
   </style>
</head>
<body>
<?php include_once('includes/header.php');?>
    <div class="container">
        <h1>Pranaam Mantra</h1>
        <div class="text-container">
        
            <div class="row">
            <div class="col-md-12">
                <div class="card mb-4 shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <strong class="d-inline-block mb-2 text-primary-emphasis" style="margin-top: 50px; margin-left: 190px; font-size:larger;">Srila Prabhupada</strong>
                        <figure>
                            <img src="images/srila prabhupada.jpg" class="bd-placeholder-img" alt="" style="margin-top: 70px; margin-left:60px; width:400px; height:600px;">
                            <figcaption style="text-align: center; margin-top:20px; margin-left:100px">
                            <audio controls>
                <source src="Srila_Prabhupada_Pranati.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
                            </figcaption>
                        </figure>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <!-- <strong class="d-inline-block mb-2 text-primary-emphasis" style="margin-top: 50px; margin-left: 0; margin-right:80px;">Srila Prabhupada</strong> -->
                                <h1 class="mb-0" style="margin-top: 20px; margin-left: 180px;">Pranaam Mantra</h1>
                                <div class="mb-1 text-body-secondary" style="margin-top: 20px; margin-left: 180px; ">Jun 3</div>
                                <p class="card-text mb-auto" style="margin-top: 20px; margin-left: 180px; margin-right: 50px;">Used by the monks in ISKCON before teaching the scripture....<br>
                                    नमः ॐ विष्णु पादय, कृष्ण पृष्ठाय भूतले ।<br> 
                                    श्रीमते भक्ति वेदांत स्वामिन इति नामिने ।।<br> 
                                    नमस्ते सरस्वते देवे गौर वाणी प्रचारिणे । <br>
                                    निर्विशेष शून्य-वादी पाश्चात्य देश तारिणे ।।<br><br>   
                                    
                                    
                                    Meaning of the mantra:<br>
                                    I offer my respectful obeisances unto His Divine Grace A. C. <br>
                                    Bhaktivedanta Swami Prabhupada, who is very dear to Lord Krishna,<br> 
                                    having taken shelter at His lotus feet. Our respectful obeisances are unto you, <br> 
                                    O spiritukindly preaching the message of Lord Chaityanya Mahaprabhu and delivering the western countries, <br>
                                    which are filled with impersonalism and voidism.<br><br>
                                </p>
                                    <h1 style="margin-left: 180px;">Srila Prabhupada</h1><br>
                                <p style="margin-left: 180px; margin-right: 50px; margin-bottom: 50px;">
                                    Srila Prabhupada was born Abhay Charan De on September 1, 1896 to a pious Hindu family in Calcutta.
                                    On July 11, 1966, he officially registered his organization in the state of New York, formally founding 
                                    the International Society for Krishna Consciousness.
                                    In the eleven years that followed, Srila Prabhupada circled the globe 14 times on lecture tours, bringing the teachings of Lord Krishna to thousands of people on six continents.<br><br>  Men and women from all backgrounds and walks of life came forward to accept his message, and with their help, Srila Prabhupada established ISKCON centers and projects throughout the world. Under his inspiration, Krishna devotees established temples, rural communities, educational institutions, and started what would become the world’s largest vegetarian food relief program.    With the desire to nourish the roots of Krishna consciousness in its home, Srila Prabhupada returned to India several times, where he sparked a revival in the Vaishnava tradition. In India, he opened dozens of temples, including large centers in the holy towns of Vrindavan and Mayapur.
                                </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p style="padding-left: 350px"></p>
        </div>
    </div><?php include_once('includes/footer.php');?>
</body>
</html>
