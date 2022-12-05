<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
  
	<title>KMS Technology - Bright Minds, Brilliant Solutions</title>
	<meta content="" name="description">
	<meta content="" name="keywords">
  
	<!-- Favicons -->
	<link href="https://kms-technology.com/wp-content/uploads/2018/10/favicon.png" rel="icon">
  	<link href="public/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
	
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
	<!-- Vendor CSS Files -->
	<link href="public/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="public/assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="public/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="public/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="public/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
	<link href="public/assets/css/style.css" rel="stylesheet">
	<link href="public/assets/css/main.css" rel="stylesheet">
	<link href="public/assets/css/util.css" rel="stylesheet">
</head>
<body style="background-color: #666666;">	

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="index.php?page=main&controller=login&action=index" method="POST" class="login100-form validate-form">
					<span class="login100-form-title p-b-20">
						<strong>ĐĂNG NHẬP</strong>
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="focus-input100"></span>
						<span class="label-input100">Password</span>
					</div>
					<?php

					if (isset($err))
					{
						echo '<p class="login-box-msg" style="color: red">' . $err . '</p>';
						unset($err);
					}
					?>
					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div>
							<a href="index.php?page=main&controller=register&action=index" class="txt1" style="font-size: 18px; color: blue;">
								Chưa có tài khoản? Đăng ký!
							</a>
						</div>

						<div>
							<a href="index.php?page=main&controller=layouts&action=index" class="txt1" style="font-size: 18px; color: blue;">
								Trở về trang chủ!
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="submit-btn" style="background-color: green; font-size: 20px;">
							Đăng nhập
						</button>
					</div>
				</form>

				<div class="login100-more" style="background-image: url('https://www.passerellesnumeriques.org/wp-content/uploads/2018/10/KMS-Technology.png');">
				</div>
			</div>
		</div>
	</div>
	
	
	
<!--===============================================================================================-->
	<script src="public/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="public/assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="public/assets/vendor/bootstrap/js/popper.js"></script>
	<script src="public/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="public/assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="public/assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="public/assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="public/assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="public/js/main.js"></script>

</body>
</html>