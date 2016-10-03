<?php
/* Output normal webpage */
header('Content-Type: text/html; charset=UTF-8');
error_reporting(E_ALL); # temp
ini_set('display_errors', 1); # temp
include('functions/general.php');
?>
<!doctype html>
<head>
	<title>GPU Stats - Calculate Pixel Fillrate</title>
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
<script>
$(document).ready(function(){
	function updateResult(form){
		var outputdiv = $('#result');
		outputdiv.load('calc/pfill.php', form.serializeArray(), function(){
			/* Function to run after loading data into element. Maybe not needed yet */
			//outputdiv.scrollTop(function(){ return this.scrollHeight}); // scroll to output
		});
	}
	$(document).on('submit', 'form.gpustats', function(e){
		e.preventDefault();
		updateResult($(this));
	});

});
</script>
</body>
</html>
<?php countView();?>