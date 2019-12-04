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

function getclientbyid($id){

    global $db;

    $sql= "select * from client where id_client = ".$id;
    return $db->query($sql)->fetch();

}

function updateclient($id, $nom, $prenom, $adresse, $numero){
    global $db;

    $sql= "update client set nom_client='".$nom."', prenom_client='".$prenom."', adresse_client='".$adresse."', numero_client='".$numero."' where id_client=".$id.";";
    return $db->prepare($sql)->execute();

}

function del_client($id){

    global $db;

    $sql= "delete from client where id_client=".$id.";";
    return $db->prepare($sql)->execute();
}


?>