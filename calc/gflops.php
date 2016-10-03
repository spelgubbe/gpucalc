<?php
/* TODO: javascript query on unit change, so that a new request isn't needed just to change unit. */
/* Only to run if post data is present */
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	/* Functions */
	include('../functions/calculations.php');

	/* What unit to use */
	$unitDivs = array(
		'MFLOPS' => 1,
		'GFLOPS' => 1000,
		'TFLOPS' => 1000000
	);

	/* Required post data */
	$postKeys = array(
		'core_clock',
		'shaders',
		'actions_per_clock',
		'unit'
	);

	/* Check if post data contains only the specified keys, where none are empty */
	if(!array_diff($postKeys, array_keys($_POST)) && array_search('', $_POST) === false){

		/* Check if unit is one of our "permitted" units */
		if(!in_array($unit = $_POST['unit'], array_keys($unitDivs))) exit();

		/* If not False, a valid result was calculated */
		$spPerformance = calcSPPerf($_POST[$postKeys[0]], $_POST[$postKeys[1]], $_POST[$postKeys[2]]);

		/* Echo result unless it's false, else error message */
		echo $spPerformance ? formatOutput($spPerformance/$unitDivs[$unit], 3) . ' ' . $unit : 'The amount of shaders has to be an integer.';
	} else{

		/* If any fields are empty, error message */
		echo 'All fields were not filled.';
	}
	
} else{

	/* Exit if no post data is present */
	exit();
}
?>