<!DOCTYPE html>
<html lang="tr">
<head>
	<title>Admin Giriş</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<?php
session_start();
if(isset($_SESSION['login'])){
	header('Location: /index.php');
} 

?>





<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="include/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="include/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="include/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="include/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="include/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="include/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="include/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="include/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="include/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="include/css/util.css">
	<link rel="stylesheet" type="text/css" href="include/css/main.css">
<!--===============================================================================================-->
</head>



<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="include/functions.php">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Admin
					</span>

					<div class="wrap-input100 validate-input" data-validate = " Lütfen Mail Adresinizi Girin">
						<input class="input100" type="text" name="user" placeholder="Kullanıcı Adı">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Lütfen Parolanızı Girin">
						<input class="input100" type="password" name="password" placeholder="Parola">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
<!--
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Beni Hatırla
						</label>
					</div>
-->
					<div class="container-login100-form-btn">
						<button type="submit" class="btn" name="login_btn">
							Giriş Yap
						</button>
					</div>
<!--
					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Şifremi Unuttum?
						</a>
					</div>
-->
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="include/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="include/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="include/vendor/bootstrap/js/popper.js"></script>
	<script src="include/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="include/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="include/vendor/daterangepicker/moment.min.js"></script>
	<script src="include/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="include/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="include/js/main.js"></script>

</body>
</html>