<!--

author : prashant kumar kuntala
date   : April 29th, 2015

-->

<?php 
// create a database connection

define("DB_SERVER","localhost");
define("DB_USER","majorp");
define("DB_PASS","majorp");
define("DB_NAME","fablesdb");

$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

//testing the database connection occured.
if(mysqli_connect_errno()){
	die("database connection failed"
	.mysqli_connect_error()
	."(".mysqli_connect_errno().")");	
} 
?>
