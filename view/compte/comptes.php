<!DOCTYPE html>
<html lang="en">

<?php
session_start();
if(!($_SESSION['login'])){
    header("location: index");
}

require_once "../../model/compte_db.php";
require_once "../../model/admin_db.php";
require_once "../../model/client_db.php";


$liste_compte=getcomptes();



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
                   
                    <li class="nav-item"><a href="ad_compte" class="btn btn-primary">AJOUTER COMPTE</a></li>
                    <li class="nav-item"><a href="accueil" class="btn btn-primary">RETOUR</a></li>
                    
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

                    <h3>Liste des comptes </h3>
                    <hr>
                    <!-- ############################# -->


                    <table class="table table-borderless">
                        <thead class="thead-light">
                            <th>Numero</th>
                            <th>Solde</th>
                            <th>Nom Client</th>
                            <th>Prenom Client</th>
                            <th>Détails</th>
                        </thead>
                        <tbody>

                        <!-- A afficher si aucun compte n'a été créé -->
                        <?php if(count($liste_compte)==0) { ?>
                            <tr>
                                <td class="font-italic text-center" colspan="5">
                                    Aucun compte n'a été créé!
                                </td>
                            </tr>
                            <?php } ?>
                          

                            <?php foreach ($liste_compte as $c) { ?>
                                <tr>
                                <td> <?=$c['num_compte']?> </td>
                                <td> <?=$c['solde_compte']?> </td>
                                <td> <?=(getclientbyid($c['id_client']))[1]?> </td>
                                <td> <?=(getclientbyid($c['id_client']))[2]?> </td>
                                <td>
                                    <a href="modif_cpt-<?=$c['id_compte']?>" class="btn btn-sm btn-warning text-white ml-2"><i class="fa fa-trash"></i>Modifier</a>
                                    <a href="ctrl_cpt-<?=$c['id_compte']?>" class="btn btn-sm btn-danger text-white ml-2"><i class="fa fa-trash"></i>Supprimer</a>
                                </td>
                            </tr>
                            <?php } ?>

                        </tbody>
                    </table>

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