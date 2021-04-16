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

		<div class="d-flex flex-column justify-content-center">

			<div class="logo-div d-flex justify-content-center">
				<img class="logo-image rounded" src="<?php echo base_url('favicons/apple-touch-icon.png');?>">
			</div>

			<div class="d-flex justify-content-center">
				<form method="POST" action="registerUser" class="w-50 pr-2" id="registerUserForm">
						<div class="form-group">
							<label class="sr-only">Mobile Number</label>
							<div class="input-div d-flex">
								<span class="bx bx-phone"></span>
								<input type="number" name="mobile" class="ml-2 flex-fill" placeholder="MOBILE NUMBER">
							</div>
						</div>
						<div class="form-group">
							<label class="sr-only">Full Names</label>
							<div class="input-div d-flex">
								<span class="bx bx-user"></span>
								<input type="text" name="names" class="ml-2 flex-fill" placeholder="FULL NAMES">
							</div>
						</div>
						<div class="form-group">
							<label class="sr-only">USER TYPE</label>
							<div class="input-div d-flex">
								<span class="bx bx-pen"></span>
								<select class="select-something flex-fill" name="user-type">
									<option value="">SELECT USER TYPE</option>
									<option value="PARENT">PARENT</option>
									<option value="TEACHING STAFF">TEACHING STAFF</option>
									<option value="NON TEACHING STAFF">NON TEACHING STAFF</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="sr-only">SELECT GENDER</label>
							<div class="input-div d-flex">
								<span class="bx bx-user"></span>
								<select class="flex-fill select-something" name="user-gender">
									<option value="">SELECT GENDER</option>
									<option value="MALE">MALE</option>
									<option value="FEMALE">FEMALE</option>
									<option value="OTHER">OTHER</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="sr-only">New Password</label>
							<div class="input-div d-flex">
								<span class="bx bx-lock"></span>
								<input type="password" name="new-password" class="ml-2 flex-fill" placeholder="NEW PASSWORD">
							</div>
						</div>

						<div class="form-group" style="width: 100%">
							<button class="btn btn-success" type="submit">CREATE NEW ACCOUNT <span class="bx bx-user-plus"></span></button>
						</div>
						<div class="after-submit-btn form-group">
							<div class="text-center">
								Already have an account?<a href="./" class="ml-2">Login here!</a>
							</div>
						</div>
						

		
					</form>
			 </div>

		</div><!--end flex-column-->

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
		});

		$(document).ready(function () {
			// body...
			$("select").on("change", function () {
				var selection=$(this).val();
				if (selection==="") {
					$(this).css("color","grey");
				}else{
					$(this).css("color","black");
				}
			});

			$("registerUserForm").on("submit", function(){
				return false;
			})
			
		});
	</script>
</body>
</html>