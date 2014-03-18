<?php
	//init settings
	GLOBAL $config;

	//sets degualt timezone for error file and other stuff :)
	date_default_timezone_set($config['timezone']);

	//content type 
	header($config['content-type']);
	
	//enable all errors
	error_reporting($config['error-reporting']);
	
	//remove time limit
	set_time_limit($config['time-limit']);
	
	//remove memory limit
	ini_set('memory_limit', $config['memory-limit']);

	//Garbage Collector
	if($config['garbage-collector'])
		gc_enable(); 

?>