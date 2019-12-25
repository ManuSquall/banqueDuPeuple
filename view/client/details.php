<?php
session_start();
if(!($_SESSION['login'])){
    header("location: index");
}
require_once "../../model/compte_db.php";
require_once "../../model/admin_db.php";
require_once "../../model/client_db.php";

if(isset($_GET['idDet'])){
    $liste_compte_client=getcomptebyid_client($_GET['idDet']);
    $client = getclientbyid($_GET['idDet']);


}else{
    header('location:client');
}





?>








<!-- ============================================================== -->
<!-- header -->
<!-- ============================================================== -->

<?php include_once '../header.php'?>
<!-- ============================================================== -->
<!-- end header -->
<!-- ============================================================== -->


 <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <a href="client" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> </a>

                            <div class="page-header">
                               
                                   
                                <h2 class="pageheader-title " align="center">Liste des comptes de <?=$client['nom_client']?></h2>
                                

                            
                                
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->




<!-- ################################################################################"" -->



<!-- recent orders  -->
<!-- ============================================================== -->
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
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
                        <!-- A afficher si aucun client n'a été créé -->
                         <!-- A afficher si aucun compte n'a été créé -->
                         <?php if(count($liste_compte_client)==0) { ?>
                            <tr>
                                <td class="font-italic text-center" colspan="5">
                                    Aucun compte n'a été créé pour <?=$client['nom_client']?> <?=$client['prenom_client']?> !
                                </td>
                            </tr>
                            <?php } ?>
                          

                            <?php foreach ($liste_compte_client as $c) { ?>
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