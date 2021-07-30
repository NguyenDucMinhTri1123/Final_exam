<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="login_theme/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_theme/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_theme/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_theme/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_theme/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login_theme/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_theme/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_theme/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login_theme/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_theme/css/util.css">
	<link rel="stylesheet" type="text/css" href="login_theme/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('login_theme/images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="./login">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						Register
					</span>
					<?php 
						if(isset($alert)){
							echo "<h5 class='text-warning'>".$alert."<h5>";
							unset($alert);
						}
					?>
                    <!-- input name -->
                    <div class="wrap-input100 validate-input" data-validate="Enter name">
						<input class="input100" type="text" name="name" placeholder="Name" value="<?=$account->name;?>">
						<span class="focus-input100" data-placeholder="&#xf109;"></span>
					</div>
                    <!-- input email -->
					<div class="wrap-input100 validate-input" data-validate = "Enter email">
						<input class="input100" type="text" name="email" placeholder="Email" value="<?=$account->email;?>">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
                    <!-- input password -->
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password" >
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
                    <!-- input confirm password -->
                    <div class="wrap-input100 validate-input" data-validate="Enter confirm password">
						<input class="input100" type="password" name="confirm_pass" placeholder="Confirm Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
                        <input type="hidden" name="add_new_user" value="yes">
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Register
						</button>
					</div>
					<div class="text-center p-t-90">
						<a class="txt1" href="./login">
							Login
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="login_theme/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login_theme/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="login_theme/vendor/bootstrap/js/popper.js"></script>
	<script src="login_theme/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login_theme/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login_theme/vendor/daterangepicker/moment.min.js"></script>
	<script src="login_theme/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="login_theme/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="login_theme/js/main.js"></script>

</body>
</html>