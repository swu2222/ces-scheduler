<?php
	include_once("lang/lang-en.php");
?>
<!DOCTYPE html>
<html lang="<?php echo $lang['HTML_LANG'];?>">
	<head>
		<meta charset="utf-8">
		<title>Teacher Edit</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Le styles -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<style>
		body {
			padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
		}
		</style>
		<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
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
							<li><a href="index.php">Home</a></li>
							<li><a href="studentlist.php">Student</a></li>
							<li><a href="teacherlist.php">Teacher</a></li>
							<li><a href="checkin.php">Check-In</a></li>
							<li class="dropdown">
								<a href="#" id="dLabel" class="dropdown-toggle" role="button" data-toggle="dropdown">
									Report
									<b class="caret"></b>
								</a>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
									<li role="presentation"><a href="finance.php">Finance Report</a></li>
									<li role="presentation"><a href="bookkeep.php">Monthly Bookkeeping</a></li>
								</ul>
							</li>
						</ul>
						<ul class="nav pull-right">
							<li><a href="#">Settings</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</div>
		</div>
		<div class="container"> <!-- container -->
			
			<h1>Teacher <small>Daphne</small></h1>
			<div class="row">
				<div class="span12">
					<ul class="nav nav-tabs" id="myTab">
						<li class="active"><a href="#myTab1" data-toggle="tab">Personal</a></li>
						<li><a href="#myTab2" data-toggle="tab">Contact</a></li>
						<li><a href="#myTab3" data-toggle="tab">Fee</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane active" id="myTab1">
							<form id="teacherform" action="" method="post">
								<label for="name">Name</label>
								<input type="text" value="Daphne">
								<label>Education</label>
								<textarea rows="4" class="span8">嘽 駍駔鳿 妎岓岕 疶砳, 蝺 箛箙舕 籿紁羑 韰頯餩 鰩鷎 圢帄氕 煘煓瑐 熩熝犚 躎轛 壿 藚藦藞 蜦賕踃 豅鑢鑗 垌壴 蒛 豥 湴涬 蛶觢豥 瀁瀎瀊 溹溦滜, 筡絼綒 鳻嶬幧 獫瘯皻 魦魵 滆 虰豖阹 忷扴汥 慛慖 滈, 巠帎 鳱 偢偣唲 秎穾籺 沎牣 胾臷菨 樛槷殦 姌弣抶 塝, 嘽 楋歅 莃荶衒 蛚袲褁 鈁陾靰
								</textarea>
								<label>Work History</label>
								<textarea rows="4" class="span8">嘽 駍駔鳿 妎岓岕 疶砳, 蝺 箛箙舕 籿紁羑 韰頯餩 鰩鷎 圢帄氕 煘煓瑐 熩熝犚 躎轛 壿 藚藦藞 蜦賕踃 豅鑢鑗 垌壴 蒛 豥 湴涬 蛶觢豥 瀁瀎瀊 溹溦滜, 筡絼綒 鳻嶬幧 獫瘯皻 魦魵 滆 虰豖阹 忷扴汥 慛慖 滈, 巠帎 鳱 偢偣唲 秎穾籺 沎牣 胾臷菨 樛槷殦 姌弣抶 塝, 嘽 楋歅 莃荶衒 蛚袲褁 鈁陾靰
								</textarea>
								<label class="checkbox">
									<input type="checkbox"> Check me out
								</label>
								<div>
								<button type="submit" class="btn btn-primary">Save</button>
								</div>
							</form>
						</div>
						<div class="tab-pane" id="myTab2">
							<div>
								<button id="b1" onClick="addContact()" class="btn btn-primary" type="button">+</button>
							</div>
							<table class="table" id="contact">
								<thead>
									<tr>
										<th>relationship</th>
										<th>method</th>
										<th>Value</th>
										<th style="width:36px;"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<select class="width:140px;">
												<option>self</option>
												<option>mom</option>
												<option>dad</option>
												<option>friend</option>
											</select>
										</td>
										<td>
											<select class="width:140px;">
												<option>home phone</option>
												<option>cell phone</option>
												<option>email</option>
												<option>address</option>
											</select>
										</td>
										<td>
											<input type="text" value="0000-000-000">
										</td>
										<td>
											<a href="#" onClick="removeFormField(this)"><i class="icon-remove"></i></a>
										</td>
									</tr>
									<tr>
										<td>
											<select class="width:140px;">
												<option>friend</option>
												<option>mom</option>
												<option>self</option>
												<option>dad</option>
											</select>
										</td>
										<td>
											<select class="width:140px;">
												<option>cell phone</option>
												<option>home phone</option>
												<option>email</option>
												<option>address</option>
											</select>
										</td>
										<td>
											<input type="text" value="0936-111-111">
										</td>
										<td>
											<a href="#" onClick="removeFormField(this)"><i class="icon-remove"></i></a>
										</td>
									</tr>
									<tr>
										<td>
											<select class="width:140px;">
												<option>self</option>
												<option>friend</option>
												<option>mom</option>
												<option>dad</option>
											</select>
										</td>
										<td>
											<select class="width:140px;">
												<option>address</option>
												<option>cell phone</option>
												<option>home phone</option>
												<option>email</option>
											</select>
										</td>
										<td>
											<input type="text" value="address">
										</td>
										<td>
											<a href="#" onClick="removeFormField(this)"><i class="icon-remove"></i></a>
										</td>
									</tr>
									<tr>
										<td>
											<select class="width:140px;">
												<option>friend</option>
												<option>mom</option>
												<option>self</option>
												<option>dad</option>
											</select>
										</td>
										<td>
											<select class="width:140px;">
												<option>cell phone</option>
												<option>home phone</option>
												<option>email</option>
												<option>address</option>
											</select>
										</td>
										<td>
											<input type="text" value="">
										</td>
										<td>
											<a href="#" onClick="removeFormField(this)"><i class="icon-remove"></i></a>
										</td>
									</tr>
									<tr>
										<td>
											<select class="width:140px;">
												<option>self</option>
												<option>friend</option>
												<option>mom</option>
												<option>dad</option>
											</select>
										</td>
										<td>
											<select class="width:140px;">
												<option>address</option>
												<option>cell phone</option>
												<option>home phone</option>
												<option>email</option>
											</select>
										</td>
										<td>
											<input type="text" value="">
										</td>
										<td>
											<a href="#" onClick="removeFormField(this)"><i class="icon-remove"></i></a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="tab-pane" id="myTab3">
							<div>
								<button id="b1" onClick="addFee()" class="btn btn-primary" type="button">+</button>
							</div>
							<table class="table" id="fee">
								<thead>
									<tr>
										<th>Class</th>
										<th>Fee per hour</th>
										<th style="width:36px;"></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<select class="width:140px;">
												<option>private Lession</option>
												<option>group lession</option>
												<option>special</option>
											</select>
										</td>
										<td>
											<input type="text" value="">
										</td>
										<td>
											<a href="#" onClick="removeFormField(this)"><i class="icon-remove"></i></a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
	
		</div> <!-- /container -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script>
					function addContact() {
				var newIn = '<tr><td><select class="width:140px;"><option></option><option>friend</option><option>mom</option><option>self</option><option>dad</option></select></td><td><select class="width:140px;"><option></option><option>cell phone</option><option>home phone</option><option>email</option><option>address</option></select></td><td><input type="text" value=""></td><td><a href="#" onClick="removeFormField(this)"><i class="icon-remove"></i></a></td></tr>';
				$("#contact tbody").prepend(newIn);
			}
			function addFee() {
				var newIn = '<tr><td><select class="width:140px;"><option>private Lession</option><option>group lession</option><option>special</option></select></td><td><input type="text" value=""></td><td><a href="#" onClick="removeFormField(this)"><i class="icon-remove"></i></a></td></tr>';
				$("#fee tbody").prepend(newIn);
			}
			function removeFormField(e) {
				$(e).parent().parent().remove();
			}

	</script>
	</body>
</html>
