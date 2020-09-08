<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'sewingprojectmanager';

//connection
$$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//query
$query = "SELECT * FROM brand";
$result_set = mysqli_query($connection, $query);
//return data

//release data
mysqli_free_result($result_set);
//close connection
mysqli_close($connection);
?>