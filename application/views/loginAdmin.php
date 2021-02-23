<html>
<head>
	<title>Login - Admin</title>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/images/icons/favicon.ico') ?> "/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animate/animate.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/css-hamburgers/hamburgers.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animsition/css/animsition.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/select2/select2.min.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/daterangepicker/daterangepicker.css') ?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/util.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css') ?>">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-b-160 p-t-50">
				<form class="login100-form validate-form" method="POST" action="<?php echo base_url() ?>index.php/loginAdmin">
					<span class="login100-form-title p-b-43">
						Authentification
					</span>
            <?php if(isset($error)) { echo $error; }; ?>
					         <div class="wrap-input100 rs1 validate-input" data-validate = "Username is required">
                    <input type="text" class="input100" name="username" autofocus>
                    <span class="label-input100">Nom d'utilisateur</span>
                    <?php echo form_error('username'); ?>
                  </div>
                  <div class="wrap-input100 rs2 validate-input" data-validate="Password is required">
                    <input type="password" name="password" class="input100" >
                    <span class="label-input100">Mot de passe</span>
                    <?php echo form_error('password'); ?>
                </div>
								<div class="container-login100-form-btn">
		                <button class="login100-form-btn" name="btn-login" id="btn-login" type="submit" style="font-family:verdana;">
		                    Se connecter
											</button>
								</div>
            </div>

            <div id="error" style="margin-top: 10px"></div>
        </div>
    </div>
</div>
		<!--===============================================================================================-->
			<script src="<?php echo base_url('assets/vendor/jquery/jquery-3.2.1.min.js') ?>"></script>
		<!--===============================================================================================-->
			<script src="<?php echo base_url('assets/vendor/animsition/js/animsition.min.js') ?>"></script>
		<!--===============================================================================================-->
			<script src="<?php echo base_url('assets/vendor/bootstrap/js/popper.js') ?>"></script>
			<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
		<!--===============================================================================================-->
			<script src="<?php echo base_url('assets/vendor/select2/select2.min.js') ?>"></script>
		<!--===============================================================================================-->
			<script src="<?php echo base_url('assets/vendor/daterangepicker/moment.min.js') ?>"></script>
			<script src="<?php echo base_url('assets/vendor/daterangepicker/daterangepicker.js') ?>"></script>
		<!--===============================================================================================-->
			<script src="<?php echo base_url('assets/vendor/countdowntime/countdowntime.js') ?>"></script>
		<!--===============================================================================================-->
			<script src="<?php echo base_url('assets/js/main.js') ?>"></script>

</body>
</html>
