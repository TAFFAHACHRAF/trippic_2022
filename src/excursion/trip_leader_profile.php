<?php
    session_name("user");
    session_start();

        if(isset($_SESSION['email']) and isset($_SESSION['user_id']) and isset($_SESSION['role'])){
            if($_SESSION['role']!='leader'){
                       header("location:choix.php");
            }
?> 

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

   <h1 class="heading-title" id="creer">créez votre compte !</h1>

   <form action="" method="POST" class="inscription-form">
            <div class="flex">    
                
                <div class="inputBox">
                    <span>Date début :</span>
                    <input type="date" name="date_debut" class="form-control" placeholder="date_debut" required="required" autocomplete="off">
                </div>
                <div class="inputBox">
                    <span>Date fin :</span>
                    <input type="date" name="date_fin" class="form-control" placeholder="date_fin" required="required" autocomplete="off">
                </div>
                <div class="inputBox">
                    <span>Description :</span>
                    <input type="text" name="description" class="form-control" placeholder="description..." required="required" autocomplete="off">
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
        function selectTript(){
            require("../../db/connexion.php");
            $user_id=$_SESSION['user_id'];
            $sql="SELECT * FROM trip 
                    WHERE user_id='".$user_id."';";
            $result=$conex->query($sql);
            $data=$result->fetch_assoc();
            if($data['user_id']){
                return true;
            }
            else{
                return false;
            }
        }

        function addTrip(){
                require("../../db/connexion.php");
                $date_debut = $_POST['date_debut'];
                $date_fin = $_POST['date_fin'];
                $description = $_POST['description'];
                $user_id=$_SESSION['user_id'];


                $sql = "INSERT INTO trip VALUES('0','$user_id','$date_debut' ,'$date_fin', '$description');";
                $result=$conex->query($sql);
                if($result){
                    echo " <script> window.location.href='choix.php'; </script> ";
                }
                else{
                    echo "
                        <script>
                            alert('Error');
                        </script>
                    ";               
                }
            }

        function updateTrip(){
                require("../../db/connexion.php");
                $date_debut = $_POST['date_debut'];
                $date_fin = $_POST['date_fin'];
                $description = $_POST['description'];
                $user_id=$_SESSION['user_id'];


                $sql = "UPDATE trip 
                        SET date_debut='$date_debut',
                        date_fin='$date_fin',
                        description='$description'
                        WHERE user_id='".$user_id."';";

                $result=$conex->query($sql);
                echo $sql;
                 if($result){
                    echo " <script> window.location.href='choix.php'; </script> ";
                }
                else{
                    echo "
                        <script>
                            alert('Error');
                        </script>
                    ";               
                }
            }

        if(isset($_POST['send'])){
            if(selectTript()==true){
                updateTrip();
            }
            else{
                addTrip();
            }
        }
    }
    else{
        header("location:choix.php?you_are_not_leader");
    }
?>