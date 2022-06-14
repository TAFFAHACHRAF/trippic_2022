<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>connexion</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="../../css/inscription.css">

</head>
<body>


<section class="header">

   <a href="../../index.php" class="logo">Trippic.</a>

   <nav class="navbar">
      <a href="../../index.php">Accueil</a>
      <a href="../../about.php">à propos</a>
      <a href="../connexion/connexion.php">connexion</a>
      <a href="inscription.php">s'inscrire</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>


<video class='video-bg' autoplay muted loop id="myvideo">
    <source src="../../videos/trip.mp4" type="video/mp4">
</video>




<section class="inscription">

   <h1 class="heading-title">créez votre compte !</h1>

   <form action="" method="POST" class="inscription-form">
            <div class="flex">    
                <div class="inputBox">
                    <span>nom :</span>
                    <input type="text" name="nom" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
                </div>
                <div class="inputBox">
                    <span>Birth day :</span>
                    <input type="date" name="birth_date" class="form-control" placeholder="birth_date" required="required" autocomplete="off">
                </div>
                <div class="inputBox">
                    <span>Mobile :</span>
                    <input type="numerique" name="mobile" class="form-control" placeholder="mobile" required="required" autocomplete="off">
                </div>
                <div class="inputBox">
                    <span>Adress :</span>
                    <input type="text" name="adress" class="form-control" placeholder="adress" required="required" autocomplete="off">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="inputBox">
                    <span>mot de passe :</span>
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="inputBox">
                    <span>confirmation du mot de passe :</span>
                    <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
                </div>
                
                <input type="submit" value="soumettre" class="btn" name="send">
            </div>
    </form>
</section>

<!-- footer section starts  -->

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

<!-- footer section ends -->

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="../../js/script.js"></script>

</body>
</html>

<?php
        function verifyPassword($firstPassword,$secondPassword){
             if($firstPassword === $secondPassword){
                 return true;
             }
             return false;
        }

        function addUser(){
            $conex=new mysqli("localhost","root","","trippic");
            if ($conex->connect_error) {
                    die("Connection failed: " . $conex->connect_error);
            } 

            if(verifyPassword($_POST['password'],$_POST['password_retype'])){
                $user_name = $_POST['nom'];
                $birth_date = $_POST['birth_date'];
                $mobile = $_POST['mobile'];
                $adress = $_POST['adress'];
                $email = $_POST['email'];
                $password = $_POST['password_retype'];

                $sql = "INSERT INTO user VALUES('', '$user_name' ,'$birth_date', '$mobile', '$adress','$email','$password','user')";
                $conex->query($sql);
                echo " <script> window.location.href='../'; </script> ";
            }
        }

        if(isset($_POST['send'])){
            addUser();
        }
?>