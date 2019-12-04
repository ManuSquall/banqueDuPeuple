<?php
session_start();

require_once  "../model/client_db.php";

if (isset($_POST['save'])){


   $nom= $_POST['nom'];
   $prenom= $_POST['prenom'];
   $adresse= $_POST['adresse'];
   $numero= $_POST['numero'];

   addclient($nom, $prenom, $adresse, $numero);


    header('location:../view/client.php');
}

if (isset($_POST['update']) && isset($_POST['id'])){

    $id=$_POST['id'];
    $nom= $_POST['nom'];
    $prenom= $_POST['prenom'];
    $adresse= $_POST['adresse'];
    $numero= $_POST['numero'];

    updateclient($id, $nom, $prenom, $adresse, $numero);

    header('location:../view/client.php');
}

if(isset($_GET['idSup'])){

    $id=$_GET['idSup'];
    del_client($id);

    header('location:../view/client.php');

}



?>