<?php
/* Output normal webpage */
header('Content-Type: text/html; charset=UTF-8');
error_reporting(E_ALL); # temp
ini_set('display_errors', 1); # temp?>

<!doctype html>
<head>
	<title>GPU Stats - Calculate Pixel Fillrate</title>
	<?php
	include('html-includes/default-stylesheets.php');
	?>
</head>
<body>
<div class="wrapper">
	<?php
	include('html-includes/default-navbar.php');
	?>
	Calculate pixel fillrate of GPU:
	<form class="gpustats" action="" method='POST'>
			<input type="text" name="core_clock" placeholder="core clock" autocomplete="off">
			GPU Core clock<br>
			<input type="text" name="raster_operators" placeholder="ROPs" autocomplete="off">
			Raster Operators (ROPs)<br>
			<input type="radio" name="unit" value="MPixel/s">
			MPixel/s<br> <!-- kanske lösa detta med jQuery :after -->
			<input type="radio" name="unit" value="GPixel/s" checked>
			GPixel/s<br>
			<input type="radio" name="unit" value="TPixel/s">
			TPixel/s<br>
			<input type="submit" value="Calc">
	</form>
	<div id="result">
	</div>
	<?php
	include('html-includes/default-footer.php');
	?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="scripts/updateResult.js"></script>
</body>
</html>