<?php
function filter($var)
{
	return mysql_real_escape_string(stripslashes(htmlspecialchars($var)));
}

if(!defined('IN_INDEX')) { die('Sorry, you cannot access this file.'); }
if(isset($_SERVER['HTTP_CF_CONNECTING_IP'])) { $_SERVER['REMOTE_ADDR'] = $_SERVER['HTTP_CF_CONNECTING_IP']; }
error_reporting(E_ALL ^ E_NOTICE);

define('M', 'manage/');
define('I', 'inc/');
define('C', 'cron/');

require_once M . 'config.php';
require_once I . 'points.php';
require_once I . 'cron.php';

$points = new Points();
$cron = new Cron();

$cron->Execute();


if($_CONFIG['cms']['maintenance'])
{
	header("Location: maintenance.php");
}
?>