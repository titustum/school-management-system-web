<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
		body, html {
		height: 100%;
		width:100%;
		text-align: center;
		background:#dcdcdc;
		margin:0;
		padding:0;
		position:relative;
		}
		h1 {
		  color:#4a4a4a;
		  text-align:center;
		}
		img {
		  margin: 0 auto;
		  display:block;
		}
		/*PRELOADING------------ */
		#overlayer {
		  width:100%;
		  height:100%;  
		  position:absolute;
		  z-index:1;
		  background:#4a4a4a;
		}
		.loader {
		  display: inline-block;
		  width: 30px;
		  height: 30px;
		  position: absolute;
		  z-index:3;
		  border: 4px solid #Fff;
		  top: 50%;
		  animation: loader 2s infinite ease;
		}

		.loader-inner {
		  vertical-align: top;
		  display: inline-block;
		  width: 100%;
		  background-color: #fff;
		  animation: loader-inner 2s infinite ease-in;
		}

		@keyframes loader {
		  0% {
		    transform: rotate(0deg);
		  }
		  
		  25% {
		    transform: rotate(180deg);
		  }
		  
		  50% {
		    transform: rotate(180deg);
		  }
		  
		  75% {
		    transform: rotate(360deg);
		  }
		  
		  100% {
		    transform: rotate(360deg);
		  }
		}

		@keyframes loader-inner {
		  0% {
		    height: 0%;
		  }
		  
		  25% {
		    height: 0%;
		  }
		  
		  50% {
		    height: 100%;
		  }
		  
		  75% {
		    height: 100%;
		  }
		  
		  100% {
		    height: 0%;
		  }
		}
	</style>
	<script type="text/javascript" src="http://arabela.com/vendor-assets/jquery/jquery.min.js"></script>
</head>
<body>
	<div id="overlayer"></div>
	<span class="loader">
	  <span class="loader-inner"></span>
	</span>
	<h1>Example of preloading for web page using jQuery</h1>
	<img src="http://arabela.com/uploads/featured-images/cakes-pic.jpg" alt="" width="30%"/>

	<script type="text/javascript">
		$(window).on("load", function() {
			$(".loader").delay(2000).fadeOut("slow");
		  	$("#overlayer").delay(2000).fadeOut("slow");
		})
	</script>
</body>
</html>