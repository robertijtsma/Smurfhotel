<?php
if(!defined('IN_INDEX')) { die('Sorry, you cannot access this file.'); }
$query_pixels = mysql_query("SELECT * FROM points_pixels");
		if(@mysql_num_rows($query_pixels) > 0)
		{
		while($pixels = mysql_fetch_array($query_pixels))
		{
			if($_SESSION['points']['rank'] >= $_CONFIG['admin']['add'])
			{
				$remove = '[<b id="pixels_'.$pixels['id'].'" class="remove" onClick="submitRem(\'pixels\',\''.$pixels['id'].'\')">Remove</b>]';
			}
			else
			{
				$remove = '';
			}
			echo '
			<form id="pixels_form_'.$pixels["id"].'">
                '.number_format($pixels["pixels"]).' Pixels cost '.number_format($pixels["points"]).' points '.$remove.'
                <input type="hidden" value="'.$pixels["id"].'" name="id" />
            <button type="button" class="button" onclick="buy(\''.$pixels["id"].'\', \'pixels\')" value="pixels" name="pixels">Buy Pixels</button></form>
                <br /><br />';
		}
		unset($pixels);
		}
		else
		{
			echo 'Sorry there are currently no pixels to buy check back later!';
		}
		unset($query_pixels)
?>