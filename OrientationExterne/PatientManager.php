<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../head.php") ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php include("../menu.php") ?>
        <?php include("../navbar.php") ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            <?php include("../content-header.php") ?>

            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"> Patient</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <!-- <h3 class="card-title">
                            Pa
                            tients
                            </h3> -->

                            <div class="col-sm-12 d-flex justify-content-between p-3">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex justify-content-between">
                                        <a href="../OrientationExterne/Patient.php" class="btn btn-primary"> <i class="fa fa-plus"></i> </a>
                                    </div>
                                    <!-- <select class="btn btn-secondary dropdown-toggle ml-2" name="filter" id="filter">
                                        <option value="">Nom</option>
                                        <option value="">Hamza</option>
                                        <option value="">Kamal</option>
                                    </select> -->
                                </div>
                                <!-- SEARCH FORM -->
                                <form class="form-inline ml-3">
                                    <div class="input-group input-group-sm">
                                        <input type="search" class="form-control form-control-lg" placeholder="Tapez vos mots-clés ici">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-lg btn-default">
                                                <i class="fa fa-search"></i>
                                            </button>

                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-striped projects">
                                <thead>
                                    <tr>
                                        <th style="width: 10%"> Image </th>
                                        <th style="width: 10%"> Nom </th>
                                        <th style="width: 10%"> Prenom </th>
                                        <th style="width: 10%"> Telephon </th>
                                        <th style="width: 20%" class="">  </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td> <img class="rounded-circle"  width="50" height="50" src="../assets/dist/img/User-avatar.svg.png" alt="image" srcset=""> </td>
                                        <td> AHOUZI </td>
                                        <td> Hanan </td>
                                        <td> 0645729821 </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="./EmployeManager.php"> <i class="fas fa-check"> </i> Suivre </a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td> <img class="rounded-circle"  width="50" height="50" src="../assets/dist/img/User-avatar.svg.png" alt="image" srcset=""> </td>
                                        <td> Mnari </td>
                                        <td> Karim </td>
                                        <td> 0645729821 </td>
                                        <td class="project-actions text-right">
                                            <a class="btn btn-primary btn-sm" href="./EmployeManager.php"> <i class="fas fa-check"> </i> Suivre </a>
                                        </td>
                                    </tr>

                                   
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="card-header row">
                        <div class="float-right col-md-6">
                            <ul class="pagination pagination my-0">
                                <li class="page-item"><a class="page-link" href="#">«</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">»</a></li>
                            </ul>
                        </div>
                        <div class="float-left col-md-6 d-flex justify-content-end" style="align-items: center; ">
                            <!-- <button type="button" class="btn btn-default swalDefaultQuestion">
                                <i class="fas fa-download"></i> export_pdf
                            </button> -->
                            <button type="button" class="btn btn-default mr-2 swalDefaultQuestion">
                                <i class="fas fa-download"></i> export
                            </button>
                            <button type="button" class="btn btn-default swalDefaultQuestion">
                                <i class="fas fa-file-import"></i> import
                            </button>
                        </div><!-- /.container-fluid -->
                        <div class="d-flex justify-content-between mt-3">
                  <!-- <a href="PatientManager.php" class="btn btn-primary">Suivre</a> -->
                  <a href="ReclamationManager.php" class="btn btn-outline-secondary">Annuler</a>
                </div>
            </section>
            
            <!-- /.content -->
        </div>

        <?php include("../footer.php") ?>
    </div>
    <?php include("../scripts.php") ?>
</body>

</html>