<?php
/*
Pluz ASE made by Ryan, With the help of "Grape ASE"
Twitter; @OtakuPluz
Original database config by, "Grapefruit"
Pluz ASE, Database Config (Please do not share this file with anyone, as it contain's your Database password.
If you get any issue's with Pluz ASE, please PM or Tweet me, Thanks.
*/


// Database config
$host = "localhost"; // Your database host, normaly localhost
$user = "root"; // Database username
$password = "GeneralMumble"; // Your database password
$database = "rev_phoenix"; // The name of the database on your server



mysql_connect($host, $user, $password) or die(mysql_error()); 
mysql_select_db($database) or die(mysql_error()); 

?>