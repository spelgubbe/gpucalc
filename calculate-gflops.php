<?php
/* Output normal webpage */
header('Content-Type: text/html; charset=UTF-8');
error_reporting(E_ALL); # temp
ini_set('display_errors', 1); # temp?>

<!doctype html>
<head>
	<title>GPU Stats - Calculate GFLOPS</title>
	<?php
	include('html-includes/default-stylesheets.php');
	?>
</head>
<body>
<div class="wrapper">
	<?php
	include('html-includes/default-navbar.php');
	?>
	Calculate GPU single precision floating point performance:
	<form class="gpustats" action="" method='POST'>
			<input type="text" name="core_clock" placeholder="core clock" autocomplete="off">
			GPU Core clock<br>
			<input type="text" name="shaders" placeholder="shaders" autocomplete="off">
			Shaders (# of CUDA/stream processors)<br>
			<input type="text" name="actions_per_clock" value="2" autocomplete="off">
			Instructions per Clock (Default is 2)<br>
			<input type="radio" name="unit" value="MFLOPS">
			MFLOPS<br> <!-- kanske lösa detta med jQuery :after -->
			<input type="radio" name="unit" value="GFLOPS" checked>
			GFLOPS<br>
			<input type="radio" name="unit" value="TFLOPS">
			TFLOPS<br>
			<input type="submit" value="Calc">
	</form>
	<div id="result">
	</div>
	<?php
	include('html-includes/default-footer.php');
	?>
</div>
<?php
include('scripts/default-scripts.php');
?>
<script src="scripts/updateResult.js"></script>
</body>
</html>