<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triipic</title>
    <link rel="stylesheet" href="../../css/connexion.css">
    <script src="ProjectSi.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <video class="video-bg" autoplay muted loop id="myvideo">
        <source src="../../videos/bgblue.mp4" type="video/mp4">  
    </video>
    

    <section class="header">

   <a href="../../index.php" class="logo">Trippic.</a>

   <nav class="navbar">
      <a href="../../index.php">Accueil</a>
      <a href="../../about.php">à propos</a>
      <a href="../connexion/connexion.php">connexion</a>
      <a href="../inscription/inscription.php">s'inscrire</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<section class="connexion">

   <h1 class="heading-title">Connectez vous pour continuer !</h1>

   <form action="" method="post" class="connexion-form">

      <div class="flex">
        
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="entrez votre email" name="email" required autocomplete="off">
         </div>
         
         <div class="inputBox">
            <span>mot de passe :</span>
            <input type="text" placeholder="entrez votre mot de passe" name="password" required autocomplete="off">
         </div>
      
      </div>

      <input type="submit" value="soumettre" class="btn" name="send">
      <a href="../inscription/inscription.php"><input type="button" value="Inscription" class="btn" name="send"></a>
      
   </form>

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


<script src="../../js/script.js"></script>

</body>
</html>

<?php
      if(isset($_POST['send'])){
          require("../../db/connexion.php");
          $email = $_POST['email'];
          $password = $_POST['password'];

          $sql = "SELECT * FROM user WHERE user_email='{$email}' and user_pass='{$password}'";
          $result=$conex->query($sql);
          $data=$result->fetch_assoc();
          if($data == true){
               session_name("user");
               session_start();
               $_SESSION['email']=$data['user_email'];
               $_SESSION['user_id']=$data['user_id'];
               $_SESSION['role']=$data['user_role'];
               header('location:../../index.php');
          }
          else{
             header('location:../inscription/inscription.php');
          }
      }
?>
