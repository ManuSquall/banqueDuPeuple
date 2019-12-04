<?php
session_start();

require_once  "../model/client_db.php";

if (isset($_POST['save'])){


   $nom= $_POST['nom'];
   $prenom= $_POST['prenom'];
   $adresse= $_POST['adresse'];
   $numero= $_POST['numero'];

   addclient($nom, $prenom, $adresse, $numero);


    header('location:../view/ad_client.php');
}
?>