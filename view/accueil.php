<?php
session_start();
require_once "../model/admin_db.php";
if(!($_SESSION['login'])){
    header("location: index");
}

?>

<!-- ============================================================== -->
<!-- header -->
<!-- ============================================================== -->

<?php include_once 'header.php'?>
<!-- ============================================================== -->
<!-- end header -->
<!-- ============================================================== -->



 <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            
                            <div class="page-header">
                               
                                   
                                <h2 class="pageheader-title " align="center">Accueil </h2>
                                

                            
                                
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->



    
            <!-- ########################################################### -->
            <div class="row main">

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card bg-dark text-white">
                        <img class="card-img" src="./public/img/client.png" alt="Card image">
                        <div class="card-img-overlay">

                            <a href="client" class="btn btn-primary ">GESTION DES CLIENTS</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card bg-dark text-white">
                        <img class="card-img" src="public/img/compte.jpg" alt="Card image">
                        <div class="card-img-overlay">

                            <a href="comptes" class="btn btn-primary ">GESTION DES COMPTES</a>
                        </div>
                    </div>
                </div>


            </div>





    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <?php include_once 'footer.php'?>
    <!-- ============================================================== -->
    <!-- end footer -->
    <!-- ============================================================== -->

    