<!DOCTYPE html>
<html lang="en">

<?php
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/squall.css">
    <link rel="stylesheet" href="../public/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <title>Banque du peuple</title>
</head>

<body>


    <div class="container-fluid h-100">
        <div class="row h-100 ">
            <nav class="col-md-2 col-sm-2 col-lg-2 nav bg-light justify-content-center">

                <h3>Bienvenue <?=$_SESSION['login']?></h3>
                <ul class="navbar-nav nav-justified">
                    <li class="nav-item"><a href="#" class="btn btn-primary">ACCUEIL</a></li>
                    <li class="nav-item"><a href="#" class="btn btn-primary">INSCRIPTION</a></li>
                    <li class="nav-item"><a href="#" class="btn btn-primary">SE CONNECTER</a></li>
                    <li class="nav-item"><a href="#" class="btn btn-primary">INFO</a></li>
                    <li class="nav-item"><a href="#" class="btn btn-primary">INFO</a></li>
                    <li class="nav-item"><a href="#" class="btn btn-primary">INFO</a></li>
                    <li class="nav-item"><a href="#" class="btn btn-primary">INFO</a></li>
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
                        <a href="#" class="btn btn-primary ">GESTION DES CLIENTS</a>
                    </div>
                    <div class="panel col-md-5 col-sm-5 col-lg-5 bg-info main">
                    <a href="#" class="btn btn-primary"> GESTION DES COMPTES</a>
                    </div>
                </div>

            </div>






        </div>


</body>

</html>