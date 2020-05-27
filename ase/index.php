<?php 
define('IN_INDEX', 1);
require_once 'global.php';

$core->handleCallHK($_GET['url']);

$template->write('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">');

$template->write('<html xmlns="https://www.w3.org/1999/xhtml">');

	$template->write('<head>');
	
		$template->write('<title>');
		
			$template->write('{hotelName} - ArticleHK');
				
		$template->write('</title>');
		
			$template->write('<link rel="shortcut icon" href="/app/tpl/skins/{skin}/favicon/favicon.ico" type="image/vnd.microsoft.icon"/>');
		
		$template->css->getHK();
		
		$template->js->getHK();
		
	$template->write('</head>');
	
	$template->write('<body>');
		
		$template->html->getHK($engine->secure($_GET['url']));
		
	$template->write('</body>');
	
$template->write('</html>');

$template->outputTPL();

?>