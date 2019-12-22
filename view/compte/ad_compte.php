<!DOCTYPE html>
<html lang="en">

<?php
session_start();
if(!($_SESSION['login'])){
    header("location: index");
}
require_once "../../model/admin_db.php";
require_once "../../model/client_db.php";

$liste_client=getclients();
$num_compte = generer_num_cpt();
echo $num_compte;



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

                    <li class="nav-item"><a href="comptes" class="btn btn-primary">RETOUR</a></li>

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

                            <h3>Création d'un compte </h3>
                            <hr>
                            <!-- ############################# -->


                            <form action="ctrl_cpt" method="post"
                                class="form-signin col-md-6 offset-2">
                                <!-- ############################ -->
                                <div class="form-group">
                                    <label>Numero de compte</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">#</div>
                                        </div>
                                        <input value="<?=$num_compte?>" name="numero" class="form-control" readonly>
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
                            <button name="save" type="submit" class="btn btn-warning">
                                
                                Créer
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