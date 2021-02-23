<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>S'inscrire-Regisseurs</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('assets/insertion/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/insertion/css/sb-admin-2.min.css') ?>" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" action="<?php echo site_url('regisseurControlleur/save')?>" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                  <input type="hidden" class="form-control" name="ID_REGISSEUR" id="ID_REGISSEUR" placeholder="">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="ENTREPRISE" id="ENTREPRISE" placeholder="Nom ..." required>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="ADRESSE" id="ADRESSE" placeholder="Adresse ..." required>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="CONTACT_REGISSEUR" id="CONTACT_REGISSEUR" placeholder="Contact ..." required>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" name="EMAIL_REGISSEUR" id="exampleInputEmail" placeholder="Addresse Email" required>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" name="MOT_DE_PASS" id="MOT_DE_PASS" placeholder="Mot de Passe ..." required>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" name="CONFIRM_MOT_DE_PASS" id="CONFIRM_MOT_DE_PASS" placeholder="Confirmer Mot de passe ..." required>
                    <span id='message' class="badge badge-success"></span>
                  </div>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">Logo</label>
                    <input type="file" id="LOGO" name="LOGO" class="form-control-file" required>
                </div>

                  <input type="submit" name="btn_save" value="Enregistrer" class="btn btn-primary btn-user btn-block">
                <hr>
                <a href="<?php echo base_url() ?>index.php/Welcome" class="btn btn-google btn-user btn-block">
                  Home
                </a>
                <a href="<?php echo base_url() ?>index.php/loginRegisseur" class="btn btn-facebook btn-user btn-block">
                   Login
                </a>
              </form>
              <hr>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <script src="<?php echo base_url('assets/insertion/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/insertion/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/insertion/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets/insertion/js/sb-admin-2.min.js') ?>"></script>
  <script type="text/javascript">
      $('#MOT_DE_PASS, #CONFIRM_MOT_DE_PASS').on('keyup', function () {
      if ($('#MOT_DE_PASS').val() == $('#CONFIRM_MOT_DE_PASS').val()) {
        $('#message').html('Matching').css('color', 'green');
      } else
        $('#message').html('Not Matching').css('color', 'red');
      });
  </script>
</body>

</html>
