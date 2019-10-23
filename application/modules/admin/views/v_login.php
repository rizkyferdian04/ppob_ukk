<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets2/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets2/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets2/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets2/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets2/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets2/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets2/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?= base_url()?>assets2/images/img-01.png" alt="IMG">
				</div>

				<form  action="<?= base_url()?>index.php/admin/Login/proses_login" method="post" class="login100-form validate-form">
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					 <input type="text" class="form-control" placeholder="Username" name="username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">

						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						 <input type="password" class="form-control" placeholder="Password" name="password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">

						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">

						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="<?= base_url()?>assets2/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url()?>assets2/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url()?>assets2/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url()?>assets2/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url()?>assets2/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?= base_url()?>assets2/js/main.js"></script>

</body>
</html>
