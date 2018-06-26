<!DOCTYPE html>
<html>
<head>
	<title>techAtest - Home</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
	<link rel="icon" href="img/logo.ico" type="image/x-icon">

	<!-- required stylesheet -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">

	<!-- required scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<?php include_once "header.php"; ?>

	<div class="container">
		<div class="row">
			<div class="col-sm-6 login-container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="log-text">Log In</h2>
					</div>
				</div>
				<form class="form-horizontal" action="">
					<div class="form-group has-feedback">
						<label class="control-label col-sm-2" for="email">Email:</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" placeholder="Enter email" required>
							<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
						</div>
					</div>
					<div class="form-group has-feedback">				  	
						<label class="control-label col-sm-2" for="pwd">Password:</label>
						<div class="col-sm-10">
							<input type="password" class="form-control" id="pwd" placeholder="Enter password" required>
							<span class="glyphicon glyphicon-lock form-control-feedback"></span>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-6 col-sm-4 forgot-pass">
							<a href="">Forgot Password?</a>
						</div>
						<div class="col-sm-2">
							<button type="submit" class="btn btn-success pull-right"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;Log In</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-sm-6 signup-container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="log-text">Sign Up</h2>
					</div>
				</div>
				<form class="form-horizontal" action="">
					<div class="form-group has-feedback">
						<label class="control-label col-sm-4" for="email">Email:</label>
						<div class="col-sm-8">
							<input type="email" class="form-control" id="email" placeholder="Enter email" required>
							<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
						</div>
					</div>
					<div class="form-group has-feedback">
						<label class="control-label col-sm-4" for="pwd">Password:</label>
						<div class="col-sm-8">
							<input type="password" class="form-control" id="pwd" placeholder="Enter password" required>
							<span class="glyphicon glyphicon-lock form-control-feedback"></span>
						</div>
					</div>
					<div class="form-group has-feedback">
						<label class="control-label col-sm-4" for="pwd">Confirm Password:</label>
						<div class="col-sm-8">
							<input type="password" class="form-control" id="pwd" placeholder="Enter password" required>
							<span class="glyphicon glyphicon-lock form-control-feedback"></span>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-4" for="pwd">Full Name:</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="pwd" placeholder="First Name" required>
						</div>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="pwd" placeholder="Last Name" required>
						</div>
					</div>
					<div class="form-group has-feedback">
						<label class="control-label col-sm-4" for="pwd">Mobile Number:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="pwd" placeholder="Enter Mobile Number" required>
							<span class="glyphicon glyphicon-modal-window form-control-feedback"></span>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-success pull-right"> <span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Register</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<h1 class="prop-header">Everything you need to <span>#PracticeBetter</span></h1>
			</div>
		</div>
		<div class="row prop-row">
			<div class="col-sm-4">
				<div class="row">
					<div class="col-sm-12">
						<span class="glyphicon glyphicon-edit prop-icon"></span>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<h2 class="prop-header">Practice</h2>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<p class="sub-header">Solve<br>some practice set<br>available in our portal.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="row">
					<div class="col-sm-12">
						<span class="glyphicon glyphicon-book prop-icon"></span>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<h2 class="prop-header">Preapre</h2>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<p class="sub-header">Prepare<br>yourself with the<br>best study meterials.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="row">
					<div class="col-sm-12">
						<span class="glyphicon glyphicon-signal prop-icon"></span>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<h2 class="prop-header">Improve</h2>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<p class="sub-header">Be the<br>better version<br>of yourself everyday.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include_once "footer.php"; ?>
</body>
</html>