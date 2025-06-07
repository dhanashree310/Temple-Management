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
           border: 1px solid #ADD8E6; /*Adjust the values as needed*/
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
        <h1>Shri Hari Stotram</h1>
        <div class="text-container">
        
            <div class="row">
            <div class="col-md-12">
                <div class="card mb-4 shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <figure>
                            <img src="images/shree hari.jpg" class="bd-placeholder-img" alt="" style="margin-top: 70px; margin-left:60px; width:450px; height:600px;">
                            <figcaption style="text-align: center; margin-top:20px; margin-left:100px">
                            <audio controls>
                <source src="Shri Hari Stotram.mp3" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
                            </figcaption>
                        </figure>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <strong class="d-inline-block mb-2 text-primary-emphasis" style="margin-top: 20px; margin-left: 200px;">For Peace</strong>
                                <h3 class="mb-0" style="margin-top: 20px; margin-left: 200px;">Shree Hari Stotram</h3>
                                <div class="mb-1 text-body-secondary" style="margin-top: 20px; margin-left: 200px;">Jun 3</div>
                                <p class="card-text mb-auto" style="margin-top: 20px; margin-left: 200px; margin-right: 50px;">Shree Hari Stotram is a powerful mantra dedicated to Lord Vishnu....<br>
                                    जगज्जालपालं चलत्कण्ठमालंशरच्चन्द्रभालं महादैत्यकालं<br>
                नभोनीलकायं दुरावारमायंसुपद्मासहायम् भजेऽहं भजेऽहं॥1॥<br><br>
                
                सदाम्भोधिवासं गलत्पुष्पहासंजगत्सन्निवासं शतादित्यभासं<br>
                गदाचक्रशस्त्रं लसत्पीतवस्त्रंहसच्चारुवक्त्रं भजेऽहं भजेऽहं॥2॥<br><br>
                
                रमाकण्ठहारं श्रुतिव्रातसारंजलान्तर्विहारं धराभारहारं<br>
                चिदानन्दरूपं मनोज्ञस्वरूपंध्रुतानेकरूपं भजेऽहं भजेऽहं॥3॥<br><br>

                जराजन्महीनं परानन्दपीनंसमाधानलीनं सदैवानवीनं<br>
                जगज्जन्महेतुं सुरानीककेतुंत्रिलोकैकसेतुं भजेऽहं भजेऽहं॥4॥<br><br>

                कृताम्नायगानं खगाधीशयानंविमुक्तेर्निदानं हरारातिमानं<br>
                स्वभक्तानुकूलं जगद्व्रुक्षमूलंनिरस्तार्तशूलं भजेऽहं भजेऽहं॥5॥<br><br>

                समस्तामरेशं द्विरेफाभकेशंजगद्विम्बलेशं ह्रुदाकाशदेशं<br>
                सदा दिव्यदेहं विमुक्ताखिलेहंसुवैकुण्ठगेहं भजेऽहं भजेऽहं॥6॥<br><br>

                सुरालिबलिष्ठं त्रिलोकीवरिष्ठंगुरूणां गरिष्ठं स्वरूपैकनिष्ठं<br>
                सदा युद्धधीरं महावीरवीरंमहाम्भोधितीरं भजेऽहं भजेऽहं॥7॥<br><br>

                रमावामभागं तलानग्रनागंकृताधीनयागं गतारागरागं<br>
                मुनीन्द्रैः सुगीतं सुरैः संपरीतंगुणौधैरतीतं भजेऽहं भजेऽहं॥8॥<br><br>
                                </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p style="padding-left: 350px">
                

            </p>
        </div>
    </div>
<?php include_once('includes/footer.php');?>

</body>
</html>
