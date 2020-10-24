<?php
	$servername = 'database';
	$username   = 'myuser';
	$password   = 'secret';
	$dbname     = 'mydb';
	
	$connection = new mysqli($servername, $username, $password, $dbname);
	global $connection;
	
    $connection->set_charset("utf8");
?>