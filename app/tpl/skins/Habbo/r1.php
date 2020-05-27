<?php
$result = mysql_query("SELECT * FROM users ORDER BY id DESC LIMIT 1");



while($row = mysql_fetch_array($result))
  {
 
  echo "Welcome " .$row['username']. " Our New User!";
 
  }
  ?>