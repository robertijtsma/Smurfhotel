<?php 
define('IN_INDEX', 1);

require_once 'global.php';

$core->handleCall($engine->secure($_GET['url']));

	$template->html->get($engine->secure($_GET['url']));

$template->outputTPL();
?>