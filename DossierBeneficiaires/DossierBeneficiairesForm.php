<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../head.php") ?>
    <link rel="stylesheet" href="https://unpkg.com/bs-stepper/dist/css/bs-stepper.min.css">
<script src="https://unpkg.com/bs-stepper/dist/js/bs-stepper.min.js"></script>

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
            <h1 class="m-0">Création dossier bénéficiaire</h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Default box -->
                
                    <div class="row">
          <div class="col-md-12">
            <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title"></h3>
              </div>
              <div class="card-body p-0">
                <div class="bs-stepper" id="stepper1">
                  <div class="bs-stepper-header" role="tablist">
                    <!-- your steps here -->
                    <div class="step" data-target="#logins-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="logins-part" id="logins-part-trigger">
                        <span class="bs-stepper-circle">1</span>
                        <span class="bs-stepper-label">Parents</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step" data-target="#information-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                        <span class="bs-stepper-circle">2</span>
                        <span class="bs-stepper-label">Patient</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step"  id="step3" data-target="#orientation-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="orientation-part" id="orientation-part-trigger">
                        <span class="bs-stepper-circle">3</span>
                        <span class="bs-stepper-label">Orientation externe</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step"  id="step3" data-target="#Entretien-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="Entretien-part" id="Entretien-part-trigger">
                        <span class="bs-stepper-circle">4</span>
                        <span class="bs-stepper-label">Entretien social</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step"  id="step3" data-target="#RendezVous-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="RendezVous-part" id="RendezVous-part-trigger">
                        <span class="bs-stepper-circle">5</span>
                        <span class="bs-stepper-label">Render-Vous</span>
                      </button>
                    </div>
                    <div class="line"></div>
                    <div class="step"  id="step3" data-target="#ListAttente-part">
                      <button type="button" class="step-trigger" role="tab" aria-controls="ListAttente-part" id="ListAttente-part-trigger">
                        <span class="bs-stepper-circle">6</span>
                        <span class="bs-stepper-label">List d'attente</span>
                      </button>
                    </div>
                    
                  </div>
                  <div class="bs-stepper-content">
                    <!-- your steps content here -->
                    <?php include("./ParentForm.php") ?>
                    <?php include("./PatientForm.php") ?>
                    <?php include("./OrientationForm.php") ?>
                    <?php include("./EntretienSocialForm.php") ?>
                    <?php include("./RendezVousForm.php") ?>
                    <?php include("./ListAttenteForm.php") ?>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
             
            </div>
            <!-- /.card -->
          </div>
        </div>

                    <!-- /.card -->
                    <div class="card-header row" style="display: flow-root;">
                        <div style="display: flex;  justify-content: space-between;">

                            <ul class="pagination pagination my-0">
                                <li class="page-item"><a class="page-link" href="#">«</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">»</a></li>
                            </ul>
                            <div class="">
                                
                                <button type="button" class="btn btn-default swalDefaultQuestion">
                                    <i class="fas fa-download"></i> Export
                                </button>
                                <button type="button" class="btn btn-default swalDefaultQuestion">
                                    <i class="fas fa-file-import"></i> Import
                                </button>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>

        <?php include("../footer.php") ?>
    </div>
    <?php include("../scripts.php") ?>
    <script src="../assets/plugins/bs-stepper/js/bs-stepper.js"></script>
    <script>
      var stepper1Node = document.querySelector('#stepper1')
      var stepper1 = new Stepper(document.querySelector('#stepper1'))
      stepper1Node.addEventListener('show.bs-stepper', function (event) {
  // You can call prevent to stop the rendering of your step
  // event.preventDefault()

  console.warn(event.detail.indexStep)
})

stepper1Node.addEventListener('shown.bs-stepper', function (event) {
  console.warn('step shown')
})
      
    </script>
</body>

</html>