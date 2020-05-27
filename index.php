<?php 

include ("AntiDDOS/anti_ddos/start.php"); //write this at the top of your PHP application and all is done!!!

define('IN_INDEX', 1);

require_once 'global.php';

$core->handleCall($engine->secure($_GET['url']));

	$template->html->get($engine->secure($_GET['url']));

$template->outputTPL();
?>