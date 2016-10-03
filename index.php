<?php
/* Output normal webpage */
header('Content-Type: text/html; charset=UTF-8');
error_reporting(E_ALL); # temp
ini_set('display_errors', 1); # temp
include('functions/general.php');
?>
<!doctype html>
<head>
	<title>GPU Stats - Calculate GFLOPS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php
	include('html-includes/default-stylesheets.php');
	?>
</head>
<body>
<div class="container">
	<?php
	include('html-includes/default-navbar.php');
	include('html-includes/content/content_'.basename($_SERVER['PHP_SELF']));
	?>
</div>
	<?php
	include('html-includes/default-footer.php');
	?>
<?php
include('scripts/default-scripts.php');
?>
</body>
</html>
<?php countView();?>