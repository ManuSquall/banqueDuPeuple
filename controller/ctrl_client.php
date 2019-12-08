<?php
session_start();

require_once  "../model/client_db.php";

if (isset($_POST['save'])){


   $nom= $_POST['nom'];
   $prenom= $_POST['prenom'];
   $adresse= $_POST['adresse'];
   $numero= $_POST['numero'];

   addclient($nom, $prenom, $adresse, $numero);


    header('location:client');
}

if (isset($_POST['update']) && isset($_POST['id'])){

    $id=$_POST['id'];
    $nom= $_POST['nom'];
    $prenom= $_POST['prenom'];
    $adresse= $_POST['adresse'];
    $numero= $_POST['numero'];

    updateclient($id, $nom, $prenom, $adresse, $numero);

    header('location:client');
}

if(isset($_GET['idSup'])){

    $id=$_GET['idSup'];
    // on supprime tous les comptes du client
    del_all_compte_by_id_client($id);
    // puis on supprime le client
    del_client($id);

    header('location:client');

}



?>