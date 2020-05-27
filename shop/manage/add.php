<?php
define('IN_INDEX', 1);
include '../global.php';
if($_SESSION['points']['rank'] >= $_CONFIG['admin']['add'])
{
	switch($_POST['type'])
	{
		case 'badge':
		$badgecode = filter($_POST['code']);
		$badgecost = filter($_POST['cost']);
			if(!empty($_POST['code']) && is_numeric($_POST['cost']))
			{
				mysql_query("INSERT INTO points_badge (badge_code, badge_cost) VALUES('".$badgecode."', '".$badgecost."')");
				echo '1';
			}
		unset($badgecode, $badgecost);
		break;
		
		case 'coins':
		$coins = filter($_POST['coins']);
		$cost = filter($_POST['cost']);
			if(is_numeric($_POST['coins']) && is_numeric($_POST['cost']))
			{
				mysql_query("INSERT INTO points_credits (credits, points) VALUES('".$coins."', '".$cost."')");
				echo '1';
			}
		unset($coins, $cost);
		break;
		
		case 'pixels':
		$pixels = filter($_POST['pixels']);
		$cost = filter($_POST['cost']);
			if(is_numeric($_POST['pixels']) && is_numeric($_POST['cost']))
			{
				mysql_query("INSERT INTO points_pixels (points, pixels) VALUES('".$cost."', '".$pixels."')");
			}
		unset($cost, $pixels);
		break;
		
		case 'cmd':
		$cmd = filter($_POST['cmd']);
		$cost = filter($_POST['cost']);
		$name = filter($_POST['name']);
		$desc = filter($_POST['desc']);
		if(!empty($_POST['cmd']) && is_numeric($_POST['cost']) && !empty($_POST['name']) && !empty($_POST['desc']))
		{
			mysql_query("INSERT INTO `points_commands` (`cost`, `command`, `name`, `desc`) VALUES('".$cost."', '".$cmd."', '".$name."', '".$desc."')") or die(mysql_error());
			echo '1';
		}
		unset($cmd, $cost, $name, $desc);
		break;
		
		case 'vip':
		$cost = filter($_POST['cost']);
		$coins = filter($_POST['coins']);
		$time = filter($_POST['time']);
			if(is_numeric($_POST['cost']) && is_numeric($_POST['coins']) && is_numeric($_POST['time']))
			{
				mysql_query("INSERT INTO points_vip (points, credits, time) VALUES ('".$cost."', '".$coins."', '".$time."')");
				echo '1';
			}
		unset($cost, $coins, $time);
		break;
		
		case 'furni':
		$cost = filter($_POST['cost']);
		$name = filter($_POST['name']);
		$item = filter($_POST['item']);
		$img = filter($_POST['img']);
			if(is_numeric($_POST['cost']) && !empty($_POST['name']) && is_numeric($_POST['item']) && !empty($_POST['img']))
			{
				mysql_query("INSERT INTO points_furni (points, name, item_id, img) VALUES('".$cost."', '".$name."', '".$item."', '".$img."')");
				echo '1';
			}
		unset($cost, $name, $item, $img);
		
		break;
		
		default:
		//Will do nothing...
		break;
	} // End switch
}//end rank check
?>