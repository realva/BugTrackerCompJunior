<?php

$host = "localhost";
$userBD = "";
$userBDPassword = "";

$bd = "test";

$mysqli = new mysqli($host, $userBD, $userBDPassword, $bd);

if (mysqli_connect_error()) {
    die('Connect Error (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
}

?>