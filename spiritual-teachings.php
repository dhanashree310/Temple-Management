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
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

    
    <style>
       /* Add this style to your style.css file */
       .container {
           margin-top: 0; /* Adjust the value as needed */
       }

       .card {
           border: 1px solid black; /* Adjust the values as needed */
           border-radius: 5px;
           margin-bottom: 20px;
           height:217px;
           margin-top: 20px;
           
       }

       .col-md-4 img {
           width: 100%;
           height: 215px;
       }

   
   </style>
</head>
<body>
<?php include_once('includes/header.php');?>
    <div class="container">
  
    <marquee data-bs-toggle="modal" data-bs-target="#exampleModal" style="color: #000; font-size:20px; margin-top:50px;"><b>हरे कृष्ण हरे कृष्ण कृष्ण कृष्ण हरे हरे |
            हरे राम हरे राम राम राम हरे हरे </b></marquee>
    
            <!-- hello -->

    
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4 shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/shree hari.jpg" class="bd-placeholder-img" alt="">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <strong class="d-inline-block mb-2 text-primary-emphasis">For Peace</strong>
                                <h3 class="mb-0">Shree Hari Stotram</h3>
                                <div class="mb-1 text-body-secondary">Jun 3</div>
                                <p class="card-text mb-auto" style="font-size:15px">Shree Hari Stotram is a powerful mantra dedicated to Lord Vishnu
                                    ...........<br>जगज्जालपालं चलत्कण्ठमालं
                                    शरच्चन्द्रभालं महादैत्यकालं
                                </p>
                                <a href="shri hari stotram.php">Continue Reading..</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card mb-4 shadow-sm">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="images/srila prabhupada.jpg" class="bd-placeholder-img" alt="" style="height: 215px;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <strong class="d-inline-block mb-2 text-success-emphasis">Before reading Scriptures</strong>
                                <h3 class="mb-0">Pranaam Mantra</h3>
                                <div class="mb-1 text-body-secondary">Jun 3</div>
                                <p class="mb-auto" style="font-size:15px">Used by the monks in ISKCON before teaching the
                                    scripture...<br>नमः ॐ विष्णु पादय, कृष्ण पृष्ठाय भूतले,
                                    श्रीमते भक्ति वेदांत स्वामिन इति नामिने ।
                                    <br>
                                </p>
                                <a href="pranaam mantra.php">Continue Reading..</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-size:15px">
        Why should one chant Hare Krishna Maha Mantra?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong style="font-size:15px">Hare Krishna Hare Krishna Krishna Krishna Hare Hare Hare Ram Hare Ram Ram Ram Hare Hare.</strong><p style="font-size:15px;">Krishna's divine name is a transcendent source of spiritual bliss, endowed with the power to bestow all manner of blessings upon those who chant it. It is not a material entity and is as potent as Krishna Himself, possessing a complete and all-encompassing form that embodies all transcendental mellows. The name of Krishna and Krishna Himself are identical, transcending all material laws and qualities. Thus, His names are always spiritual, unbound and eternally liberated. The Holy Name of Krishna is a comprehensive path to salvation, serving as both the means and the end of the quest for divine love.</p><br><strong style="font-size:15px;">To know more watch the below video:</strong><br>
        <!-- <video controls style="width:200px; height:200px">
            <source src="videos/Why Maha Mantra.mp4" type="video/mp4">
                Your browser does not support the video tag.
        </video> -->
        <h5 style="margin-left:15px">Guidance by Amarendra Das</h5>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="font-size:15px;">
        What is Vaishnav Tilak?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <p style="font-size:15px;">Anyone who wishes to acknowledge the simple truth that “I am Lord Krishna’s servant” can wear tilaka, the clay mark devotees wear on the forehead and other places on their body. You may not feel you have much devotion to Krishna, but you’re not prohibited from wearing tilaka, because it’s a sign that you’re trying to be His devotee. What’s more, the qualifications for being Krishna’s devotee soon develop in a person who learns the art of wearing tilaka.</p><br>
      <!-- <video controls style="width:200px; height:200px">
            <source src="videos/Vaishnav Tilak.mp4" type="video/mp4">
                Your browser does not support the video tag.
        </video> -->

        
       

      <!-- end -->

    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="font-size:15px;">
        Who is the Supreme God?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong style="font-size:15px;">Bhagvad Gita Chapter 9, Verse 16-17</strong> <p style="font-size:15px;">It is I who am the Vedic ritual, I am the sacrifice, and I am the oblation offered to the ancestors. I am the medicinal herb, and I am the Vedic mantra. I am the clarified butter, I am the fire and the act of offering. Of this universe, I am the Father; I am also the Mother, the Sustainer, and the Grandsire. I am the purifier, the goal of knowledge, the sacred syllable Om. I am the Ṛig Veda, Sāma Veda, and the Yajur Veda.</p>
        <a style="font-size:15px;" href="https://www.amazon.in/Shrimad-Bhagwat-Geeta-Yatharoop-Hindi/dp/938598618X" target="_blank">Buy Bhagvad Gita as it is</a>
      </div>
    </div>
  </div>
</div>






    </div>


    


    

<?php include_once('includes/footer.php');?>


</body>



</html>
