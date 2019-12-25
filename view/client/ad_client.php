<?php
session_start();
require_once "../../model/admin_db.php";
if(!($_SESSION['login'])){
    header("location: index");
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


            <h2 class="pageheader-title " align="center">Ajouter un client</h2>




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
                            <input type="text" class="form-control" name="nom" id="nom"  required>
                            
                        </div>
                        <br>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="prenom">Prenom</label>
                            <input type="text" class="form-control" name="prenom" id="prenom"  required>
                            
                        </div>
                        <br>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="adresse">Adresse</label>
                            <input type="text" class="form-control" name="adresse" id="adresse"  required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <br>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="numero">Numéro</label>
                            <input type="text" class="form-control" name="numero" id="numero"  required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        
                    </div>
                        <br>
                        <br>
                        
                        
                        
                            <button name="save" class="btn btn-primary" type="submit">Ajouter</button>
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