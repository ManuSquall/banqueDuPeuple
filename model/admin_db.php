<?php
require_once 'db.php';
require_once 'compte_db.php';

function admin_connect($login, $mdp){

    global $db;

    $sql="select id_admin from admin where login_admin='$login' and mdp_admin='$mdp';";
    return $db->query($sql)->fetch();
}

function nbr_client(){
    global $db;

    $sql = "select count(*) from client;";
    return $db->query($sql)->fetch();
}


function nbr_compte(){
    global $db;

    $sql = "select count(*) from compte;";
    return $db->query($sql)->fetch();
}

function generer_num_cpt(){

    $i=intval(nbr_compte()[0]);
    $table= getcomptes();
    //on le concatène au dernier id
   return $numero = 'CT-'.date("dmY-his",time()).'-'.($table[$i-1])[0];
}

?>