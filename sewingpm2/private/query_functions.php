<?php

  function find_all_notions() {
    global $db;

    $sql = "SELECT * FROM notions"
    or die('Query to select all failed');
    $result = mysqli_query($db, $sql);
    if(!$result){
die('Database error: '.mysqli_error($connection));
    return $result;
  }}

  function find_all_locations() {
    global $db;

    $sql = "SELECT * FROM locations"
    or die('Query to select all failed');
    $result = mysqli_query($db, $sql);
    return $result;
  }
?>

