<?php require_once('../private/initialize.php'); ?>
<?php
include(SHARED_PATH . '/head.php'); 

 $page_title = 'Notions';
 
 ?>
 <?php

  function find_all_notions() {
    global $db;
    global $sql;
    global $RESULT;

    $sql = "SELECT * FROM notions"

    or die('Query to select all failed');

        $RESULT = mysqli_query($db, $sql);

    if(!$RESULT){

    die('Database error: '.mysqli_error($connection));
    return $RESULT;
  }}

?>
 

 <?php echo $page_title; ?></br>
                
    <?php $notion_set = find_all_notions();
    $RESULT = mysqli_query($db, $sql);

while($notion = mysqli_fetch_assoc($RESULT)); 

 echo h($notion['nid']);
 
 echo ('everything is fine'); 
 
 ?>



//<?php 
//while ($result -> msqli_fetch_assoc ($notion_set)) {                
//         echo h($notion["id"]); 
//           echo h($notion["type"]); 
 //            }; ?> 