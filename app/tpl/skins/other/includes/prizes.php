<?php

$hotelname = 'Vers';
$hotelurl = 'localhost';


if(!LOGGED_IN)
{
		header("Location: " . $hotelurl);
		exit;
}

$error = '';
$error1 = '';

$sent = $_POST['sent'];
$username = mysql_real_escape_string($_POST['username']);
$p1 = mysql_real_escape_string($_POST['p1']);
$p2 = mysql_real_escape_string($_POST['p2']);
$p3 = mysql_real_escape_string($_POST['p3']);
$p4 = mysql_real_escape_string($_POST['p4']);
$time = time();
$time2 = $time + 86400;
$time2 = mysql_real_escape_string($time2);


	$checkd = mysql_query("SELECT COUNT(username) FROM expire WHERE username = '" . $username . "' AND expire > '" . time() . "' LIMIT 1");
	$resultd = mysql_result($checkd, 0);

if($resultd == 1)
{
	$error = '<font color="red"><strong>You have completed your tries for today!<br><br>You tried ' . $result2 . ' of 3 Tries.</strong></font><br><br>';
} else 
{


if(isset($_POST['username']) && $username == '')
{

	$error = '<strong><font color="red">You Must Add Your Username.<br><br></font></strong>';

}


if($sent == 'yes' && $username != '') {

$validate = mysql_query("SELECT * FROM vault WHERE Pin1 = '" . $p1 . "' AND Pin2 = '" . $p2 . "' AND Pin3 = '" . $p3 . "' AND Pin4 = '" . $p4 . "' AND enabled = '1' LIMIT 1");

$count = mysql_num_rows($validate);

if($count == 1)
{



	while($cvalidate = mysql_fetch_assoc($validate))
	{

		$won = $cvalidate['Prize'];

	}

	mysql_query("UPDATE users SET perror = 0 WHERE username = '".$username."'");
	mysql_query("UPDATE vault SET Username = '" .$username. "', enabled = '0' WHERE Pin1 = '" . $p1 . "' AND Pin2 = '" . $p2 . "' AND Pin3 = '" . $p3 . "' AND Pin4 = '" . $p4 . "' AND enabled = '1'");
	setcookie("vaultdone",$username, time()+3600*24);
	mysql_query("INSERT INTO expire (username, expire) VALUES ('" . $username . "', '" . $time2 . "')");
		
	$error = '<font color="green"><strong>You got the Correct Combination.<br><br>You won ' . $won . '</strong></font><br><br>';


	$getcode = mysql_query("SELECT * FROM vault WHERE Pin1 = '" . $p1 . "' AND Pin2 = '" . $p2 . "' AND Pin3 = '" . $p3 . "' AND Pin4 = '" . $p4 . "'");
	$coderow = mysql_fetch_array($getcode);
	$code = $coderow['code'];

	$getid = mysql_query("SELECT * FROM users WHERE username = '" . $username . "'");
	$row = mysql_fetch_array($getid);
	$id = $row['id'];

	
	$getcode = mysql_query("SELECT * FROM vault WHERE Pin1 = '" . $p1 . "' AND Pin2 = '" . $p2 . "' AND Pin3 = '" . $p3 . "' AND Pin4 = '" . $p4 . "'");
	$coderow = mysql_fetch_array($getcode);
	$code = $coderow['code'];
	
	if($code == 1)
	{
		mysql_query("UPDATE users SET vip = 1 WHERE username = '" . $username . "'");
	}

	if($code == 2)
	{
		$getidd = mysql_query("SELECT * FROM items ORDER BY id DESC LIMIT 0,1");
		$gotidd = mysql_fetch_array($getidd);
		$finalid = $gotidd['id'] + 10;
		mysql_query("INSERT into items (id, user_id, room_id, base_item, extra_data, x, y, z, rot, wall_pos) VALUES ('" . $finalid . "','" . $id . "', '0', '202', '!', '0', '0', '0', '0', '0')");
	}

	if($code == 3)
	{
		$getidd = mysql_query("SELECT * FROM items ORDER BY id DESC LIMIT 0,1");
		$gotidd = mysql_fetch_array($getidd);
		$finalid = $gotidd['id'] + 10;
		mysql_query("INSERT into items (id, user_id, room_id, base_item, extra_data, x, y, z, rot, wall_pos) VALUES ('" . $finalid . "','" . $id . "', '0', '202', '!', '0', '0', '0', '0', '0')");
	}

	if($code == 4)
	{
		mysql_query("UPDATE user_stats SET badges = 6 WHERE id = '" . $id . "'");
	}

}
else if($count == 0)
{

	mysql_query("UPDATE users SET perror = perror +1 WHERE username = '" .$username. "'");
	$check = mysql_query("SELECT perror FROM users WHERE username = '" .$username. "'");
	$result2 = mysql_result($check, 0);
	if($result2 >= 3)
	{
		$error1 = '<font color="red"><strong>You have completed your tries for today, Please come back tomorrow</strong></font><br><br>';
		mysql_query("INSERT INTO expire (username, expire) VALUES ('" . $username . "', '" . $time2 . "')");
		mysql_query("UPDATE users SET perror = 0 WHERE username = '" .$username. "'");
	}
	$result = $result2;
	$error = '<font color="red"><strong>You got the Wrong Combination!!<br><br>You tried ' . $result2 . ' of 3 Tries.</strong></font><br><br>';

}
}

}

?>