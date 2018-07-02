<?php
	include_once("connect.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Challenge Yourself</title>

		<!-- Required stylesheets -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">

		<link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
		<link rel="icon" href="img/logo.ico" type="image/x-icon">

		<!-- Required fonts -->
		<link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Vollkorn:400,700" rel="stylesheet">

		<!-- Required scripts -->
		<script src="js/jquery.min.js" charset="utf-8"></script>
		<script src="js/bootstrap.min.js" charset="utf-8"></script>
		<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
		<script src="js/scripts.js" charset="utf-8"></script>

	</head>
	<body>

		<!-- Including the header -->
		<?php
			include('header.php');
		?>

		<div class="container profile-body">
			<div class="row">
				<div class="col-sm-12">
					<ul class="nav nav-pills nav-justified">
					    <li class="active"><a data-toggle="pill" href="#q1">Q 1</a></li>
					    <li><a data-toggle="pill" href="#q2">Q 2</a></li>
					    <li><a data-toggle="pill" href="#q3">Q 3</a></li>
					    <li><a data-toggle="pill" href="#q4">Q 4</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
						<div class="tab-content">
							<div id="q1" class="tab-pane fade in active">
								<h3>Question No: 1</h3>
								<p>Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary</p>

								<div class="radio">
									<label><input type="radio" name="q1">Option 1</label>
								</div>
								<div class="radio">
									<label><input type="radio" name="q1">Option 2</label>
								</div>
								<div class="radio">
									<label><input type="radio" name="q1">Option 3</label>
								</div>
								<div class="radio">
									<label><input type="radio" name="q1">Option 4</label>
								</div>
							</div>
							<div id="q2" class="tab-pane fade">
								<h3>Question No: 2</h3>
								<p>Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary</p>

								<div class="radio">
									<label><input type="radio" name="q2">Option 1</label>
								</div>
								<div class="radio">
									<label><input type="radio" name="q2">Option 2</label>
								</div>
								<div class="radio">
									<label><input type="radio" name="q2">Option 3</label>
								</div>
								<div class="radio">
									<label><input type="radio" name="q2">Option 4</label>
								</div>
							</div>
							<div id="q3" class="tab-pane fade">
								<h3>Question No: 3</h3>
								<p>Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary</p>

								<div class="radio">
									<label><input type="radio" name="q3">Option 1</label>
								</div>
								<div class="radio">
									<label><input type="radio" name="q3">Option 2</label>
								</div>
								<div class="radio">
									<label><input type="radio" name="q3">Option 3</label>
								</div>
								<div class="radio">
									<label><input type="radio" name="q3">Option 4</label>
								</div>
							</div>
							<div id="q4" class="tab-pane fade">
								<h3>Question No: 4</h3>
								<p>Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary Question summary</p>

								<div class="radio">
									<label><input type="radio" name="q4">Option 1</label>
								</div>
								<div class="radio">
									<label><input type="radio" name="q4">Option 2</label>
								</div>
								<div class="radio">
									<label><input type="radio" name="q4">Option 3</label>
								</div>
								<div class="radio">
									<label><input type="radio" name="q4">Option 4</label>
								</div>
							</div>																		
						</div>
						<div class="form-group finish-btn">
							<div class="col-sm-offset-3 col-sm-6">
								<button type="button" class="btn btn-success btn-lg btn-block">Finish Test</button>
							</div>
						</div>						
					</form>
				</div>
			</div>
		</div>

		<!-- Including the footer -->
		<?php include('footer.php'); ?>
	</body>	
</html>