<?php
if(!defined('IN_INDEX')) { die('Sorry, you cannot access this file.'); }

/*
*
*	MySQL management
*
*/

$_CONFIG['mysql']['connection_type'] = 'connect'; //Type of connection: It must be connect, or pconnect: if you want a persistent connection.

$_CONFIG['mysql']['hostname'] = 'localhost'; //MySQL host

$_CONFIG['mysql']['username'] = 'root'; //MySQL username

$_CONFIG['mysql']['password'] = 'GDTGYR455t4tg54%^$^$frt'; //MySQL password

$_CONFIG['mysql']['database'] = 'SmurfHotel'; //MySQL database

$_CONFIG['mysql']['port'] = '3306'; //MySQL's port

/*
*
*	Hotel management  - All URLs do not end with an "/"
*
*/

$_CONFIG['hotel']['server_ip'] = '51.36.189.94'; //IP of DDos protected server.

$_CONFIG['hotel']['server_port'] = '30000'; //Port that EMU uses!

$_CONFIG['hotel']['url'] = 'https://smurfhotel.nl'; //Does not end with a "/"

$_CONFIG['hotel']['name'] = 'Smurf'; // Hotel's name

$_CONFIG['hotel']['desc'] = 'Chatte und triff neue Freunde'; //Hotel's description 

$_CONFIG['hotel']['email'] = ''; //Where the help queries from users are emailed to.@Priv skin

$_CONFIG['hotel']['in_maint'] = false; //False if hotel is NOT in maintenance. True if hotel IS in maintenance

$_CONFIG['hotel']['motto'] = 'Ik ben een Smurf!'; //Default motto users will register with.

$_CONFIG['hotel']['credits'] = 10000000;

$_CONFIG['hotel']['pixels'] = 10000000; 

$_CONFIG['hotel']['figure'] = 'sh-3154-92-92.ha-3117-92.wa-3211-92-1408.lg-3626-92-92.hd-180-1365'; //Default figure users will register with.

$_CONFIG['hotel']['web_build'] = '63_1dc60c6d6ea6e089c6893ab4e0541ee0/2863'; //Web_Build

$_CONFIG['hotel']['external_vars'] = 'https://smurfhotel.nl/r63/external_variables.txt'; //URL to your external vars

$_CONFIG['hotel']['external_texts'] = 'https://smurfhotel.nl/r63/external_flash_texts.txt'; //URL to your external texts

$_CONFIG['hotel']['product_data'] = 'https://smurfhotel.nl/r63/productdata.txt'; //URL to your productdata

$_CONFIG['hotel']['furni_data'] = 'https://smurfhotel.nl/r63/furnidata.txt'; //URL to your furnidata

$_CONFIG['hotel']['swf_folder'] = 'https://smurfhotel.nl/r63/'; //URL to your SWF folder

$_CONFIG['template']['style'] = 'Habbo'; 

$_CONFIG['hotel']['advertising'] = 'Du liebst anspruchsvolle Literatur?<br>Hunderte Klassiker kostenlos lesen!<br><a href="http://readproject.de" target="_blank" style="color:#ec6f00;">read Project</a>';

$_CONFIG['social']['facebook'] = 'https://www.facebook.com/Habbo';

$_CONFIG['social']['twitter'] = 'https://www.twitter.com/Habbo'; 

$_CONFIG['social']['instagram'] = 'https://www.instagram.com/'; 

?>
