<?php 
  ob_start(); // output buffering is turned on

//assign file path to php constants
//__FILE__ returns the current path to this file
//dirname() returns the path to the parent directory
//define("PRIVATE_PATH", dirname(__FILE__));
//define("PROJECT_PATH", dirname(PRIVATE_PATH));
//define("PUBLIC_PATH", PROJECT_PATH . 'sewingpm3');
//define("SHARED_PATH", PRIVATE_PATH . 'includes');

//assign the root URL to a php constant
// do not need to include the domain
//use same document root as webserver
//can set hardcoded value:
//define("WWW_ROOT", '/localhost/allprojects/sewingpm3');
//define("WWW_ROOT", '');
//can dynamically find everything in URL up to "/sewingpm3"
//$public_end = strpos($_SERVER['SCRIPT_NAME'], 'sewingpm3') + 7;
//$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
//define("WWW_ROOT", $doc_root);

require_once('functions.php');
//require_once('database.php');
//require_once('query_functions.php');

 // $db = db_connect();

?>
