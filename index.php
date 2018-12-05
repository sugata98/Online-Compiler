<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Home</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/style.css">

	<script src="js/vendor/modernizr-2.8.3.min.js"></script>

</head>
<body>
	<div class="main">

		<div class="row">
			<div class="col-sm-12">
				<nav class="shadow navbar navbar-inverse navbar-fixed-top nbar">
					<div class="navbar-header">
						<a class="navbar-brand lspace" href="index.php">CodeJudge</a>
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse navbar-menubuilder">
						<ul class="nav navbar-nav">
							<li class="space"><a href="compiler.php"><i class="fa fa-code ispace"></i>Compiler</a></li>
							<li class="space"><a href="https://www.geeksforgeeks.org/category/competitive-programming/"><i class="fa fa-archive ispace"></i>Problem Archive</a></li>

						</ul>
					</div>
				</nav>
			</div>
		</div>


		<div class="row log">
			<div class="col-sm-10">
				<div class=""><h3 style="text-align:center;">Online Compiler</h3></div>
			</div>

			<div class="col-sm-1">

			</div>

			<div class="col-sm-1">

			</div>

		</div>




		<div class="row cspace">
			<div class="col-sm-10">
				<div class="form-group">
					<form action="compile.php" name="f2" method="POST">
						<label for="lang">Choose Language</label>

						<select class="form-control" name="language">
							<option value="c">C</option>
							<option value="cpp">C++</option>
							<!-- <option value="cpp11">C++11</option> -->
							<option value="java">Java</option>
							<!--<option value="python2.7">Python2</option>-->
							<!--<option value="python3.2">Python 3</option>-->


						</select><br><br>

						<div class ="textAreaColumn">
							<div>
								<label for="ta" align="center">Write Your Code</label>
								<textarea class="form-control" name="code" rows="13" cols="50"></textarea>
							</div>

							<div>
								<label for="in" align="center">Enter Your Input</label>
								<textarea class="form-control" name="input" rows="13" cols="50"></textarea>
							</div>
						</div>
						<br><br>


						<input type="submit" class="btn btn-success" value="Run Code"><br><br><br>


					</form>

				</div>
			</div>
		</div>
	</div>
	<div class="area">
		<div class="well foot">
			<div class="row area">
				<div class="col-sm-3">

				</div>

				<div class="col-sm-5">


					<div class="fm">

						<b>Beta Version-2018</b><br>
						<b>Developed By <a href="https://www.linkedin.com/in/sugata-roy-78b334136/">S</a>
							<a href="https://www.linkedin.com/in/nishant-kumar-374110158/">N</a>
							<a href="https://www.linkedin.com/in/sujeet-kumar-b67b90160/">S</a>
							<a href="https://www.linkedin.com/in/tarun-kuamr-b28aa0160/">T</a>
						</b>

					</div>
				</div>


				<div class="col-sm-4">
					<?php
					date_default_timezone_set("Asia/India");
					$t=date("H:i:s");
					echo"<b>Server Time:  $t</b>";

					?>
				</div>
			</div>
		</div>
	</div>
</body>
</html>


