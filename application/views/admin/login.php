<!DOCTYPE html>
<html lang="en">
<head>
	<title><?= $title ?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- favicon.ico -->	
	<link rel="icon" type="image/png" href="<?= base_url('./public/img/icons/favicon.ico') ?>"/>
	<!-- bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- icon-font.min.css -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('./public/css/icon-font.min') ?>">
	<!-- animate.css -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('./public/css/animate.css') ?>">
	<!-- hamburgers.min.css -->	
	<link rel="stylesheet" type="text/css" href="<?= base_url('./public/css/hamburgers.min.css') ?>">
	<!-- animsition.min.css -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('./public/css/animsition.min.css') ?>">
	<!--select2.min.css -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('./public/css/select2.min.css') ?>">
	<!-- daterangepicker.css -->	
	<link rel="stylesheet" type="text/css" href="<?= base_url('./public/css/daterangepicker.css') ?>">
	<!-- util.css , main.css -->
	<link rel="stylesheet" type="text/css" href="<?= base_url('.public/css/util.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('./public/css/login_main.css') ?>">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?= base_url('./public/img/bg-01.jpg') ?>');">
			<div class="wrap-login100 p-5">
				<form action="" method="post" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title pb-5">
						Login
					</span>
					<div class="pt-3">
						<span class="txt1">
							Username
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username" value="<?= set_value('username') ?>">
						<span class="focus-input100"></span>
					</div>
					<?= form_error('username', '<div class="form-text text-danger">', '</div>'); ?>
					
					<div class="mt-4">
						<span class="txt1">
							Password
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" >
						<span class="focus-input100"></span>
					</div>
					<?= form_error('password', '<div class="form-text text-danger">', '</div>'); ?>

					<div class="container-login100-form-btn mt-5">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>

					<div class="w-full text-center mt-1">
						<span class="txt2">
							Lupa password?
						</span>
						<a href="#" class="txt2 bo1">
							Klik disini
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--==================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--================================================================================-->
	<script src="<?= base_url('./public/js/main.js') ?>"></script>

</body>
</html>