<?php
session_start();

require_once  "../model/compte_db.php";

if (isset($_POST['save'])){


   $numero= $_POST['numero'];
   $id_client= $_POST['id_client'];
   $solde= $_POST['solde'];

   echo addcompte($numero, $solde, $id_client);


    header('location:../view/comptes.php');
}

if (isset($_POST['update']) && isset($_POST['id'])){

    $id=$_POST['id'];
    $solde= $_POST['solde'];
    $id_client= $_POST['id_client'];

    updatecompte($id, $solde, $id_client);

    header('location:../view/comptes.php');
}

if(isset($_GET['idSup'])){

    $id=$_GET['idSup'];
    del_compte($id);

    header('location:../view/comptes.php');

}

//*/

?>