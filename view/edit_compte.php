<!DOCTYPE html>
<html lang="en">

<?php
session_start();
if(!($_SESSION['login'])){
    header("location: index");
}

require_once "../model/compte_db.php";
require_once "../model/admin_db.php";
require_once "../model/client_db.php";


$liste_compte=getcomptes();
$liste_client=getclients();




if ($_GET['idEdit']){
    $old_compte = getcomptebyid($_GET['idEdit']);
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
                   
                    <li class="nav-item"><a href="ad_compte.php" class="btn btn-primary">AJOUTER COMPTE</a></li>
                    <li class="nav-item"><a href="comptes.php" class="btn btn-primary">RETOUR</a></li>
                    
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

                    <h3>Modifier le compte </h3>
                    <hr>
                    <!-- ############################# -->

                    <form action="../controller/ctrl_compte.php" method="post"
                                class="form-signin col-md-6 offset-2">
                                <!-- ############################ -->
                                <div class="form-group">
                                    <label>Numero de compte</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">#</div>
                                        </div>
                                        <input value="<?=$old_compte['num_compte']?>" name="numero" class="form-control" readonly>
                                    </div>
                                </div>
                                <!-- ############################ -->

                                <div class="form-group">
                                    <label>Client propriétaire</label>
                                    <select name="id_client" class="form-control" required>
                                        <option value="">-Selectionner un client-</option>
                                        <?php foreach($liste_client as $c){?>
                                            <option value="<?=$c['id_client']?>"><?=$c['nom_client']?> <?=$c['prenom_client']?></option>
                                        <?php }?>
                                    </select>
                                </div>
                                <!-- ############################ -->
                                <div class="form-group">
                                    <label>Solde</label>
                                    <input type="text" name="solde" class="form-control" required>
                                </div>
                                <!-- ############################ -->
                                          <hr>
                                          <br>
                                <div class="form-group">
                            <button name="update" type="submit" class="btn btn-warning">
                            <!-- pour envoyer l'id du compte  -->
                            <input type="hidden" name="id" value="<?=$old_compte[0]?>"/>
                                
                                Modifier
                            </button>
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