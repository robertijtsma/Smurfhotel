<?php
define('IN_INDEX', 1);
include '../global.php';
if($_SESSION['points']['rank'] >= $_CONFIG['admin']['add'])
{
	if(isset($_POST['type']) && isset($_POST['id']) && is_numeric($_POST['id']))
	{
		$id = filter($_POST['id']);
		switch($_POST['type'])
		{
			case 'badge':
			mysql_query("DELETE FROM points_badge WHERE id = '" . $id ."' LIMIT 1");
			break;
		
			case 'coins':
			mysql_query("DELETE FROM points_credits WHERE id = '" . $id ."' LIMIT 1");

			break;
		
			case 'pixels':
			mysql_query("DELETE FROM points_pixels WHERE id = '" . $id ."' LIMIT 1");

			break;
		
			case 'cmd':
			mysql_query("DELETE FROM points_commands WHERE id = '" . $id ."' LIMIT 1");

			break;
		
			case 'vip':
			mysql_query("DELETE FROM points_vip WHERE id = '" . $id ."' LIMIT 1");

			break;
		
			case 'furni':
			mysql_query("DELETE FROM points_furni WHERE id = '" . $id ."' LIMIT 1");
		
			break;
		
			default:
			//Will do nothing...
			break;
		} // End switch
	}
}//end rank check
?>