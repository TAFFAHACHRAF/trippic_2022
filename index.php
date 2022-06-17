<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link  href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,600;0,700;1,100;1,200;1,300&family=Space+Mono&display=swap"  rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<section class="header">

   <a href="index.php" class="logo">Trippic.</a>

   <nav class="navbar">
      <a href="index.php">Accueil</a>
      <a href="about.php">à propos</a>
      <a href="src/connexion/connexion.php">connexion</a>
      <a href="src/inscription/inscription.php">s'inscrire</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>




<video class='video-bg' autoplay muted loop id="myvideo">
    <source src="videos/chaouen.mp4" type="video/mp4">
</video>






<section class="services">

   <h1 class="heading-title"> nos services </h1>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-7.png" alt="">
         <h3><a style="color:white" href="src/travel/travel.php"> Agence de voyage </a> </h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3><a style="color:white" href="src/travelguide/travelguide.php">guide touristique</a></h3>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3><a style="color:white" href="src/excursion/choix.php">excursion</a></h3>
      </div>



   </div>


</section>



<section class="home-about">

   <div class="image">
      <img src="images/startup.jpg" alt="">
   </div>

   <div class="content">
      <h3>à propos de nous</h3>
      <p>Trippic est une application de gestion de voyage qui consiste à centraliser et à regrouper un réseau d’amateurs d'excursions qui souhaitent optimiser leurs expériences</p>
      <a href="about.php" class="btn">Lire la suite</a>
   </div>

</section>


<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>liens rapides</h3>
         <a href="index.php"> <i class="fas fa-angle-right"></i> Accueil</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> à propos de nous</a>
         <a href="inscription/inscription.php"> <i class="fas fa-angle-right"></i> s'inscrire</a>
      </div>

      <div class="box">
         <h3>liens supplémentaires</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> pose une question</a>
         <a href="#"> <i class="fas fa-angle-right"></i> à propos de nous</a>
         <a href="#"> <i class="fas fa-angle-right"></i> politique de confidentialité</a>
         <a href="#"> <i class="fas fa-angle-right"></i> termes d'utilisation</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> Trippic@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> rabat, maroc - 400104 </a>
      </div>

      <div class="box">
         <h3>suivez nous</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>Trippic team</span> | all rights reserved! </div>

</section>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="script.js"></script>

</body>
</html>
