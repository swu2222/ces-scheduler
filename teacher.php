<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Teacher</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- Le styles -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
		<style>
		body {
			padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
		}
		</style>
		<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="bootstrap/js/html5shiv.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="brand" href="#">CES Scheduler</a>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>
		<div class="container">
			<h1>Teacher</h1>
			
			<div class="row show-grid">
				<form id="teacherform" action="/ces-scheduler/template/template-gen.php" method="post"> 
					<fieldset>
						<legend>Daphne</legend>
						<label class="span2" for="FirstName">First Name</label>
						<input type="text" name="FirstName" /> 
						<input type="email" /> 
						<div class="form-actions">
						<button type="submit" class="btn" id="submitbutton">Save</button>
						</div>
					</fieldset>
				</form>
			</div>
			<div class="row show-grid">
				<div class="span6">
					<table class="table">
						<caption>Fees</caption>
						<thead>
							<tr>
								<th>Class</th>
								<th>Fee per hour</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Trumpet Class</td>
								<td>400NT</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="span6">
					<table class="table">
						<caption>Fees</caption>
						<thead>
							<tr>
								<th>Class</th>
								<th>Fee per hour</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Trumpet Class</td>
								<td>400NT</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			
		</div> <!-- /container -->
		<script src="js/jquery.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
	</body>
</html>