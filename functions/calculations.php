<?php
/* 	Single Precision Floating Point Performance
	Returns Float or False
*/
function calcSPPerf($coreClock, $shaders, $actionsPerClock=2){
	if(is_numeric($shaders.$coreClock)){
		return $coreClock * $shaders * $actionsPerClock;
	} else{
		return false;
	}
}

/* 	Double Precision Floating Point Performance
	Returns Float or False
*/
function calcDPPerf($coreClock, $shaders, $actionsPerClock=0.25){
	if(is_numeric($shaders.$coreClock)){
		return $coreClock * $shaders * $actionsPerClock;
	} else{
		return false;
	}
}

/* 	Pixel Fillrate
	Returns Float or False
*/
function calcPFill($coreClock, $rasterOps){
	if(is_numeric($rasterOps)){
		return $coreClock * $rasterOps;
	} else{
		return false;
	}
}

/* 	Texture Fillrate
	Returns Float or False
*/
function calcTFill($coreClock, $textureUnits){
	if(is_numeric($textureUnits)){
		return $coreClock * $textureUnits;
	} else{
		return false;
	}
}

/* 	Format number and remove redundant zeroes
*/
function formatOutput($string, $decimals){
	return sprintf('%0.'.$decimals.'f', $string)+0;
}
?>