<?php
$revCMS = 'rev';

$uber = 'uber';

$phxcf = 'phxcf';

session_start();
if($_SESSION['points']['id'])
{
	
}
else
{
if($_CONFIG['cms']['type'] == $revCMS)
{
	if($_SESSION['user']['username'])
	{
		$_SESSION['points']['username'] = $_SESSION['user']['username'];
		$_SESSION['points']['id'] = mysql_result(mysql_query("SELECT id FROM users WHERE username = '" . $_SESSION['user']['username'] . "' LIMIT 1"),0);
		$_SESSION['points']['rank'] = mysql_result(mysql_query("SELECT rank FROM users WHERE username = '" . $_SESSION['user']['username'] . "' LIMIT 1"),0);
		$_SESSION['points']['vip'] == mysql_result(mysql_query("SELECT vip FROM users WHERE username = '" . $_SESSION['user']['username'] . "' LIMIT 1"),0);
	}
	else
	{
		header("Location: ".$_CONFIG['cms']['url']."");
	}
}
elseif($_CONFIG['cms']['type'] == $uber)
{
	if($_SESSION['UBER_USER_N'])
	{
		$_SESSION['points']['username'] = $_SESSION['UBER_USER_N'];
		$_SESSION['points']['id'] = mysql_result(mysql_query("SELECT id FROM users WHERE username = '" . $_SESSION['UBER_USER_N'] . "' LIMIT 1"),0);
		$_SESSION['points']['rank'] = mysql_result(mysql_query("SELECT rank FROM users WHERE username = '" . $_SESSION['UBER_USER_N'] . "' LIMIT 1"),0);
		$_SESSION['points']['vip'] == mysql_result(mysql_query("SELECT vip FROM users WHERE username = '" . $_SESSION['UBER_USER_N'] . "' LIMIT 1"),0);
	}
	else
	{
		header("Location: ".$_CONFIG['cms']['url']."");
	}
}
else
{
	if($_SESSION['USERNAME'])
	{
		$_SESSION['points']['username'] = $_SESSION['USERNAME'];
		$_SESSION['points']['id'] = mysql_result(mysql_query("SELECT id FROM users WHERE username = '" . $_SESSION['USERNAME'] . "' LIMIT 1"),0);
		$_SESSION['points']['rank'] = mysql_result(mysql_query("SELECT rank FROM users WHERE username = '" . $_SESSION['USERNAME'] . "' LIMIT 1"),0);
		$_SESSION['points']['vip'] == mysql_result(mysql_query("SELECT vip FROM users WHERE username = '" . $_SESSION['USERNAME'] . "' LIMIT 1"),0);
	}
	else
	{
		header("Location: ".$_CONFIG['cms']['url']."");
	}
}

}
if(mysql_result(mysql_query("SELECT online FROM users WHERE username = '" . $_SESSION['points']['username'] . "' LIMIT 1"),0) == 1)
{
	header("Location: online.php");
}

?>