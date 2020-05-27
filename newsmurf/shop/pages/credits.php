<?php
if(!defined('IN_INDEX')) { die('Sorry, you cannot access this file.'); }
$query_credits = mysql_query("SELECT * FROM points_credits");
		if(@mysql_num_rows($query_credits) > 0)
		{
		while($credits = mysql_fetch_array($query_credits))
		{
			if($_SESSION['points']['rank'] >= $_CONFIG['admin']['add'])
			{
				$remove = '[<b id="coins_'.$credits['id'].'" class="remove" onClick="submitRem(\'coins\',\''.$credits['id'].'\')">Remove</b>]';
			}
			else
			{
				$remove = '';
			}
			echo '<form name="UserSettings" id="coins_form_'.$credits['id'].'">
                '.number_format($credits["credits"]).' Credits cost '.number_format($credits["points"]).' points '.$remove.'
                <input type="hidden" value="'.$credits["id"].'" name="id" />
            <button type="button" class="button" value="credits" onclick="buy(\''.$credits["id"].'\', \'credits\')" name="credits">Buy Credits</button>
                </form><br /><br />';
		}
		unset($credits);
		}
		else
		{
			 echo 'Sorry there are currently no credits to buy check back later!';
		}
		unset($query_credits);
?>