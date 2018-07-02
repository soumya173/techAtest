<?php
	include("connect.php");
?>
<?
$sql = "SELECT fname, lname, email, mobile FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo " " . $row["fname"]. " " . $row["lname"]. "<br>";
        echo "Email " . $row["email"]. "<br>"
        echo "Mobile " . $row["mobile"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Profile</title>

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
			include_once('connect.php');
			include('header.php');
		?>

		<div class="container-fluid site-body profile-body">
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<ul class="nav nav-tabs profile-tabs">
						<li class="active"><a data-toggle="tab" href="#recent_tests">Recent Tests</a></li>
						<li><a data-toggle="tab" href="#profile">Basic Profile</a></li>
					</ul>

					<div class="tab-content">
						<div id="recent_tests" class="tab-pane fade in active booking-container">
							<h3>RECENT TESTS</h3>
							<div class="container-fluid">
								<div class="row">
									<div class="col-sm-12">
										<div id="recent_test_graph"></div>
									</div>
								</div>
							</div>
						</div>
						<div id="profile" class="tab-pane fade">
							<h3>BASIC PROFILE</h3>
							<div class="container-fluid">
								<div class="row">
									<div class="col-sm-12"><h2 class="profile-name">FirstName <span>LastName</span></h2></div>
								</div>
								<div class="row">
									<div class="col-sm-3">Email :</div>
									<div class="col-em-9">UserEmail</div>
								</div>
								<div class="row">
									<div class="col-sm-3">Mobile :</div>
									<div class="col-em-9">UserMobile</div>
								</div>
								<div class="row">
									<div class="col-sm-3">Tag Owned :</div>
									<div class="col-em-9">UserTags</div>
								</div>
								<div class="row graph-container">
									<div class="col-sm-6">
										<div id="fail-pass-graph"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Including the footer -->
		<?php include('footer.php'); ?>
	</body>

	<script type="text/javascript">
		window.onload = function () {

			var test_option = {
				animationEnabled: true,
				theme: "light2",
				title:{
					text: "Fitness Graph"
				},
				axisX:{
					valueFormatString: "DD MMM"
				},
				axisY: {
					title: "Marks",
					suffix: "",
					minimum: 30
				},
				toolTip:{
					shared:true
				},
				legend:{
					cursor:"pointer",
					verticalAlign: "bottom",
					horizontalAlign: "left",
					dockInsidePlotArea: true,
					itemclick: toogleDataSeries
				},
				data: [{
					type: "line",
					showInLegend: true,
					name: "Marks Obtained",
					markerType: "square",
					xValueFormatString: "DD MMM, YYYY",
					color: "#F08080",
					yValueFormatString: "#,##0",
					dataPoints: [
					{ x: new Date(2017, 10, 1), y: 63 },
					{ x: new Date(2017, 10, 2), y: 69 },
					{ x: new Date(2017, 10, 3), y: 65 },
					{ x: new Date(2017, 10, 4), y: 70 },
					{ x: new Date(2017, 10, 5), y: 71 },
					{ x: new Date(2017, 10, 6), y: 65 },
					{ x: new Date(2017, 10, 7), y: 73 },
					{ x: new Date(2017, 10, 8), y: 96 },
					{ x: new Date(2017, 10, 9), y: 84 },
					{ x: new Date(2017, 10, 10), y: 85 },
					{ x: new Date(2017, 10, 11), y: 86 },
					{ x: new Date(2017, 10, 12), y: 94 },
					{ x: new Date(2017, 10, 13), y: 97 },
					{ x: new Date(2017, 10, 14), y: 86 },
					{ x: new Date(2017, 10, 15), y: 89 }
					]
				},
				{
					type: "line",
					showInLegend: true,
					name: "Avg Score",
					lineDashType: "dash",
					yValueFormatString: "#,##0",
					dataPoints: [
					{ x: new Date(2017, 10, 1), y: 60 },
					{ x: new Date(2017, 10, 2), y: 57 },
					{ x: new Date(2017, 10, 3), y: 51 },
					{ x: new Date(2017, 10, 4), y: 56 },
					{ x: new Date(2017, 10, 5), y: 54 },
					{ x: new Date(2017, 10, 6), y: 55 },
					{ x: new Date(2017, 10, 7), y: 54 },
					{ x: new Date(2017, 10, 8), y: 69 },
					{ x: new Date(2017, 10, 9), y: 65 },
					{ x: new Date(2017, 10, 10), y: 66 },
					{ x: new Date(2017, 10, 11), y: 63 },
					{ x: new Date(2017, 10, 12), y: 67 },
					{ x: new Date(2017, 10, 13), y: 66 },
					{ x: new Date(2017, 10, 14), y: 56 },
					{ x: new Date(2017, 10, 15), y: 64 }
					]
				}]
			};
			$("#recent_test_graph").CanvasJSChart(test_option);

			function toogleDataSeries(e){
				if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
					e.dataSeries.visible = false;
				} else{
					e.dataSeries.visible = true;
				}
				e.chart.render();
			}

			CanvasJS.addColorSet("greenShades", ["#cc2d21", "#47ba40"]);
			var pass_fail_options = {
				animationEnabled: true,
				title: {
					text: "PASS vs FAIL"
				},
				colorSet: "greenShades",
				data: [{
					type: "doughnut",
					innerRadius: "40%",
					showInLegend: true,
					legendText: "{label}",
					indexLabel: "{label}: #percent%",
					dataPoints: [
						{ label: "Failed", y: 20 },
						{ label: "Passed", y: 80 },
					]
				}]
			};
			$("#fail-pass-graph").CanvasJSChart(pass_fail_options);

		}
	</script>
</html>