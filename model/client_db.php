<?php
require_once 'db.php';


function getclients(){

    global $db;

    $sql = "select * from client";
    return $db->query($sql)->fetchAll();

}


function addclient($nom, $prenom, $adresse, $numero){

    global $db;

    $sql= "insert into client values(NULL,'".$nom."','".$prenom."','".$adresse."','".$numero."') ";
    return $db->prepare($sql)->execute();

}



?>