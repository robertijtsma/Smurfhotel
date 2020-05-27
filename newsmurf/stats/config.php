<?php
$host = "localhost";
$username = "root";
$password = "Chrism1995";
$dbname = "Hotel";

$connect = mysql_connect($host, $username, $password) or die("Could not connect to server, error: ".mysql_error());
$db = mysql_select_db($dbname, $connect) or die("Could not connect to database, error: ".mysql_error());

?>
