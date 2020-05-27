<?php
$hotel = 'http://habbo.com/';


$url = $hotel.'/avatar?'.http_build_query($_GET);
header('Content-Type: image/png');
exit(file_get_contents($url));
?>