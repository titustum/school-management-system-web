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
					<h2>ADD STUDENT RESULTS</h2>
				</div>

				<div class="container d-flex justify-content-center">
					
					<div class="pr-2" style="width: 80%">
						<div class="form-group">
							<div class="text-center font-weight-bold">ADD MARKS</div>
						</div>

						<div id="form-part">
							<div class="form-group">
								<label class="sr-only">Admin Number.</label>
								<div class="input-div d-flex">
									<span class="bx bx-user-plus"></span>
									<input type="number" id="admission_number" class="ml-2 flex-fill" placeholder="ADMISSION NUMBER">
								</div>
							</div>

							<div class="form-group">
								<label class="sr-only">English</label>
								<div class="input-div d-flex">
									<span class="bx bx-file"></span>
									<input type="number" id="english" class="ml-2 flex-fill" placeholder="ENGLISH">
								</div>
							</div>
							<div class="form-group">
								<label class="sr-only">KISWAHILI</label>
								<div class="input-div d-flex">
									<span class="bx bx-file"></span>
									<input type="number" id="kiswahili" class="ml-2 flex-fill" placeholder="KISWAHILI">
								</div>
							</div>

							<div class="form-group">
								<label class="sr-only">MATHS</label>
								<div class="input-div d-flex">
									<span class="bx bx-file"></span>
									<input type="number" id="maths" class="ml-2 flex-fill" placeholder="MATHEMATICS">
								</div>
							</div>
							<div class="form-group">
								<label class="sr-only">SOCIAL STUDIES</label>
								<div class="input-div d-flex">
									<span class="bx bx-file"></span>
									<input type="number" id="social_studies" class="ml-2 flex-fill" placeholder="SOCIAL STUDIES & RE">
								</div>
							</div>

							<div class="form-group">
								<label class="sr-only">SCIENCE</label>
								<div class="input-div d-flex">
									<span class="bx bx-file"></span>
									<input type="number" id="science" class="ml-2 flex-fill" placeholder="SCIENCE">
								</div>
							</div>	

							<div class="form-group">
								<label class="sr-only">SELECT TERM</label>
								<div class="input-div d-flex">
									<span class="bx bx-file"></span>
									<select class="flex-fill select-something" id="school_term">
										<option value="">SELECT TERM</option>
										<option value="1">TERM 1</option>
										<option value="2">TERM 2</option>
										<option value="3">TERM 3</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="sr-only">SELECT FORM</label>
								<div class="input-div d-flex">
									<span class="bx bx-building"></span>
									<select class="flex-fill" id="st_form">
										<option value="">SELECT FORM</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<div class="font-weight-bold" id="feed-back">
									
								</div>
							</div>	

							<div class="form-group" style="width: 100%">
								<button id="add_marks_btn" class="btn btn-block btn-success">
									ADD MARKS <i class="bx bx-plus"></i>
								</button>
							</div>
						</div>
						<div id="reply_feed_back">
							
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
				

			$('#add_marks_btn').click(function () {
				var admission_number = $('#admission_number').val();
				var english = $('#english').val();
				var kiswahili = $('#kiswahili').val();
				var maths = $('#maths').val();
				var social_studies = $('#social_studies').val();
				var science = $('#science').val();
				var school_term = $('#school_term').val();
				var st_form = $('#st_form').val();

				var data_sent={
			  			"admission_number":admission_number,
			  			"english":english,
			  			"kiswahili":kiswahili,
			  			"maths":maths,
			  			"social_studies":social_studies,
			  			"science":science,
			  			"school_term":school_term.toUpperCase(),
			  			"st_form":st_form.toUpperCase(),
			  		};
	
				console.log(data_sent);

			  	$.post(
			  		"<?php echo(base_url('student/addmarks'));?>",
			  		data_sent,
				  	function(data, status){
				  		if (status==="success") {
				  			$('#feed-back').addClass("text-success");
				  			$('#feed-back').removeClass("text-danger");
							$('#feed-back').text(data);
							$('input').val('');
							$('input').removeClass('font-weight-bold');
				  		}else{
				  			$('#feed-back').removeClass("text-success");
				  			$('#feed-back').addClass("text-danger");
				  			$('#feed-back').text('Sending/receiving of data was not successful! Please Check your network');
				  		}
				  	});
		
			});

		});
	</script>
</body>
</html>