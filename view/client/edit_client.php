<?php
session_start();
if(!($_SESSION['login'])){
    header("location: index");
}

require_once "../../model/admin_db.php";
require_once "../../model/client_db.php";


if ($_GET['idEdit']){
    $old_client = getclientbyid($_GET['idEdit']);
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


            <h2 class="pageheader-title " align="center">Modifier un client</h2>




        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end pageheader  -->
<!-- ============================================================== -->




<!-- ############################################################################################## -->







<div class="splash-container">
        <div class="card ">
            <div class="card-body">
            <form action="ctrl_clt" method="post" class="needs-validation" >
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="nom">Nom</label>
                            <input type="text" class="form-control" name="nom" id="nom" placeholder="<?=$old_client[1]?>" required>
                            
                        </div>
                        <br>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="prenom">Prenom</label>
                            <input type="text" class="form-control" name="prenom" id="prenom" placeholder="<?=$old_client[2]?>" required>
                            
                        </div>
                        <br>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="adresse">Adresse</label>
                            <input type="text" class="form-control" name="adresse" id="adresse" placeholder="<?=$old_client[3]?>" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <br>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="numero">Numéro</label>
                            <input type="text" class="form-control" name="numero" id="numero" placeholder="<?=$old_client[4]?>" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        
                    </div>
                        <br>
                        <br>
                        
                        
                        
                            <button name="update" class="btn btn-primary" type="submit">Modifier</button>
                            <!-- pour envoyer l'id -->
                            <input type="hidden" name="id" value="<?=$old_client[0]?>" />
                </form>
            </div>
            
            
        </div>
    </div>


<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<?php include_once '../footer.php'?>
<!-- ============================================================== -->
<!-- end footer -->
<!-- ============================================================== -->