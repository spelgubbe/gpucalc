<?php
/* Only to run if post data is present */
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	/* Functions */
	include('../functions/calculations.php');

	/* What unit to use */
	$unitDivs = array(
		'MPixel/s' => 1,
		'GPixel/s' => 1000,
		'TPixel/s' => 1000000
	);

	/* Required post data */
	$postKeys = array(
		'core_clock',
		'raster_operators',
		'unit'
	);

	/* Check if post data contains only the specified keys, where none are empty */
	if(!array_diff($postKeys, array_keys($_POST)) && array_search('', $_POST) === false){

		/* Check if unit is one of our "permitted" units */
		if(!in_array($unit = $_POST['unit'], array_keys($unitDivs))) exit();

		/* If not False, a valid result was calculated */
		$pixelFillRate = calcPFill($_POST[$postKeys[0]], $_POST[$postKeys[1]]);

		/* Echo result unless it's false, else error message */
		echo $pixelFillRate ? formatOutput($pixelFillRate/$unitDivs[$unit], 3) . ' ' . $unit : 'Amount of Raster Operators (ROPs) needs to be an integer.';
	} else{

		/* If any fields are empty, error message */
		echo 'All fields were not filled.';
	}
	
} else{

	/* Exit if no post data is present */
	exit();
}
?>