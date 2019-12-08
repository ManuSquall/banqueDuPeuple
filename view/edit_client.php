<!DOCTYPE html>
<html lang="en">

<?php
session_start();
if(!($_SESSION['login'])){
    header("location: index");
}
require_once "../model/admin_db.php";
require_once "../model/client_db.php";


if ($_GET['idEdit']){
    $old_client = getclientbyid($_GET['idEdit']);
}

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css">
    <link rel="stylesheet" href="btpgrid">
    <link rel="stylesheet" href="btp">
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
                   
                    <li class="nav-item"><a href="client" class="btn btn-primary">RETOUR</a></li>
                    
                </ul>
            </nav>

            <div class="container-fluid col-md-10 col-sm-10 col-lg-10 squall_main">
                <nav class="navbar navbar-expand-sm bg-light">

                    <h2>Banque du peuple</h2>

                </nav>
                <br>
                <!-- ####################################################### -->

                <div class="container bg-info">
            <div class="row">
                <div class="col-md-10 offset-md-1">

                    <h3>Modifier un client </h3>
                    <hr>
                    <!-- ############################# -->


                    <form action="../controller/ctrl_client.php" method="post" class="form-signin col-md-6 offset-2">
            
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" class="form-control" placeholder="<?=$old_client[1]?>" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prenom</label>
                <input type="text" name="prenom" id="prenom" class="form-control" placeholder="<?=$old_client[2]?>" required>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse</label>
                <input type="adresse" name="adresse" id="adresse" class="form-control" placeholder="<?=$old_client[3]?>" required>
            </div>
            <div class="form-group">
                <label for="numero">Numero</label>
                <input type="text" name="numero" id="numero" class="form-control" placeholder="<?=$old_client[4]?>" required>
            </div>
            <hr>
            <div>
                <button name="update" type="submit" class="btn btn-secondary">Modifier</button>
                <!-- pour envoyer l'id -->
                <input type="hidden" name="id" value="<?=$old_client[0]?>"/>
                
            </div>
        </form>

                    <hr>



                   

                    <!-- ############################# -->

                </div>
            </div>
        </div>


                <!-- ####################################################### -->

            </div>






        </div>


</body>

</html>