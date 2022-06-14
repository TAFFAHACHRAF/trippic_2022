<?php

   $connection = mysqli_connect('localhost:3307','root','','travel_db');

   if(isset($_POST['send'])){
      $location = $_POST['destination'];
      $voyageurs = $_POST['voyageurs'];
      $arrivée = $_POST['arrivée'];
      $départ = $_POST['départ'];

      $request = " insert into book_form(destination ,voyageurs, arrivée, départ) values('$destination';'$voyageurs','$arrivée','$départ') ";
      mysqli_query($connection, $request);

      header('location:travel.php'); 

   }else{
      echo 'quelque chose s\'est mal passé, veuillez réessayer !';
   }

?>