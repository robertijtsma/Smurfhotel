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


if($_SESSION['user']['id']){


$getuserinfo = mysql_query("SELECT * FROM users WHERE id='".$_SESSION['user']['id']."'");
while($row = mysql_fetch_array($getuserinfo)){

$usernameban = $row['username'];

$ipban = $row['ip_last'];


}



$getuserinfo= mysql_query("SELECT * FROM bans WHERE value='{$usernameban}' AND expire > UNIX_TIMESTAMP() ORDER BY expire DESC LIMIT 1");

$getuserinfoip= mysql_query("SELECT * FROM bans WHERE value='{$ipban}' AND expire > UNIX_TIMESTAMP() ORDER BY expire DESC LIMIT 1");



while($row = mysql_fetch_array($getuserinfo)){


$expire = $row['expire'];



 if($expire <= time()){ 
  
 } 
 else{
header('Location: banned');
 }
 }
 
 while($row = mysql_fetch_array($getuserinfoip)){


$expire = $row['expire'];



 if($expire <= time()){ 
  
 } 
 else{
header('Location: ipbanned');
 }
 }
 }
 


?>