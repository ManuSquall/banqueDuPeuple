<!-- menu item -->
<li class="nav-item ">
    <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2"
        aria-controls="submenu-2"><i class="fa fa-fw fa-wpforms"></i>Compte <span
            class="badge badge-success">6</span></a>
    <div id="submenu-2" class="collapse submenu" style="">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="dashboard-finance.html">Ajouter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dashboard-finance.html">Modifier</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="dashboard-sales.html">Supprimer</a>
            </li>
        </ul>
    </div>
</li>




<!-- navbar profil -->



<div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto navbar-right-top">

        <li class="nav-item dropdown nav-user">
            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"><img src="../public/template/images/avatar-1.jpg" alt=""
                    class="user-avatar-md rounded-circle"></a>
            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                <div class="nav-user-info">
                    <h5 class="mb-0 text-white nav-user-name">John Abraham </h5>
                    <span class="status"></span><span class="ml-2">Available</span>
                </div>
                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
            </div>
        </li>
    </ul>
</div>

<!-- ################################################################################################### -->

<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
    <div class="card">
        <div class="card-body">
            <h5 class="text-muted">Total Revenue</h5>
            <div class="metric-value d-inline-block">
                <h1 class="mb-1">$12099</h1>
            </div>
            <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span>
            </div>
        </div>
        <div id="sparkline-revenue"></div>
    </div>
</div>





<!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">E-commerce Dashboard ../public/template </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus
                                    vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#"
                                                    class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard
                                                ../public/template</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->




<!-- ##################################################################################################################### -->







               <!-- recent orders  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Recent Orders</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Adresse</th>
                                    <th>Numero</th>
                                    <th>Détails</th>
                                                    </tr>
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
                                            <a href="details-<?=$c['id_client']?>"
                                                class="btn btn-sm btn-success text-white squall"><i
                                                    class="fa fa-edit"></i>Compte(s)</a>
                                            <a href="modif_clt-<?=$c['id_client']?>"
                                                class="btn btn-sm btn-warning text-white ml-2"><i
                                                    class="fa fa-trash"></i>Modifier</a>
                                            <a href="supp_clt-<?=$c['id_client']?>"
                                                class="btn btn-sm btn-danger text-white ml-2"><i
                                                    class="fa fa-trash"></i>Supprimer</a>
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



