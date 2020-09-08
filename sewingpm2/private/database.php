<?php
 # require_once('db_credentials.php');
  function db_connect() {
   
$connection = mysqli_connect('localhost', 'root', '', 'sewingprojectmanager');
    if (!$connection) {
        die('Captian, we have failed');
}  
   # else echo ('connect success');
        return $connection;
  }

  #function db_disconnect($connection) {
#    if(isset($connection)) {
#      mysqli_close($connection);
 #   }
 # }

?>