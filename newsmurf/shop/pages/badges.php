<?php
if(!defined('IN_INDEX')) { die('Sorry, you cannot access this file.'); }
$query_badge = mysql_query("SELECT * FROM points_badge ORDER BY ABS(badge_cost) ASC");
		if(mysql_num_rows($query_badge) > 0)
		{
		while($badge = mysql_fetch_array($query_badge))
		{
			if(!$points->hasBadge($_SESSION['points']['id'], $badge['badge_code']) || $_SESSION['points']['rank'] >= $_CONFIG['admin']['add'])
			{
				if($_SESSION['points']['rank'] >= $_CONFIG['admin']['add'])
			{
				$remove = '<p>[<b id="badge_'.$badge['id'].'" class="remove" onClick="submitRem(\'badge\',\''.$badge['id'].'\')">Remove</b>]</p>';
			}
			else
			{
				$remove = '';
			}
echo '<div id="badge_form_'.$badge['id'].'" style="display:inline-block; height:80px; clear:left; padding-bottom:2px; margin-bottom:5px;">
        
<input type="image" name="badge" value="badge" onclick="buy(\''.$badge["id"].'\', \'badge\')" style="height:40px; width:40px;" src="'.$_CONFIG['img']['badges'] . $badge["badge_code"].'.GIF" class="hover" title="'.number_format($badge["badge_cost"]).' Points!" border="0" />
<p style="height:12px;">'.number_format($badge["badge_cost"]).'</p><p>Points</p> ' . $remove .'
  
  </div>';
			}
		}
		}
		else
		{
			echo 'No badges availiable!';
		}
		
unset($query_badge,$badge);
		
?>