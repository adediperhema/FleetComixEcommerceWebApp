<?php 
define('DB_HOST', 'us-cdbr-east-02.cleardb.com'); 
define('DB_NAME', 'heroku_e3b02fd7a572122'); 
define('DB_USER','bd5d675724d4b5'); 
define('DB_PASSWORD','85ef41db'); 

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()); 
?>