<?php
function file_active($pagename){
	$active = basename($_SERVER['PHP_SELF'], ".php");
	if ($active === $pagename) echo "active";
}
$filename = "kz/counter.kz";
$ip_filename = "kz/ip.kz";
function countView(){
	$ip = $_SERVER['REMOTE_ADDR'];
	global $filename, $ip_filename;
	//0 om filen inte finns
	if(!in_array($ip, file($ip_filename, FILE_IGNORE_NEW_LINES))) {
		$current = (file_exists($filename)) ? file_get_contents($filename) : 0;
		file_put_contents($ip_filename, $ip."\n", FILE_APPEND);
		file_put_contents($filename, ++$current);
	}
}
?>