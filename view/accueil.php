<!DOCTYPE html>
<html lang="en">

<?php
session_start();
require_once "../model/admin_db.php";
if(!($_SESSION['login'])){
    header("location: index");
}

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="btpgrid">
    <link rel="stylesheet" href="btp">
    <link rel="stylesheet" href="css">
    <title>Banque du peuple</title>
</head>

<body>


    <div class="container-fluid h-100">
        <div class="row h-100 ">
            <nav class="col-md-2 col-sm-2 col-lg-2 nav bg-light justify-content-center">

                <h3>Bienvenue <?=$_SESSION['login']?></h3>
                <br>
                    <p> <b><u> Nombre de clients:</u> <?=nbr_client()[0]?></b></p>
                <br>
                <br>
                    <p><b><u>Nombre de comptes:</u> <?=nbr_compte()[0]?></b></p>
                <br>
                 
                <ul class="navbar-nav nav-justified">
                    <!-- <li class="nav-item"><a href="#" class="btn btn-primary">LISTE ADMIN</a></li> -->
                    <li class="nav-item"><a href="connect" class="btn btn-primary">SE DECONNECTER</a></li>
                    <li class="nav-item"><a href="#" class="btn btn-primary">INFO</a></li>
                    
                </ul>
            </nav>

            <div class="container-fluid col-md-10 col-sm-10 col-lg-10 squall_main">
                <nav class="navbar navbar-expand-sm bg-light">

                    <h2>Banque du peuple</h2>

                </nav>
                <br>
                <div class="row main">
                    <div class="panel col-md-5 col-sm-5 col-lg-5 bg-info main">
                        <a href="client" class="btn btn-primary ">GESTION DES CLIENTS</a>
                    </div>
                    <div class="panel col-md-5 col-sm-5 col-lg-5 bg-info main">
                    <a href="comptes" class="btn btn-primary"> GESTION DES COMPTES</a>
                    </div>
                </div>

            </div>






        </div>


</body>

</html>