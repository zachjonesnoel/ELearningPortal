<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Learning</title>
    <link type="text/css" rel="stylesheet" href="css/foundation.css" />
    <link type="text/css" rel="stylesheet" href="css/header.css" />
	<link type="text/css" rel="stylesheet" href="css/menu.css"/>
	<link type="text/css" rel="stylesheet" href="css/home.css"/>
    <script src="js/vendor/modernizr.js"></script>   
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/fastclick.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/vendor/placeholder.js"></script>
    <script src="js/vendor/what-input.js"></script>
</head>
<body>
   
   <?php session_start(); ?>
   
    <div class="large-12 columns panel header">
		<div class="header">
			<div class="large-3 columns">
				<a href="?view=home">
					<!--<h1>E-Learning</h1>-->
					<img src="logo.jpg" height="200" width="300"/>
				</a>
			</div>
			<div class="large-9 columns">
				<?php include 'menu.php';?>
			</div> 
		</div>
	</div>
	<?php include 'config.php';?>
	