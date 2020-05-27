<?php
session_start(); $username = strip_tags(stripslashes(mysql_real_escape_string($_SESSION["user"]["username"]))); $connect = mysql_connect("localhost", "root", 'GDTGYR455t4tg54%^$^$frt'); mysql_select_db("poppy123", $connect); $username = $_SESSION["user"]["username"]; $query = mysql_query("SELECT * FROM `users` WHERE `username` = '$username'"); $first = strip_tags(stripslashes(mysql_real_escape_string($_POST["first"]))); $second = strip_tags(stripslashes(mysql_real_escape_string($_POST["second"]))); $third = strip_tags(stripslashes(mysql_real_escape_string($_POST["third"]))); $fourth = strip_tags(stripslashes(mysql_real_escape_string($_POST["fourth"]))); $key = $first.$second.$third.$fourth; if(is_numeric($key)) { $query = mysql_query("SELECT * FROM `users` WHERE `username` = '$username'"); $row = mysql_fetch_assoc($query); $valid_key = $row["staff_pin"]; if($key == $row["staff_pin"]) { session_start(); $_SESSION["correct_key"] = $key; }else{ die("Incorrect Key!"); } }else { die("Key must be 4 numbers..."); }
?>
<style>
body {
background-color: #212121;
}

#container {
position: absolute;
width: 600px;
height: 172px;
margin: auto;
position: absolute;
top: 0; left: 0; bottom: 0; right: 0;

}

#main {
width: 500px;
text-align: center;
height: 70px;
padding: 10px;
background-color: #333333;
border: 1px solid orange;
margin: 0 auto;
}

#main h1 {
color: orange;
font-size: 20px;
font-family: sans-serif;
}


#nav {
box-sizing: border-box;
border: 1px solid orange;
width: 200px;
height: 50px;
background-color: #333333;
text-align: center;
margin: 30 auto;
}

#nav h2,
#nav a {
text-decoration: none;
color: orange;
font-size: 20px;
font-family: sans-serif;
line-height: 20px;
}

#nav:hover,
#main:hover {
border: 1px solid darkorange;
}

#main h1:hover,
#nav h2:hover {
color: darkorange;
}
</style>

<div id="container">
<div id="main">
<h1>You have entered your staff pin correctly! Click the button to go back to the client!</h1>
</div>
<div id="nav">
<a href="{url}/client"><h2>Enter Client</h2></a>
</div>
</div>