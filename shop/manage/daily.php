<?php
define('IN_INDEX', 1);
include '../global.php';
if($_CONFIG['daily']['rewards'])
{

		if(in_array($_SESSION['points']['id'], $points->getDailyids()))
		{
			echo 'You\'ve already claimed your daily reward today!';
			die;
		}
		else
		{
			$id = mysql_result(mysql_query("SELECT user_id FROM points_daily"),0) . ', ' . $_SESSION['points']['id'];
			mysql_query("UPDATE points_daily SET user_id = '".$id."'");
			mysql_query("UPDATE users SET vip_points = vip_points + '".$_CONFIG['points']['daily']."' WHERE id = '".$_SESSION['points']['id']."'");
			unset($id);
			echo 'Daily Reward Claimed!';
	}
}
else
{
	echo 'Daily rewards disabled!';
}



?>