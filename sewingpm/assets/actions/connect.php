<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "sewingprojectmanager";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	die("Unable to connect to MySQL: " . mysqli_error());
}