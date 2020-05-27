<?php
class Points
{
	public function badgeCost($id)
	{
	return mysql_result(mysql_query("SELECT badge_cost FROM points_badge WHERE id = '".filter($id)."' LIMIT 1"),0);
	}
	
	public function badgeCode($id)
	{
		return mysql_result(mysql_query("SELECT badge_code FROM points_badge WHERE id = '".filter($id)."' LIMIT 1"),0);
	}
	
	public function giveBadge($id, $code)
	{
		mysql_query("INSERT INTO user_badges (user_id, badge_id) VALUES('".filter($id)."', '".filter($code)."')");
	}
	
	public function furniCost($id)
	{
		return mysql_result(mysql_query("SELECT points FROM points_furni WHERE id = '".filter($id)."' LIMIT 1"),0);
	}
	
	public function furniItem($id)
	{
		return mysql_result(mysql_query("SELECT item_id FROM points_furni WHERE id = '".filter($id)."' LIMIT 1"),0);
	}
	
	public function giveFurni($userid, $item)
	{
		$id = mysql_result(mysql_query("SELECT id FROM items ORDER BY id DESC LIMIT 1"),0) + 1;
		mysql_query("INSERT INTO items (id, user_id, base_item, extra_data, wall_pos) VALUES ('".(int)$id."', '".$userid."', '".$item."', '', '')");
		unset($id);
	}
	
	public function vipCost($id)
	{
		return mysql_result(mysql_query("SELECT points FROM points_vip WHERE id = '".filter($id)."' LIMIT 1"),0);
	}
	
	public function vipCredits($id)
	{
		
		return mysql_result(mysql_query("SELECT credits FROM points_vip WHERE id = '".filter($id)."' LIMIT 1"),0);
	}
	
	public function vipTime($id)
	{
		 return mysql_result(mysql_query("SELECT time FROM points_vip WHERE id = '".filter($id)."' LIMIT 1"),0);
	}
	
	public function vipGive($user, $credits, $time)
	{
		$total = filter($credits);
		$settime = time() + filter($time);
		mysql_query("UPDATE users SET credits = credits + '".$total."', rank = '2', vip = '1', vip_time = '".$settime."' WHERE username = '".filter($user)."' LIMIT 1");
		unset($total);
		unset($settime);
	}
	
	public function creditsCredits($id)
	{
		return mysql_result(mysql_query("SELECT credits FROM points_credits WHERE id = '".filter($id)."' LIMIT 1"),0);
	}
	
	public function creditsPoints($id)
	{
		return mysql_result(mysql_query("SELECT points FROM points_credits WHERE id ='".filter($id)."' LIMIT 1"),0);
	}
	
	public function giveCredits($user, $credits)
	{
		$total =  filter($credits);
		mysql_query("UPDATE users SET credits = credits + '".$total."' WHERE username = '".filter($user)."' LIMIT 1");
		unset($total);
	}
	
	public function pixelsPoints($id)
	{
		return mysql_result(mysql_query("SELECT points FROM points_pixels WHERE id = '".filter($id)."' LIMIT 1"),0);
	}
	
	public function pixelsPixels($id)
	{
		return mysql_result(mysql_query("SELECT pixels FROM points_pixels WHERE id = '".filter($id)."' LIMIT 1"),0);
	}
	
	public function givePixels($user, $pixels)
	{
		$total = filter($pixels);
		mysql_query("UPDATE users SET activity_points = activity_points + '".$total."' WHERE username = '".filter($user)."' LIMIT 1");
		unset($total);
	}
	
	public function commandsCost($id)
	{
		return mysql_result(mysql_query("SELECT cost FROM points_commands WHERE id = '".filter($id)."' LIMIT 1"),0);
	}
	
	public function commandsCmd($id)
	{
		return mysql_result(mysql_query("SELECT command FROM points_commands WHERE id = '".filter($id)."' LIMIT 1"),0);
	}
	
	public function cmdHascmds($cmd, $userid)
	{
		mysql_query("UPDATE permissions_users SET ".filter($cmd)." = '1' WHERE userid = '".filter($userid)."' LIMIT 1");
	}
	
	public function cmdNocmds($cmd, $userid)
	{
		mysql_query("INSERT INTO permissions_users (userid, ".filter($cmd).") VALUES ('".filter($userid)."', '1')");
	}
	
	public function cmdVipHascmds($cmd, $userid)
	{
		mysql_query("UPDATE permissions_uses SET ".filter($cmd)." = '1' WHERE userid = '".filter($userid)."' LIMIT 1");
	}
	
	public function cmdVipNocmds($cmd, $userid)
	{
		mysql_query("INSERT INTO permissions_users (userid, $cmd, cmd_coords, cmd_enable, cmd_setspeed, acc_enter_fullrooms) VALUES('".filter($userid)."','1','1','1','1','1')");
	}
	
	public function hasCmd($userid, $cmd)

	{
		if(mysql_num_rows(mysql_query("SELECT * FROM permissions_users WHERE userid = '".filter($userid)."' AND ".$cmd." = '1' LIMIT 1") > 0))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function hasBadge($userid, $badge)
	{
		if(@mysql_num_rows(mysql_query("SELECT * FROM user_badges WHERE user_id = '".filter($userid)."' AND badge_id = '".filter($badge)."'") > 0))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function hasCommands($id)
	{
		if(mysql_num_rows(mysql_query("SELECT * FROM permissions_users WHERE userid = '".filter($id)."' LIMIT 1") > 0))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function takePoints($id, $points)
	{
		$total = filter($points);
		mysql_query("UPDATE users SET vip_points = vip_points - '".$total."' WHERE id = '".$id."' LIMIT 1");
		unset($total);
	}
	
	public function addLogs($bought, $attempt, $amount)
	{
		mysql_query("INSERT INTO points_logs (userid, username, bought, date, attempt, amount) VALUES('".$_SESSION['points']['id']."', '".$_SESSION['points']['username']."', '".filter($bought)."', unix_timestamp(), '".filter($attempt)."', '".filter($amount)."')");
	}
	
	public function getPoints($id)
	{	
		return mysql_result(mysql_query("SELECT vip_points FROM users WHERE id = '" . filter($id) . "' LIMIT 1"),0);
	}
	
	public function getDailyids()
	{
		return explode(',',mysql_result(mysql_query("SELECT user_id FROM points_daily"),0));
	}
	
	public function checkId($id, $what)
	{
		$q = mysql_query("SELECT id FROM ".filter($what)." WHERE id = '" . filter($id) . "' LIMIT 1");
		if(mysql_num_rows($q) > 0)
		{
			return true;
		}
		return false;
	}
}
?>