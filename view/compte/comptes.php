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





<!-- ============================================================== -->
<!-- header -->
<!-- ============================================================== -->

<?php include_once '../header.php'?>
<!-- ============================================================== -->
<!-- end header -->
<!-- ============================================================== -->


<!-- recent orders  -->
<!-- ============================================================== -->
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<a href="accueil" class="btn btn-primary"><i class="fas fa-user-plus"></i> Ajouter un client</a>
    <div class="card">
       
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table">
                    <thead class="bg-light">
                        <tr class="border-0">
                        <th>Numero</th>
                            <th>Solde</th>
                            <th>Nom Client</th>
                            <th>Prenom Client</th>
                            <th>Détails</th>
                        </tr>
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
                                    <a href="modif_cpt-<?=$c['id_compte']?>" class="btn btn-sm btn-warning text-white ml-2"><i class="fa fa-edit"></i>Modifier</a>
                                    <a href="ctrl_cpt-<?=$c['id_compte']?>" class="btn btn-sm btn-danger text-white ml-2"><i class="fa fa-trash"></i>Supprimer</a>
                                </td>
                            </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end recent orders  -->



<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<?php include_once '../footer.php'?>
<!-- ============================================================== -->
<!-- end footer -->
<!-- ============================================================== -->