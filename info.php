<?php 
	require './config.php';
	
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtm11/DTD/xhtml-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
			<meta content="personal purposes"/>
			<meta charset="utf-8"/>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
			<meta http-equiv="X-UA-Compatible" content="chrome=1, IE=edge">
			
			<meta name="description" content="an actual website by logan.. "/>
			<meta name="keywords" content="personal, homepage, terum"/>
			<meta name="robots" content="googlebot, bingbot"/>
			
			<!-- Cool JavaScripts -->
			<script type="text/javascript" src="main.js"/></script>

			<!-- Page fonts: Abel, Sans -->
			<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
			<link href="css/main.one.css" rel="stylesheet" type="text/css"/>
			<link href="css/main.two.css" rel="stylesheet" type="text/css"/>
			
			<!-- Font Awesome 4.3.0 -->
			<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
		
			<title>Terum International Solutions</title>
		</head>
		
		<body id="content">
			<!-- Navigation Sidebar -->
			<div class="sidebar">
				<!-- Navigation -->
				<div class="left-nav">
					<nav class="navbar">
						<ul>
							<a href="http://terum.us/index.php"><li id="home">Homepage</li></a>
							<a href="https://github.com/loganbutlre"><li id="repo">Repository</li></a>
							<a href="http://terum.us/about.php"><li id="abou">About</li></a>
							<a href="http://terum.us/projects.php"><li id="exra">Projects</li></a>
							<a href="http://terum.us/contact.php"><li id="cont">Contact</li></a>
						</ul>
					</nav>
				</div>
				
				<div class="footer">
					&copy; 2015 Logan Butler <br /> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <a class="dl" href="http://terum.us/info.php?action=dmca">DMCA</a>
				</div>
			</div>
			<!-- End Nav-Sidebar -->
			
			<!-- Start Body -->
			<div class="body">
				<div class="content">
					<div class="post">
						<?php 
							if($_GET["action"] == "dmca"){
								echo $substr;
							}
						?>
					</div>
				</div>
			</div>
			<!-- End Body -->
		</body>
	</html>
			