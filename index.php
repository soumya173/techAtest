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
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="email">Email:</label>
				    <div class="col-sm-10">
				      <input type="email" class="form-control" id="email" placeholder="Enter email">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="pwd">Password:</label>
				    <div class="col-sm-10">
				      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-success pull-right">Log In</button>
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
				  <div class="form-group">
				    <label class="control-label col-sm-4" for="email">Email:</label>
				    <div class="col-sm-8">
				      <input type="email" class="form-control" id="email" placeholder="Enter email">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-4" for="pwd">Password:</label>
				    <div class="col-sm-8">
				      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
				    </div>
				  </div>
				  <div class="form-group">
				    <label class="control-label col-sm-4" for="pwd">Confirm Password:</label>
				    <div class="col-sm-8">
				      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-success pull-right">Register</button>
				    </div>
				  </div>
				</form>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3 class="prop-header">Everything you need to <span>#PracticeBetter</span></h3>
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
						<h3 class="prop-header">Practice</h3>
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
						<h3 class="prop-header">Preapre</h3>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<p class="sub-header">Prepare yourself<br>with the best<br>study meterials.</p>
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
						<h3 class="prop-header">Improve</h3>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<p class="sub-header">Be the<br>better version of<br>yourself everyday.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include_once "footer.php"; ?>
</body>
</html>