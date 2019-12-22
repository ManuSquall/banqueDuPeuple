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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<img src="template/images/avatar-1.jpg" alt="">
<img src="public/template/images/avatar-1.jpg" alt="">
    
</body>
</html>