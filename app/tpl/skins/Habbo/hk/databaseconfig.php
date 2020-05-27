<?php
// Database config
$host = "127.0.0.1"; // Your database host, normally localhost
$user = "root"; // Database username
$password = 'GDTGYR455t4tg54%^$^$frt'; // Your database password
$database = "poppy123"; // The name of the database on your server




mysql_connect($host, $user, $password) or die(mysql_error()); 
mysql_select_db($database) or die(mysql_error()); 

?>