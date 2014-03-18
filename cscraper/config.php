<?php
	//config file for numerous settings
	$config = array (
		//time-zone settings - referance = http://www.php.net/manual/en/timezones.php
		'timezone' => 'Asia/Karachi',
		
		//Page Content Type 
		'content-type' => "Content-Type: text/html; charset=utf-8",

		//PHP error reporting
		'error-reporting' => E_ERROR | E_WARNING | E_PARSE,

		//time limit
		'time-limit' => 0,

		//memory limit 
		'memory-limit' => '-1',

		//Grabage Collector
		'garbage-collector' => true, 
	);

?>