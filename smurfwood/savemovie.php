<?php
require("config.php");

$data = $_POST["data"];

mysql_connect($mysql_host, $mysql_user, $mysql_password) or die(mysql_error());
mysql_select_db($mysql_database) or die(mysql_error());

if (isset($data))
{
mysql_query("INSERT INTO `movies` (`data`) VALUES ('" . $data . "')");
$id = mysql_insert_id();
echo($id);
}
else
{
header("HTTP/1.0 500 Internal Server Error");
}
mysql_close();
?>