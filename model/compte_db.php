<?php
require_once 'db.php';
require_once 'client_db.php';




function getcomptes(){

    global $db;

    $sql = "select * from compte";
    return $db->query($sql)->fetchAll();

}


function addcompte($numero, $solde, $id){

    global $db;

    $sql= "insert into compte values(NULL,'".$numero."','".$solde."','".$id."') ";
    return $db->prepare($sql)->execute();

}


function getcomptebyid($id){

    global $db;

    $sql= "select * from compte where id_compte = ".$id;
    return $db->query($sql)->fetch();

}


function updatecompte($id, $solde, $id_client){
    global $db;

    $sql= "update compte set solde_compte='".$solde."', id_client='".$id_client."' where id_compte=".$id.";";
    return $db->prepare($sql)->execute();

}

function del_compte($id){

    global $db;

    $sql= "delete from compte where id_compte=".$id.";";
    return $db->prepare($sql)->execute();
}
//*/
?>