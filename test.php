<?php

require_once "model/admin_db.php";
require_once "model/compte_db.php";

$i=intval(nbr_compte()[0]);
$table= getcomptes();
// echo $i;
// echo gettype($i);
// var_dump($table[$i-1]);

echo ($table[$i-1])[0];


?>