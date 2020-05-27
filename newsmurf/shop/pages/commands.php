<?php
if(!defined('IN_INDEX')) { die('Sorry, you cannot access this file.'); }
$query_commands = mysql_query("SELECT * FROM points_commands");
		if(@mysql_num_rows($query_commands) > 0)
		{
		while($commands = mysql_fetch_array($query_commands))
		{
			if(@!$points->hasCmd($_SESSION['poings']['id'], $commands['command']))
			{
				if($_SESSION['points']['rank'] >= $_CONFIG['admin']['add'])
			{
				$remove = '[<b id="cmd_'.$commands['id'].'" class="remove" onClick="submitRem(\'cmd\',\''.$commands['id'].'\')">Remove</b>]';
			}
			else
			{
				$remove = '';
			}
			echo '<form name="UserSettings" id="cmd_form_'.$commands['id'].'">
                '.$commands["name"].' Cost: '.number_format($commands["cost"]).' Points '.$remove.'<br />
				<img src="images/info_16.png" onclick="alert("'.$commands["desc"].'")" class="hover" title="'.$commands['desc'].'" />
           <button type="button" class="button" onclick="buy(\''.$commands["id"].'\', \'commands\')" name="commands" value="commands">Buy Command</button></form><br /><br />';
			}
		}
		unset($query_commands);
		}
		else
		{
			echo 'Sorry there are currently no commands to buy!';
		}
		unset($commands);
?>