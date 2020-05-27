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
    <td><font style="font-size:36px;
  font-weight:500;
  color:#F00;
  text-align:center;" ><center><img src="{url}/r63/c_images/warning.gif" width="300px;"><br />You're Ip banned!<br /></center></font></td>
  </tr>
  <tr>
    <td><center><?php
	

	if($_SESSION['user']['id']){


	$getuserinfo = mysql_query("SELECT * FROM users WHERE id='".$_SESSION['user']['id']."'");
	while($row = mysql_fetch_array($getuserinfo)){

	$ipban = $row['ip_last'];



	}



	$getuserinfo= mysql_query("SELECT * FROM bans WHERE value='{$ipban}'");



		while($row = mysql_fetch_array($getuserinfo)){

	$ip = $row['value'];
	$bantype = $row['bantype'];
	$reason = $row['reason'];
	$expire = $row['expire'];
	$addedby = $row['added_by'];
	echo '<center>';
	echo "IP: " . $ip;
	echo '<br /><br />';
	echo "Reason: " . $reason;
	echo '<br /><br />';
	echo "Type: " . $bantype;
	echo '<br /><br />';
	echo "Banned by: " . $addedby;
	echo '<br /><br />';

	$getuserinfo2= mysql_query("SELECT * FROM bans WHERE value='{$ipban}'");



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