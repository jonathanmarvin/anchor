<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from odindesign-themes.com/emerald-dragon/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Aug 2017 17:33:48 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(''); ?>css/vendor/simple-line-icons.css">
	<link rel="stylesheet" href="<?php echo base_url(''); ?>css/style.css">
	<!-- favicon -->
	<link rel="icon" href="favicon.ico">
	<title>Admin</title>
</head>
<body>

	<!-- HEADER -->
	<div class="header-wrap">
		<header>
			<!-- LOGO -->
			<a href="index-2.html">
				<figure class="logo">
					<img src="<?php echo base_url(''); ?>/images/home-logo.png" alt="logo">
				</figure>
			</a>
			<!-- /LOGO -->

			<!-- MOBILE MENU HANDLER -->
			<div class="mobile-menu-handler left primary">
				<img src="images/pull-icon.png" alt="pull-icon">
			</div>
			<!-- /MOBILE MENU HANDLER -->

			<!-- LOGO MOBILE -->
			<a href="index-2.html">
				<figure class="logo-mobile">
					<img src="images/logo_mobile.png" alt="logo-mobile">
				</figure>
			</a>
			<!-- /LOGO MOBILE -->

		</header>
	</div>
	<!-- /HEADER -->

<br>

<!-- FORM POPUP -->
			<div class="form-popup" style="margin-bottom:40px">
				

				<!-- FORM POPUP HEADLINE -->
				<div class="form-popup-headline secondary">
					<h2>Login to your Account</h2>
					<p>Enter now to your Admin account!</p>
				</div>
				<!-- /FORM POPUP HEADLINE -->

				<!-- FORM POPUP CONTENT -->
				<div class="form-popup-content">
					<form id="login-form2" action="<?php echo site_url('login/checklogin'); ?>"  method="post">
						<label for="username5" class="rl-label">Username</label>
						<input type="text" id="username" name="username" placeholder="Enter your username here..."  required="required" >
						<label for="password5" class="rl-label">Password</label>
						<input type="password" id="password" name="password" placeholder="Enter your password here..."  required="required" >
						<!-- CHECKBOX -->
						<input type="checkbox" id="remember2" name="remember2" checked>
					
						<!-- /CHECKBOX -->
						<p>Forgot your password? <a href="#" class="primary">Click here!</a></p>
						<button class="button mid dark">Login <span class="primary">Now!</span></button>
					</form>
					
				</div>
				<!-- /FORM POPUP CONTENT -->
			</div>
			<!-- /FORM POPUP -->
			
			<footer>
			<!-- FOOTER BOTTOM -->
		<div id="footer-bottom-wrap">
			<div id="footer-bottom">
				<p><span>&copy;</span><a href="index-2.html">ChandanSingh</a>All Rights Reserved 2017</p>
			</div>
		</div>
		<!-- /FOOTER BOTTOM -->
	</footer>
				


<!-- jQuery -->
<script src="<?php echo base_url(''); ?>js/vendor/jquery-3.1.0.min.js"></script>
<!-- Tooltipster -->
<script src="<?php echo base_url(''); ?>js/vendor/jquery.tooltipster.min.js"></script>
<!-- Owl Carousel -->
<script src="<?php echo base_url(''); ?>js/vendor/owl.carousel.min.js"></script>
<!-- Tweet -->
<script src="<?php echo base_url(''); ?>js/vendor/twitter/jquery.tweet.min.js"></script>
<!-- xmAlerts -->
<script src="<?php echo base_url(''); ?>js/vendor/jquery.xmalert.min.js"></script>
<!-- Side Menu -->
<script src="<?php echo base_url(''); ?>js/side-menu.js"></script>
<!-- Home -->
<script src="<?php echo base_url(''); ?>js/home.js"></script>
<!-- Tooltip -->
<script src="<?php echo base_url(''); ?>js/tooltip.js"></script>
<!-- User Quickview Dropdown -->
<script src="<?php echo base_url(''); ?>js/user-board.js"></script>
<!-- Home Alerts -->
<!-- Footer -->
<script src="<?php echo base_url(''); ?>js/footer.js"></script>
</body>

<!-- Mirrored from odindesign-themes.com/emerald-dragon/login-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Aug 2017 17:33:48 GMT -->
</html>