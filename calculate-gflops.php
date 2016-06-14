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
</body>
<!--<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	function updateResult(form){
		var outputdiv = $('#result');
		outputdiv.load('calc/gflops.php', form.serializeArray(), function(){
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
</html>