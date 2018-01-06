<<<<<<< HEAD
<<<<<<< HEAD
<!DOCTYPE html>
<html>
	<?php 
		include 'database/connection.php';
		session_start();
	?>

	<head>
		<title>Mark for Freedom</title>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
		<meta charset="utf-8">
		<link rel="stylesheet" href="assets\bootstrap.css">
		<link rel="stylesheet" type="text/css" href="assets/custom.css">
		<style>
			/* Always set the map height explicitly to define the size of the div
			 * element that contains the map. */
			#map {
				height: 100%;
			}
			/* Optional: Makes the sample page fill the window. */
			html, body {
				height: 100%;
				margin: 0;
				padding: 0;
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a href="#" class="navbar-brand">Mark for Freedom</a>
				<ul class="navbar-nav ml-auto">
				<?php 
					if(!isset($_SESSION['user']) || $_SESSION['user'] == null){
				?>
					<a class="nav-link" href="login.php">Login</a>
					<a class="nav-link" href="register.php">Register</a>
				<?php
					}else{
				?>
					<div class="form-group">
						<input id="searchLocation" class="form-control" type="text" name="searchLocation">
					</div>
					<div class="form-group">
						<button id ="submit" class="btn btn-primary">Search</button>
					</div>
					<a class="nav-link" href="database/logout.php">Logout</a>
				<?php
					}	
				?>
					
				</ul>
			</nav>
			
=======
<!DOCTYPE html>
<html>
	<?php 
		include 'database/connection.php';
		session_start();
	?>

	<head>
		<title>Mark for Freedom</title>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
		<meta charset="utf-8">
		<link rel="stylesheet" href="assets\bootstrap.css">
		<link rel="stylesheet" type="text/css" href="assets/custom.css">
		<style>
			/* Always set the map height explicitly to define the size of the div
			 * element that contains the map. */
			#map {
				height: 100%;
			}
			/* Optional: Makes the sample page fill the window. */
			html, body {
				height: 100%;
				margin: 0;
				padding: 0;
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a href="#" class="navbar-brand">Mark for Freedom</a>
				<ul class="navbar-nav ml-auto">
				<?php 
					if(!isset($_SESSION['user']) || $_SESSION['user'] == null){
				?>
					<a class="nav-link" href="login.php">Login</a>
					<a class="nav-link" href="register.php">Register</a>
				<?php
					}else{
				?>
					<div class="form-group">
						<input id="searchLocation" class="form-control" type="text" name="searchLocation">
					</div>
					<div class="form-group">
						<button id ="submit" class="btn btn-primary">Search</button>
					</div>
					<a class="nav-link" href="database/logout.php">Logout</a>
				<?php
					}	
				?>
					
				</ul>
			</nav>
			
>>>>>>> 188cb3248df141a88aa1e323e6db522eccfa7ac0
=======
<!DOCTYPE html>
<html>
	<?php 
		include 'database/connection.php';
		session_start();
	?>

	<head>
		<title>Mark for Freedom</title>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
		<meta charset="utf-8">
		<link rel="stylesheet" href="assets\bootstrap.css">
		<link rel="stylesheet" type="text/css" href="assets/custom.css">
		<style>
			/* Always set the map height explicitly to define the size of the div
			 * element that contains the map. */
			#map {
				height: 100%;
			}
			/* Optional: Makes the sample page fill the window. */
			html, body {
				height: 100%;
				margin: 0;
				padding: 0;
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a href="#" class="navbar-brand">Mark for Freedom</a>
				<ul class="navbar-nav ml-auto">
				<?php 
					if(!isset($_SESSION['user']) || $_SESSION['user'] == null){
				?>
					<a class="nav-link" href="login.php">Login</a>
					<a class="nav-link" href="register.php">Register</a>
				<?php
					}else{
				?>
					<div class="form-group">
						<input id="searchLocation" class="form-control" type="text" name="searchLocation">
					</div>
					<div class="form-group">
						<button id ="submit" class="btn btn-primary">Search</button>
					</div>
					<a class="nav-link" href="database/logout.php">Logout</a>
				<?php
					}	
				?>
					
				</ul>
			</nav>
			
>>>>>>> 188cb3248df141a88aa1e323e6db522eccfa7ac0
