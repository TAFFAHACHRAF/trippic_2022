<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>recherche</title>

 
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />


   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


   <link rel="stylesheet" href="../../css/travel.css">

</head>
<body>
   

<section class="header">

   <a href="home.php" class="logo">Trippic.</a>

   <nav class="navbar">
      <a href="../../index.php">Accueil</a>
      <a href="../../about.php">à propos</a>
      <a href="../connexion/connexion.php">connexion</a>
      <a href="../inscription/inscription.php">s'inscrire</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<video class='video-bg' autoplay muted loop id="myvideo">
    <source src="../../videos/travelag.mp4" type="video/mp4">
</video>


<section class="travel">

   <h1 class="heading-title">veuillez remplir ce formulaire</h1>

   <form action="travel_form.php" method="post" class="travel-form">

      <div class="flex">
         <div class="inputBox">
            <span>où :</span>
            <input type="text" placeholder="endroit que vous voulez visiter" name="destination" required>
         </div>
         <div class="inputBox">
            <span>voyageurs :</span>
            <input type="number" placeholder="nombre d'invités" name="voyageurs" required>
         </div>
         <div class="inputBox">
            <span>arrivée :</span>
            <input type="date" name="arrivée" required>
         </div>
         <div class="inputBox">
            <span>départ :</span>
            <input type="date" name="départ" required>
         </div>
      </div>

      <a href="agences.php">
         <input type="submit" value="cherche" class="btn" name="send">
      </a>

   </form>

</section>


<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>liens rapides</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> Accueil</a>
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

<script src="../../js/script.js"></script>

</body>
</html>