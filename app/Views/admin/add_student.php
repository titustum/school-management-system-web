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

	<div class="full-wh d-flex">
		<div class="border-right border-success full-h left-dashboard-nav" style="width: 15%; position: fixed; overflow-y: auto; height: 100vh !important">
			<div class="d-flex justify-content-center full-w" style="margin-top: 10vh">
				<a href="#">
					<img src="<?php if($u_gender=="MALE") echo base_url('my_icons/user_man.jpg'); else echo base_url('my_icons/user_woman.jpg');?>" class="rounded-circle"
					 style="width: 5rem; height: 5rem">
				</a>
			</div>
			<div class="d-flex justify-content-center full-w mt-3">
				<div class="font-weight-bold"><?php echo $u_names; ?></div>
			</div>
			<div class="d-flex justify-content-center full-w mt-1">
				<div class="font-weight-light"><?php echo $u_type; ?></div>
			</div>
			<div class="d-flex justify-content-center full-w mt-3">
				<a href="<?php echo base_url();?>" class="btn btn-success" data-btn="view-students">
					<span class="bx bx-home"></span>
					<span>HOME</span>
				</a>
			</div>
			<div class="d-flex justify-content-center full-w mt-3">
				<a href="<?php echo base_url('dashboard/students');?>" class="btn btn-secondary" data-btn="view-students">
					<span class="bx bx-user"></span>
					<span>STUDENTS</span>
				</a>
			</div>
			<div class="d-flex justify-content-center full-w mt-3">
				<a href="./dashboard/results" class="btn btn-secondary">
					<span class="bx bx-task"></span>
					<span>RESULTS</span>
				</a>
			</div>
			<div class="d-flex justify-content-center full-w mt-3">
				<a href="<?php echo base_url('dashboard/fees');?>" class="btn btn-secondary">
					<span class="bx bx-money"></span>
					<span>FEES</span>
				</a>
			</div>
			<div class="d-flex justify-content-center full-w mt-3">
				<a href="<?php echo base_url('dashboard/logout');?>" class="btn btn-secondary">
					<span class="bx bx-sign-out"></span>
					<span>LOGOUT</span>
				</a>
			</div>
				
		</div>

		<div class="flex-fill d-flex flex-column justify-content-between" style="margin-left: 15%; overflow: auto;">
			<div class="full-w d-flex flex-column" id="main-content">
				<div class="container-fluid py-3 border-bottom border-success">
					<h2>ADD NEW STUDENT</h2>
				</div>

				<div class="container d-flex justify-content-center">
					<div class="pr-2" style="width: 80%">

						
						<div id="personal_info">

							<div class="form-group">
								<div class="text-center font-weight-bold">PERSONAL INFORMATION</div>
							</div>

							<div class="form-group">
								<label class="sr-only">Student Full names</label>
								<div class="input-div d-flex">
									<span class="bx bx-user"></span>
									<input type="text" id="student_names" class="ml-2 flex-fill" placeholder="STUDENT FULL NAMES">
								</div>
							</div>
							

							<div class="form-group">
								<label class="sr-only">SELECT GENDER</label>
								<div class="input-div d-flex">
									<span class="bx bx-user"></span>
									<select class="flex-fill select-something" id="student_gender">
										<option value="">SELECT GENDER</option>
										<option value="MALE">MALE</option>
										<option value="FEMALE">FEMALE</option>
										<option value="OTHER">OTHER</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="sr-only">SELECT FORM</label>
								<div class="input-div d-flex">
									<span class="bx bx-user"></span>
									<select class="flex-fill" id="student_form">
										<option value="">SELECT FORM</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="sr-only">SELECT STREAM</label>
								<div class="input-div d-flex">
									<span class="bx bx-building"></span>
									<select class="flex-fill" id="student_stream">
										<option value="">SELECT STREAM</option>
										<option value="EAST">EAST</option>
										<option value="WEST">WEST</option>
										<option value="NORTH">NORTH</option>
										<option value="SOUTH">SOUTH</option>
										<option value="CENTRAL">CENTRAL</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label class="sr-only">Date of Birth</label>
								<div class="input-div d-flex">
									<span class="bx bx-calendar"></span>
									<input type="number" id="student_yob" min="1990" max="2019" class="ml-2 flex-fill" placeholder="YEAR OF BIRTH">
								</div>
							</div>

							<div class="form-group d-flex justify-content-end" style="width: 100%">
								<div style="width: 45%; border-radius: 0px" data-from="personal_info" data-to="parental_info" class="btn btn-success">NEXT <span class="bx bx-chevron-right"></span></div>
							</div>
						</div>

						<div id="parental_info" style="display: none;">

							<div class="form-group">
								<div class="text-center font-weight-bold">PARENT/GUARDIAN INFORMATION</div>
							</div>
							
							<div class="form-group">
								<label class="sr-only">Parent Full Names</label>
								<div class="input-div d-flex">
									<span class="bx bx-user"></span>
									<input type="text" id="parent_names" class="ml-2 flex-fill" placeholder="PARENT/GUARDIAN FULL NAMES">
								</div>
							</div>
							<div class="form-group">
								<label class="sr-only">SELECT PARENT/GUARDIAN GENDER</label>
								<div class="input-div d-flex">
									<span class="bx bx-user"></span>
									<select class="flex-fill select-something" id="parent_gender">
										<option value="">SELECT PARENT/GUARDIAN GENDER</option>
										<option value="MALE">MALE</option>
										<option value="FEMALE">FEMALE</option>
										<option value="OTHER">OTHER</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label class="sr-only">Parent Phone</label>
								<div class="input-div d-flex">
									<span class="bx bx-phone"></span>
									<input type="number" id="parent_mobile" class="ml-2 flex-fill" placeholder="PARENT/GUARDIAN MOBILE NO.">
								</div>
							</div>

							<div class="form-group d-flex justify-content-between" style="width: 100%">
								<div style="width: 45%; border-radius: 0px" data-from="parental_info" data-to="personal_info" class="btn btn-secondary py-2">BACK <span class="bx bx-chevron-left"></span></div>
								<button id="admit-student" style="width: 45%; border-radius: 0px" data-from="parental_info" data-to="reply_feed_back" class="btn btn-success">FINISH ADMISSION <span class="bx bx-user-plus"></span></button>
							</div>

							

						</div>

						<div id="reply_feed_back" style="display: none;">
							
						</div>



					</div>
				</div>
				
				
			</div>

			<div class="border-top border-success full-w">
				<div class="bottom-footer-links d-flex justify-content-around">
					<a href="#">Privacy</a>
					<a href="#">Policy</a>
					<a href="#">&copy; 2020-myschool</a>
					<a href="#">FAQ</a>
					<a href="#">Help</a>
				</div>
			</div>
		</div>
	</div>



	<script type="text/javascript">

		$(document).ready(function(){

			$('.left-dashboard-nav .btn').click(function(){
				$('.left-dashboard-nav .btn').removeClass('btn-success');
				$('.left-dashboard-nav .btn').addClass('btn-secondary');
				$(this).removeClass('btn-secondary');
				$(this).addClass('btn-success');
			});

			$("input").on("keyup", function () {
				var selection=$(this).val();
				if (selection==="") {
					$(this).removeClass("font-weight-bold text-dark");
				}else{
					$(this).addClass("font-weight-bold text-dark text-uppercase");
				}
			});

			$("select").on("change", function () {
				var selection=$(this).val();
				if (selection==="") {
					$(this).removeClass("font-weight-bold text-dark");
				}else{
					$(this).addClass("font-weight-bold text-dark");
				}
			});

			$('.btn').click(function () {
				var to=$(this).data('to');
				var from=$(this).data('from');
				$('#'+from).hide('slow');
				$('#'+to).show('slow');
			});

			$('#add_new_again').click( function (argument) {
				$('#reply_feed_back').hide('slow');	
				$('#personal_info').show('slow');	
			});
				

			$('#admit-student').click(function () {
				var student_names = $('#student_names').val();
				var student_gender = $('#student_gender').val();
				var student_form = $('#student_form').val();
				var student_stream = $('#student_stream').val();
				var student_yob = $('#student_yob').val();
				var parent_names = $('#parent_names').val();
				var parent_gender = $('#parent_gender').val();
				var parent_mobile = $('#parent_mobile').val();

				var data_sent={
			  			"student_names":student_names.toUpperCase(),
			  			"student_yob":student_yob,
			  			"student_gender":student_gender.toUpperCase(),
			  			"student_form":student_form,
			  			"student_stream":student_stream,
			  			"student_yob":student_yob,
			  			"parent_names":parent_names.toUpperCase(),
			  			"parent_gender":parent_gender.toUpperCase(),
			  			"parent_mobile":parent_mobile
			  		};
	
				console.log(data_sent);

			  	$.post(
			  		"<?php echo(base_url('student/add'));?>",
			  		data_sent,
				  	function(data, status){
				  		if (status==="success") {
							$('#reply_feed_back').html(
								`<div class='d-flex full-h flex-column justify-content-center'>
									<div class="form-group">
										<div class="text-center text-success font-weight-bold">
											NEW STUDENT ADDED SUCCESSFULLY!!
										</div>
									</div>
									<div class='form-group text-success py-2'>
										<h3>NAME: ${data}</h3>
									</div>

									<div class='form-group d-flex justify-content-between'>
										<a href="<?php echo(base_url('dashboard/add_student'));?>" style="width: 45%; border-radius: 0px" data-from="reply_feed_back" data-to="personal_info" class="btn btn-secondary py-2">ADD NEXT<span class="bx bx-user-plus"></span>
										</a>

										<a href="<?php echo(base_url('dashboard/students'));?>" style="width: 45%; border-radius: 0px" data-from="reply_feed_back" data-to="personal_info" class="btn btn-secondary py-2">VIEW STUDENTS<span class="bx bx-user"></span>
										</a>
									</div>
								</div>`
								);
				  		}else{
				  			$('#reply_feed_back').html(
				  				`<div class='d-flex full-h flex-column justify-content-center'>
									<div class='text-center text-danger'>
										<div class='font-weight-bold'>
											Problem Occurred receiving data!!
										</div>
										<div>
											 Check your connection and try again!
										</div>

									</div>
								</div>`
								);
				  		}
				  	});
		
			});

		});
	</script>
</body>
</html>