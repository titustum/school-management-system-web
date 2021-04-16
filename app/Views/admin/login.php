<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>MYSCHOOL / LOGIN</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Keywords" content="HTML,CSS,JavaScript,SQL,PHP,jQuery,XML,DOM,Bootstrap,Python,Java,Web development,W3C,tutorials,programming,training,learning,quiz,primer,lessons,references,examples,exercises,source code,colors,demos,tips">
	<meta name="Description" content="Well organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, PHP, Python, Bootstrap, Java and XML.">

	<link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
	<link rel="manifest" href="/favicons/site.webmanifest">
	<link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#5bbad5">
	<link rel="shortcut icon" href="/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-config" content="/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">

	<link rel="stylesheet" type="text/css" href="http://arabela.com/vendor-assets/bootstrap-4.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="http://arabela.com/vendor-assets/fontawesome-free-5.15.1-web/css/all.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/boxicons-2.0.7/css/boxicons.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/mycss/main.min.css');?>">
	<script type="text/javascript" src="<?php echo base_url('assets/jQuery/jquery-3.6.0.min.js');?>"></script>
	<script type="text/javascript" src="http://arabela.com/vendor-assets/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
</head>
<body>

	<div id="main" class="d-flex flex-column full-wh justify-content-between" style="top: 0">
		<div class="d-flex justify-content-end">
			<div class="top-header-links">
				<a href="#"><span class="mx-1 bx bx-user"></span>admins</a>
				<div>
					<div class="border-bottom font-weight-bold">
						<span>Mobile</span>
						<span class="pl-2">Password</span>
					</div>
					<div>
						<span>0711222333</span>
						<span class="pl-2">queen</span>
					</div>
					<div>
						<span>0771167161</span>
						<span class="pl-2">benson</span>
					</div>
				</div>
			</div>			
		</div>

		<div class="d-flex justify-content-center">
			<form style="width: 30%" method="POST" action="<?php echo base_url('account/logUserIn');?>">
				<div class="logo-div d-flex justify-content-center">
					<img class="logo-image rounded" src="<?php echo base_url('favicons/apple-touch-icon.png');?>">
				</div>
				<div class="form-group">
					<label class="sr-only">Mobile Number</label>
					<div class="input-div d-flex">
						<span class="bx bx-phone"></span>
						<input type="number" name="user_mobile" class="ml-2 flex-fill" placeholder="MOBILE NUMBER">
					</div>
				</div>
				<div class="form-group">
					<label class="sr-only">Password</label>
					<div class="input-div d-flex">
						<span class="bx bx-key"></span>
						<input type="password" name="user_password" class="ml-2 flex-fill" placeholder="PASSWORD">
					</div>
				</div>
				<div class="form-group">
					<button class="btn btn-success" type="submit">LOGIN <span class="bx bx-user-check"></span></button>
				</div>
				<div class="after-submit-btn form-group">
					<div class="text-center">
						Forgotten password?<a href="resetpass" class="ml-2">Reset here!</a>
					</div>
					<div class="text-center">
						Don't have account?<a href="account/create" class="ml-2">Create here!</a>
					</div>
					
				</div>
			</form>
		</div>

		<div class="d-flex justify-content-center">
			<div class="bottom-footer-links d-flex justify-content-around">
				<a href="#">Privacy</a>
				<a href="#">Policy</a>
				<a href="#">&copy; 2020-myschool</a>
				<a href="#">FAQ</a>
				<a href="#">Help</a>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$(window).on("load", function() {
		  	$(".preloader-spinner").delay(2000).fadeOut("slow");
		  	$("#overlay-div").delay(2000).fadeOut("slow");
		})
	</script>
</body>
</html>