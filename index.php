<?php
	//REDIRECT TO HTTPS IF CONNECTING OVER PORT 80 [HTTP]
	if($_SERVER['SERVER_PORT'] !== '443') header('Location: https://stucombs.com')
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="Content-Language" content="en">
		<meta name="description" content="A professional website by Stu Combs">
		<meta name="keywords" content="developer, CV, resume, Combs, Stuart, Stu, job, hire, web developer, full stack">
		<meta name="author" content="Stu Combs">
		<title id="page_title">Welcome to Stu Combs' Website</title>
		<!--load all styles-->
		<link href="./fontawesome/css/all.min.css" rel="stylesheet" />
		<link href="./bootstrap-4/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" type='text/css' href='./index.css' />
		<link href="https://fonts.googleapis.com/css?family=Raleway|Roboto|Source+Code+Pro|Source+Sans+Pro&display=swap" rel="stylesheet" />
	</head>
	<body id="page_main_body" name="page_main_body">
		<!-- BEGIN MAIN PAGE-->
		<div id="main-div" class="container-fluid main-div">
			<div class="row spacer">
				<div class="col-xl-10" align="left">
					<span class="inline-text large"><b>Hello.</b></span>
				</div>
				<div class="col-xl-2" align="right">
					<i id="view_mode_status" name="view_mode_status" class="far fa-moon fa-2x status-button" onclick="onSwitchMode()">
						<label for="view_mode_status" class="toggle-label">Toggle View Mode</label>
					</i>
				</div>
			</div>
			<div class="row spacer">
				<div class="col-xl-12">
					<span class="inline-text medium">My name is Stu Combs.</span>
				</div>
			</div>
			<div class="row spacer">
				<div class="col-xl-12">
					<span class="inline-text">I am a full stack web developer from Chicago. Most of my past and current work is in Linux, MySQL and PHP environments with React and Angular frontends and experience in Amazon Web Services.</span>
				</div>
			</div>
			<div class="row spacer">
					<div class="col-xl-12">
						<span class="inline-text">Raised in Indiana, I graduated with an Informatics Degree from the School of Informatics and Computing at Indiana University Bloomington. Outside of developing, I enjoy videogames, spending my time at the gym or trying a new beer.</span>
					</div>
			</div>
			<div class="row">
				<div class="col-xl-12" align="left" style="padding-top: 3%;">
					<span class="inline-text small">Find me around the web</span>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-12" align="left">
					<i class="fab fa-linkedin fa-3x external-icon linkedin" id="linkedin" onclick="window.open('https://linkedin.com/in/combsstuart')">
						<label for="linkedin" class="icon-label">LinkedIn</label>
					</i>
					<span class="hor-spacer"></span>
					<i class="fab fa-github fa-3x external-icon github" id="github" onclick="window.open('https://github.com/stucombs')">
						<label for="github" class="icon-label">GitHub</label>
					</i>
					<span style="font-size: 45px">
				</div>
			</div>
		</div>
		<!-- JAVASCRIPT -->
		<script>
			let light_mode;
			// On initial load determine default color scheme
			if( window.matchMedia('(prefers-color-scheme: dark)').matches ) {
				light_mode = false;
				onSwitchMode();
			} else {
				light_mode = true;
				onSwitchMode();
			}
			
			function onSwitchMode(){
				if( light_mode ){
					document.documentElement.removeAttribute("dark");
					document.getElementById('view_mode_status').className = "fas fa-sun fa-2x status-button";
				}else{
					document.documentElement.setAttribute("dark", true);
					document.getElementById('view_mode_status').className = "far fa-moon fa-2x status-button";
				}
				light_mode = !light_mode
			}
		</script>
		<!-- END MAIN PAGE INCLUDE FOOTER -->
		<?php include_once('includes/footer.php'); ?>
	</body>
</html>
