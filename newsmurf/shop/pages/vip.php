<?php
if(!defined('IN_INDEX')) { die('Sorry, you cannot access this file.'); }
$query_vip = mysql_query("SELECT * FROM points_vip");
		if(@mysql_num_rows($query_vip) > 0)
		{
		while($vip = mysql_fetch_array($query_vip))
		{
			if($_SESSION['points']['rank'] >= $_CONFIG['admin']['add'])
			{
				$remove = '[<b id="vip_'.$vip["id"].'" onclick="submitRem(\'vip\',\''.$vip["id"].'\')" class="remove">Remove</b>]';
			}
			else
			{
				$remove = '';
			}
			$time = $vip['time'];
			if($time > 0)
			{
				$time = intval($time/60/60/24);
				$days = $time.' Day\'s of VIP';
			}
			else
			{
				$days = 'PERM VIP will';
			}
			 $time = intval($time/60/60/24);
			echo '<form name="UserSettings" id="vip_form_'.$vip["id"].'">
                '.$days.' cost '.number_format($vip["points"]).' points '.$remove.'
            <button type="button" onclick="buy(\''.$vip["id"].'\', \'vip\')" class="button" name="vip" value="vip">Buy VIP</button>
                </form><br />';
		}
		unset($vip);
		}
		else
		{
			echo 'Sorry there is no VIP to buy check back later!';
		}
		unset($query_vip);
?>