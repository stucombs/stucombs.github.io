<?php
	//REDIRECT TO HTTPS IF CONNECTING OVER PORT 80 [HTTP]
	if($_SERVER['SERVER_PORT'] === '80'){
		header('Location: https://stucombs.com');
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="Content-Language" content="en">
		<meta name="description" content="A professional website by Stu Combs">
		<meta name="keywords" content="Developer, CV, Combs, Stuart, Stu, Job, Hire, Web Developer">
		<meta name="author" content="stucombs">
		<title id="page_title">Welcome to Stu Combs' Website</title>
		<link href="./fontawesome/css/all.min.css" rel="stylesheet" /> <!--load all styles-->
		<link href="./bootstrap-4/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" type='text/css' href='./index.css' />
		<link href="https://fonts.googleapis.com/css?family=Raleway|Roboto|Source+Code+Pro|Source+Sans+Pro&display=swap" rel="stylesheet" />
	</head>
	<body>
		<!-- BEGIN MAIN PAGE-->
		<div id="main-div" class="container-fluid main-div">
			<div class="row">
				<div class="col-xs-12">
					<span class='inline-text' style='font-size: 38px;'><b>Hello.</b><br/><br/></span>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<span class='inline-text' style='font-size: 32px;'>My name is Stu Combs.<br/><br/></span>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<span class='inline-text' style='font-size: 30px;'>I a a full stack web developer from Indianapolis, Indiana. Most of my past and current work is in Linux, Apache, MySQL and PHP stacks with React.js frontend and experience in Amazon Web Services.
						<br/><br> Raised in the Hoosier state, I graduated with an Informatics Degree from the School of Informatics and Computing at Indiana University Bloomington. Outside of developing, I enjoy videogames, spending my time at the gym or trying a new beer.<br/><br/></span>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12" align="center" style="padding-bottom: 1%; padding-top: 4%;">
					<span class="inline-text" style="font-size: 20px;">Find me around the web</span>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12" align="center">
					<i class="fab fa-linkedin fa-3x external-icon" style="color: #0F77B5;" onclick="window.open('https://linkedin.com/in/combsstuart')" title="https://linkedin.com/in/combsstuart"></i><span style="font-size: 45px">&nbsp;&nbsp;|
						&nbsp;&nbsp;</span><i class="fab fa-github fa-3x external-icon" onclick="window.open('https://github.com/stucombs')" title='https://github.com/stucombs'></i><span style="font-size: 45px">&nbsp;&nbsp;|
						&nbsp;&nbsp;</span><a href="mailto:stuart.combs@att.net"><i class="far fa-envelope fa-3x external-icon" title="Contact Stu"></i></a>
				</div>
			</div>
		</div>
		<?php include_once('includes/footer.php'); ?>
	</body>
</html>
