<?php

$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = 'GDTGYR455t4tg54%^$^$frt';
$dbname = "poppy123";

$db = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
if ($db->connect_errno)
{
    echo 'Error: ' . $db->connect_error;
    exit('Verbinding fout!');
}

$sql = $db->query("SELECT users_online FROM server_status");
$sqlF = $sql->fetch_assoc();


    echo $sqlF['users_online'];


?>