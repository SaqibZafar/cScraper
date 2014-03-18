<?php
	//include database config array
	include_once "connect.php";

	//configuration file
	include_once "config.php";
	
	//initializing file
	include_once "init.php";
	

	/**
	* cScraper class
	* @author Saqib Zafar
	* @since 18-Mar-14
	*/
	class CScaper
	{
		//database connection variable
		private $dbh;

		//Log file for errors
		private $logFile = 'errors.log';

		public function __construct()
		{
			GLOBAL $dbconfig;
			try {
			  	//MS SQL Server and Sybase with PDO_DBLIB
			  	//$DBH = new PDO("mssql:host=$host;dbname=$dbname, $user, $pass");
			 	//$DBH = new PDO("sybase:host=$host;dbname=$dbname, $user, $pass");
			 
			  	//MySQL with PDO_MYSQL
			  	$this->dbh = new PDO("mysql:host=" . $dbconfig['host'] . ";" .
			  					"dbname=" . $dbconfig['dbname'], $dbconfig['username'], $dbconfig['password']);
			 	$this->dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			  	
			  	//SQLite Database
			  	//$DBH = new PDO("sqlite:my/database/path/database.db");
			}
			catch(PDOException $e) {
			    echo "Error: Unable to connect to the Database using given credentials";
    			file_put_contents($this->logFile, date("F j, Y, g:i a") . " : " . $e->getMessage(), FILE_APPEND);
			}
		}

		public function __destruct()
		{
			//close the connection
			$this->dbh = null;
		}


	}
?>