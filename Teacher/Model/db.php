<?php

	$dbuser = 'root';
	$dbpass = '11010001';
	$host 	= 'localhost';
	$dbname	= 'school_management_system';


	function getConnection(){

		global $dbname, $dbpass, $dbuser, $host;
		$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);
		return $conn;
	}

?>