<?php

$_CONFIG['mysql']['host'] = 'localhost'; // mysql hostname such as localhost

$_CONFIG['mysql']['user'] = 'root'; // mysql username

$_CONFIG['mysql']['password'] = 'Chrism1995'; // mysql passowrd

$_CONFIG['mysql']['database'] = 'Hotel'; // mysql database

$_CONFIG['cms']['type'] = 'rev'; // Either rev, uber, or phxcf

$_CONFIG['cms']['url'] = 'http://habbam.com'; // Your site URL, no ending /

$_CONFIG['cms']['name'] = 'Habbam'; // Your hotels name used in <title> and footer

$_CONFIG['cms']['maintenance'] = false; // Currently no maintenance page will make in future

$_CONFIG['points']['daily'] = '500'; // The amount of points they get for daily rewards!

$_CONFIG['daily']['rewards'] = False; // On/off switch for daily rewars true = on false = off

$_CONFIG['admin']['add'] = '11'; // The rank you must be to ADD and REMOVE stuff to the shop

$_CONFIG['img']['badges'] = 'images/badges/'; // this one DOES require an ending / IF you define it.

$_CONFIC['img']['furni'] = 'images/rares/'; // Same as above.

// Selling items this will allow you to sell and not sell certain things such as VIP, credits, points etc etc just in case :)\\

$_CONFIG['sell']['badges'] = true;

$_CONFIG['sell']['commands'] = true;

$_CONFIG['sell']['credits'] = true;

$_CONFIG['sell']['pixels'] = true;

$_CONFIG['sell']['vip'] = true;

$_CONFIG['sell']['furni'] = true;

$server = mysql_pconnect($_CONFIG['mysql']['host'], $_CONFIG['mysql']['user'], $_CONFIG['mysql']['password']) or die(mysql_error());

if(!$server){

die("Error connecting to server");

}

$getdb = mysql_select_db($_CONFIG['mysql']['database'], $server) or die(mysql_error());

if(!$getdb){

die("Error finding the database");

}
include('cms_sessions.php');
?>