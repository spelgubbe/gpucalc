<?php
/* 	One webpage solution for GPU capability calculations
	
	Positive: Everything in the same file, easy to edit, less disk usage

	Negative: Hard to cover all functions on one page, sometimes redundant disk usage

*/


###	Functions ###

/* 	Single Precision Floating Point Performance
	Returns Integer or False
*/
function calcSPPerf($coreClock, $shaders, $actionsPerClock=2){
	if(is_numeric($shaders.$coreClock)){
		return $coreClock * $shaders * $actionsPerClock;
	} else{
		return false;
	}
}

/* 	Double Precision Floating Point Performance
	Returns Integer or False
*/
function calcDPPerf($coreClock, $shaders, $actionsPerClock=0.25){
	if(is_numeric($shaders.$coreClock)){
		return $coreClock * $shaders * $actionsPerClock;
	} else{
		return false;
	}
}

/* 	Format number and remove redundant zeroes
*/
function formatOutput($string, $decimals){
	return sprintf('%0.'.$decimals.'f', $string)+0;
}


###	End of functions ###

/* What unit to use */
$unitDivs = array(
	'MFLOPS' => 1,
	'GFLOPS' => 1000,
	'TFLOPS' => 1000000
);

$postKeys = array(
	'core_clock',
	'shaders',
	'actions_per_clock',
	'unit'
);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	/* Output result of calculation */
	if(!array_diff($postKeys, array_keys($_POST)) && array_search('', $_POST) === false){ // check if post keys are set
		$unit = $_POST['unit'];
		if(!in_array($unit, array_keys($unitDivs))) exit();

		$spPerformance = calcSPPerf($_POST['core_clock'], $_POST['shaders'], $_POST['actions_per_clock']);

		echo $spPerformance ? formatOutput($spPerformance/$unitDivs[$unit], 3) . ' ' . $unit : 'The input data was invalid.';
	} else{
		echo 'Oops... All fields were not filled.';
	}

} else{
	/* Output normal webpage */
	header('Content-Type: text/html; charset=UTF-8');
	error_reporting(E_ALL); # temp
	ini_set('display_errors', 1); # temp?>

<!doctype html>
<head>
	<title>GPU Stats calculator</title>
</head>
<body>
	Calculate single precision floating point performance:
	<form class="gpustats" action="" method='POST'>
			<input type="text" name="core_clock" placeholder="core clock"><br>
			<input type="text" name="shaders" placeholder="shaders"><br>
			<input type="text" name="actions_per_clock" value="2"><br>
			<input type="radio" name="unit" value="MFLOPS">
			MFLOPS<br>
			<input type="radio" name="unit" value="GFLOPS" checked>
			GFLOPS<br>
			<input type="radio" name="unit" value="TFLOPS">
			TFLOPS<br>
			<input type="submit" value="Calc">
	</form>
	<div id="result">
	</div>
</body>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	function updateResult(form){
		var outputdiv = $('#result');
		outputdiv.load('index.php', form.serializeArray(), function(){
			outputdiv.scrollTop(function(){ return this.scrollHeight});
		});
	}
	$(document).on('submit', 'form.gpustats', function(e){
		e.preventDefault();
		updateResult($(this));
		return false; // behövs?
	})

});
</script>
</html>

<?php
}
?>