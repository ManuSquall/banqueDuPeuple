<?php

session_start();

include_once '../model/admin_db.php';

if(admin_connect($_POST['login'], $_POST['mdp'])){

    $_SESSION['login']=$_POST['login'];
    $_SESSION['mdp']=$_POST['mdp'];
    header("location: accueil");

}else{
    session_unset();
    session_destroy();
    header("location:index");
}

?>