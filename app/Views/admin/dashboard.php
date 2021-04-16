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
				<a href="#" class="btn btn-success" data-btn="view-students">
					<span class="bx bx-home"></span>
					<span>HOME</span>
				</a>
			</div>
			<div class="d-flex justify-content-center full-w mt-3">
				<a href="./dashboard/students" class="btn btn-secondary" data-btn="view-students">
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
				<a href="./dashboard/fees" class="btn btn-secondary">
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
					<h2>Welcome to school management system</h2>
					<div class="text-success">SUMMARY OF <span class="font-weight-bold">FORM 1 WEST</span></div>
				</div>
				<div class="container">

					<div class="d-flex py-3">
						
						<a href="#" class="card text-decoration-none border ml-2 d-flex flex-column justify-content-center hover-bg-success" style="height: 20vh; font-size: 2rem; width: 22%">
							<div class="d-flex justify-content-center">
								<div class="text-center text-dark">
									<div>
										<span class="bx bx-user-plus"></span>
									</div>
									<div>
										Add Student
									</div>
								</div>
							</div>	
						</a>

						<a href="#" class="card text-decoration-none border ml-2 d-flex flex-column justify-content-center hover-bg-success" style="height: 20vh; font-size: 2rem; width: 22%">
							<div class="d-flex justify-content-center">
								<div class="text-center text-dark">
									<div>
										<span class="bx bx-money"></span>
									</div>
									<div>
										Add Fees
									</div>
								</div>
							</div>	
						</a>

						<a href="#" class="card text-decoration-none border ml-2 d-flex flex-column justify-content-center hover-bg-success" style="height: 20vh; font-size: 2rem; width: 22%">
							<div class="d-flex justify-content-center">
								<div class="text-center text-dark">
									<div>
										<span class="bx bx-task"></span>
									</div>
									<div>
										Add Results
									</div>
								</div>
							</div>	
						</a>
						
					</div>


					<div class="d-flex">
						
						<a href="#" class="card text-decoration-none border ml-2 d-flex flex-column justify-content-center hover-bg-light" style="height: 20vh; font-size: 2rem; width: 22%">
							<div class="d-flex justify-content-center">
								<div class="text-center text-dark">
									<div>
										<span class="bx bx-user"></span>
										<span>44</span>
									</div>
									<div>
										AVG 45%
									</div>
								</div>
							</div>	
						</a>

						<a href="#" class="card text-decoration-none border ml-2 d-flex flex-column justify-content-center hover-bg-light" style="height: 20vh; font-size: 2rem; width: 22%">
							<div class="d-flex justify-content-center">
								<div class="text-center text-dark">
									<div>
										<span class="bx bx-user"></span>
										<span>21</span>
									</div>
									<div>
										Males
									</div>
								</div>
							</div>	
						</a>

						<a href="#" class="card text-decoration-none border ml-2 d-flex flex-column justify-content-center hover-bg-light" style="height: 20vh; font-size: 2rem; width: 22%">
							<div class="d-flex justify-content-center">
								<div class="text-center text-dark">
									<div>
										<span class="bx bx-user"></span>
										<span>23</span>
									</div>
									<div>
										Females
									</div>
								</div>
							</div>	
						</a>
						
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

			$('body').on('load', function () {
				var user_mobile = "<?php echo $u_mobile; ?>";
				var user_names = "<?php echo $u_names; ?>";
				var user_gender = "<?php echo $u_gender; ?>";
				var user_type ="<?php echo $u_type; ?>".toUpperCase();
				if (user_type==="TEACHING STAFF") {
					user_type = "teacher".toUpperCase();  
				}else{
					user_type = "Worker".toUpperCase();
				}
				console.log(user_type);

				$('#sessons-data').html(
					`<div class='d-flex flex-column justify-content-center full-w'>
						<div class='d-flex justify-content-center'>
							<div class='p-2 rounded border'>
							  <div class='text-success'>
							  	<span class='bx bx-phone'></span>
							  	<span class='px-2'>${user_mobile}</span>
							  </div>
							  <div>
							  	<span class='bx bx-user-check'></span>
							  	<span class='px-2'>${user_names}</span>
							  </div>
							  <div>
							  	<span class='bx bx-user'></span>
							  	<span class='px-2'>${user_gender}</span>
							  </div>
							  <div>
							  	<span class='bx bx-calendar'></span>
							  	<span class='px-2'>${user_type}</span>
							  </div>
							</div>
						</div>
					</div>`);
				});

		});
	</script>
</body>
</html>