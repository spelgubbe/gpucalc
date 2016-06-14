<?php
/* Output normal webpage */
header('Content-Type: text/html; charset=UTF-8');
#error_reporting(E_ALL); # temp
#ini_set('display_errors', 1); # temp?>

<!doctype html>
<head>
	<title>GPU Stats - Calculate GFLOPS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">-->
</head>
<body>
<div class="wrapper">
	<nav class="navbar">
		<ul>
			<li><a href="">Home</a></li>
			<li><a href="calculate-gflops.php">Calculate GFLOPS</a></li>
			<li><a href="calculate-pixel-fill.php">Calculate Pixel Fillrate</a></li>
			<li><a href="calculate-texture-fill.php">Calculate Texture Fillrate</a></li>
			<li><a href="compare-cards.php">Compare</a></li>
			<li><a href="#">About</a></li>
		</ul>
	</nav>
	<div class="container">
		<h1>GPU Stats calculator</h1>
	</div>
	<div class="container">
		<div class="content has-text-centered">
			<p>
				<strong>Made</strong> by <a href="http://jakobkratz.com">spelgubbe</a> &amp; <a href="http://johannesekman.com">mby</a>
			</p>
			<p>
				<a class="icon" href="https://github.com/spelgubbe">
					<i class="fa fa-github"></i>
				</a>
			</p>
		</div>
	</div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</body>
</html>