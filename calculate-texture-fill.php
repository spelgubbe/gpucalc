<?php
/* Output normal webpage */
header('Content-Type: text/html; charset=UTF-8');
error_reporting(E_ALL); # temp
ini_set('display_errors', 1); # temp?>

<!doctype html>
<head>
	<title>GPU Stats - Calculate Texture Fillrate</title>
	<?php
	include('html-includes/default-stylesheets.php');
	?>
</head>
<body>
<div class="wrapper">
	<?php
	include('html-includes/default-navbar.php');
	?>
	Calculate Texture Fillrate of GPU:
	<form class="gpustats" action="" method='POST'>
			<input type="text" name="core_clock" placeholder="core clock" autocomplete="off">
			GPU Core clock<br>
			<input type="text" name="texture_mapping_units" placeholder="TMUs" autocomplete="off">
			Texture Mapping Units (TMUs)<br>
			<input type="radio" name="unit" value="MTexel/s">
			MTexel/s<br> <!-- kanske lösa detta med jQuery :after -->
			<input type="radio" name="unit" value="GTexel/s" checked>
			GTexel/s<br>
			<input type="radio" name="unit" value="TTexel/s">
			TTexel/s<br>
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