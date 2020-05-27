<?php
global $engine;
if($_SESSION['user']['id']){


$getuserinfo = $engine->query("SELECT * FROM users WHERE id='".$_SESSION['user']['id']."'");
while($row = $getuserinfo->fetch(PDO::FETCH_ASSOC)){

$usernameban = $row['username'];

$ipban = $row['ip_last'];


}



$getuserinfo = $engine->query("SELECT * FROM bans WHERE value='{$usernameban}' AND expire > UNIX_TIMESTAMP() ORDER BY expire DESC LIMIT 1");

$getuserinfoip = $engine->query("SELECT * FROM bans WHERE value='{$ipban}' AND expire > UNIX_TIMESTAMP() ORDER BY expire DESC LIMIT 1");



while($row = $getuserinfo->fetch(PDO::FETCH_ASSOC)){


$expire = $row['expire'];



 if($expire <= time()){ 
  
 } 
 else{
header('Location: banned');
exit;
 }
 }
 
 while($row = $getuserinfoip->fetch(PDO::FETCH_ASSOC)){


$expire = $row['expire'];



 if($expire <= time()){ 
  
 } 
 else{
header('Location: ipbanned');
exit;
 }
 }
 }
 


?>
