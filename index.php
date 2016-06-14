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
	<?php
	include('html-includes/default-navbar.php');
	?>
	<div class="container">
		<h1>GPU Stats calculator</h1>
	</div>
	<?php
	include('html-includes/default-footer.php');
	?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	// nothingness
});
</script>
</html>