<?php
/*=========================================================
| RevCMS Banning system
| #########################################################
| Banning system developed by Grapefruit
| www.otaku-studios.com
| #########################################################
| Uses Phoenix Emulator 3.0 database
| #########################################################
\=========================================================*/
?>
<body bgcolor="#000000"><table width="900" border="0" bgcolor="#FFFFFF" align="center" style="border-radius:10px; padding:15PX;">
  <tr>
    <td><font style="font-size:20px;
  font-weight:250;
  color:#F00;
  text-align:center;" ><center><img src="app/tpl/skins/{skin}/images/banned/3.png" width="300px;"><br /><hr />You have been banned for a certain amount of time by one of {hotelname} Hotel's staff. The reason(s) and ban length are listed below!<br /></center></font></td>
  </tr>
  <tr>
    <td><center><?php
	

	if($_SESSION['user']['id']){


	$getuserinfo = mysql_query("SELECT * FROM users WHERE id='".$_SESSION['user']['id']."'");
	while($row = mysql_fetch_array($getuserinfo)){

	$usernameban = $row['username'];



	}



	$getuserinfo= mysql_query("SELECT * FROM bans WHERE value='{$usernameban}'");



		while($row = mysql_fetch_array($getuserinfo)){

	$username2 = $row['value'];
	$bantype = $row['bantype'];
	$reason = $row['reason'];
	$expire = $row['expire'];
	$addedby = $row['added_by'];
	echo '<center>';
	echo "Username: " . $username2;
	echo '<br /><br />';
	echo "Reason: " . $reason;
	echo '<br /><br />';
	echo "Type: " . $bantype;
	echo '<br /><br />';
	echo "Banned by: " . $addedby;
	echo '<br /><br />';

	$getuserinfo2= mysql_query("SELECT * FROM bans WHERE value='{$usernameban}'");



		while($row = mysql_fetch_array($getuserinfo2)){


		$expire = $row['expire'];



		if($expire < time()){ 
		header('Location: me');
	} 
		else	{

		}
	}
 

                        // Now we convert the Unix timestamp to a humanley readable time
                              
                                $date = date("l d F Y H:i:s", $expire);
                                
                                echo "Ban expires on: " . $date;
}
}



?></center></td>
  </tr>
</table>