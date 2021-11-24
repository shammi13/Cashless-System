<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
				<table>
					<tr>
						<td style="padding: 25px;">
							<div class="wrap-login100">
							<form method="POST" action="student_login.php">
								<span class="login100-form-logo">
									<img src="images/student-icon.jpg">
								</span>

								<span class="login100-form-title p-b-34 p-t-27">
									Student Log in
								</span>

								<div class="wrap-input100 validate-input" data-validate = "Enter username">
									<input class="input100" type="text" name="susername" placeholder="Username">
									<span class="focus-input100" data-placeholder="&#xf207;"></span>
								</div>

								<div class="wrap-input100 validate-input" data-validate="Enter password">
									<input class="input100" type="password" name="spass" placeholder="Password">
									<span class="focus-input100" data-placeholder="&#xf191;"></span>
								</div>

								<div class="container-login100-form-btn">
									<button class="login100-form-btn">
										Login
									</button>
								</div><br>
								<div class="container-login100-form-btn">
									<label style="color: red;background-color: white;border-radius: 10px;">
										<?php
											session_start();
											if (isset($_SESSION['serror'])){
												echo $_SESSION['serror'];
												session_destroy();
											}
											else{
												echo "";
											}
										?>
									</label>
								</div>
							</form>
							</div>
						</td>
						<td style="padding: 25px;">
							<div class="wrap-login100">
							<form method="POST" action="parent_login.php">
								<span class="login100-form-logo">
									<img src="images/parents-icon.jpg">
								</span>

								<span class="login100-form-title p-b-34 p-t-27">
									Parent Log in
								</span>

								<div class="wrap-input100 validate-input" data-validate = "Enter username">
									<input class="input100" type="text" name="pusername" placeholder="Username">
									<span class="focus-input100" data-placeholder="&#xf207;"></span>
								</div>

								<div class="wrap-input100 validate-input" data-validate="Enter password">
									<input class="input100" type="password" name="ppass" placeholder="Password">
									<span class="focus-input100" data-placeholder="&#xf191;"></span>
								</div>

								<div class="container-login100-form-btn">
									<button class="login100-form-btn">
										Login
									</button>
								</div><br>
								<div class="container-login100-form-btn">
									<label style="color: red;background-color: white;border-radius: 10px;">
										<?php
											if (isset($_SESSION['perror'])){
												echo $_SESSION['perror'];
												session_destroy();
											}
											else{
												echo "";
											}
										?>
									</label>
								</div>
							</form>
							</div>
						</td>
					</tr>
				</table>
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
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>