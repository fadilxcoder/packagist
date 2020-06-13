<?php
	$servername = 'localhost';
	$username   = 'root';
	$password   = '';
	$dbname     = 'experimental_db';
	
	$connection = new mysqli($servername, $username, $password, $dbname);
	global $connection;
	
    $connection->set_charset("utf8");
?>