<?php
if(!defined('IN_INDEX')) { die('Sorry, you cannot access this file.'); }
$query_furni = mysql_query("SELECT * FROM points_furni ORDER BY ABS(points) ASC");
		if(@mysql_num_rows($query_furni) > 0)
		{
		while($furni = mysql_fetch_array($query_furni))
		{
			if($_SESSION['points']['rank'] >= $_CONFIG['admin']['add'] || $_SESSION['points']['rank'] >= $_CONFIG['admin']['add'])
			{
				$remove = '<p>[<b id="furni_'.$furni['id'].'" class="remove" onClick="submitRem(\'furni\',\''.$furni['id'].'\')">Remove</b>]</p>';
			}
			else
			{
				$remove = '';
			}
			echo '<div id="furni_form_'.$furni['id'].'" style="display:inline-block; height:80px; clear:left; padding-bottom:5px; margin-bottom:5px;">
        
        <input type="image" name="furni" value="furni" onclick="buy(\''.$furni["id"].'\', \'furni\')" style="height:40px; width:40px;" src="'.$_CONFIC['img']['furni'].$furni["img"].'.GIF" class="hover" border="0" title="'.$furni["name"].' -&nbsp;'.number_format($furni["points"]).'&nbsp; Points!" />
        <p style="height:12px;">'.number_format($furni["points"]).'</p><p>Points</p> '.$remove.'
        </div>';
		}
		unset($furni);
		}
		else
		{
			echo 'There are currently no furni for sale check back later!';
		}
		unset($query_furni);
?>