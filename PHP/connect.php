<?php

	$host = 'localhost';
	$userBD = 'root';
	$userBDPassword = "";

	$bd = "bdbugtracker";

	$mysqli = new mysqli($host, $userBD, $userBDPassword, $bd);

	if (mysqli_connect_error()) {
    	die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
	}

	if(!$mysqli->set_charset("utf8")) {
    	printf("Error loading character set utf8: %s\n", $mysqli->error);
    	exit();
	}
?>