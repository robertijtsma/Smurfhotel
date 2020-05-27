<body bgcolor="#000000"><table width="900" border="0" bgcolor="#FFFFFF" align="center" style="border-radius:10px; padding:15PX;">
<title>{hotelName} - Banned</title>
  <tr>
    <td><font style="font-size:36px;
  font-weight:500;
  color:#F00;
  text-align:center;" ><center><img src="{url}/app/tpl/skins/Habbo/images/banned.gif" width="300px;"><br />Du wurdest aus dem {hotelName} Hotel geschmissen!<br /></center></font></td>
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
	echo "Grund: " . $reason;
	echo '<br /><br />';
	echo "Art: " . $bantype;
	echo '<br /><br />';
	echo "von: " . $addedby;
	echo '<br /><br />';

	$getuserinfo2= mysql_query("SELECT * FROM bans WHERE value='{$usernameban}'");



		while($row = mysql_fetch_array($getuserinfo2)){


		$expire = $row['expire'];



		if($expire < time()){ 
		header('Location: me');
		exit;
	} 
		else	{

		}
	}
 

                        // Now we convert the Unix timestamp to a humanley readable time
                              
                                $date = date("l d F Y H:i:s", $expire);
                                
                                echo "Ban endet am: " . $date;
}
}



?></center></td>
  </tr>
</table>