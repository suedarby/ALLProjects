<?php
require_once('../../../private/initialize.php'); 

if(is_post_request()) {

  // Handle form values sent by new.php

  $id = $_POST['id'] ?? '';
  $type = $_POST['type'] ?? '';
  $description = $_POST['description'] ?? '';
  $quantity = $_POST['quantity'] ?? '';
  $size = $_POST['size'] ?? '';

    echo "Form parameters<br />";
    echo "ID: " . $id . "<br />";
    echo "Type: " . $type . "<br />";
    echo "Description: " . $description . "<br />";
    echo "Qty: " . $quantity . "<br />";
    echo "Size: " . $size . "<br />";

} else {
  redirect_to(url_for('./projects/notions/index.php'));
}

?>
