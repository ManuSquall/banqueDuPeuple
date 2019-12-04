<!DOCTYPE html>
<html lang="en">

<?php
session_start();

require_once "../model/client_db.php";
require_once "../model/admin_db.php";


$liste_client=getclients();



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
                <br>
                    <p> <b><u> Nombre de clients:</u> <?=nbr_client()[0]?></b></p>
                <br>
                <br>
                    <p><b><u>Nombre de comptes:</u> <?=nbr_compte()[0]?></b></p>
                <br>
                <ul class="navbar-nav nav-justified">
                   
                    <li class="nav-item"><a href="ad_client.php" class="btn btn-primary">AJOUTER CLIENT</a></li>
                    <li class="nav-item"><a href="accueil.php" class="btn btn-primary">RETOUR</a></li>
                    
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

                    <h3>Liste des clients </h3>
                    <hr>
                    <!-- ############################# -->


                    <table class="table table-borderless">
                        <thead class="thead-light">
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Adresse</th>
                            <th>Numero</th>
                            <th>Détails</th>
                        </thead>
                        <tbody>
                           <!-- A afficher si aucun client n'a été créé -->
                           <?php if(count($liste_client)==0) { ?>
                            <tr>
                                <td class="font-italic text-center" colspan="5">
                                    Aucun client n'a été ajouté!
                                </td>
                            </tr>
                            <?php } ?>

                            <?php foreach ($liste_client as $c) { ?>
                                <tr>
                                <td> <?=$c['nom_client']?> </td>
                                <td> <?=$c['prenom_client']?> </td>
                                <td> <?=$c['adresse_client']?> </td>
                                <td> <?=$c['numero_client']?> </td>
                                <td>
                                    <a href="#?idEdit=<?=$c['id']?>" class="btn btn-sm btn-success text-white squall"><i class="fa fa-edit"></i>Compte(s)</a>
                                    <a href="#?idSup=<?=$c['id']?>" class="btn btn-sm btn-warning text-white ml-2"><i class="fa fa-trash"></i>Modifier</a>
                                    <a href="#?idSup=<?=$c['id']?>" class="btn btn-sm btn-danger text-white ml-2"><i class="fa fa-trash"></i>Supprimer</a>
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