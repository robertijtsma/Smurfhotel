<?php
////////////////////////////////////////////////////////
// # TheHabbos Topsites API Script - Release 1.0.3    //
// # © Copyright TheHabbos 2011. All rights reserved. //
////////////////////////////////////////////////////////

if(!defined('IN_THEHABBOS_API')) {
  die('Sorry, but you can not access this file directly. :(');
}

/* FEEL FREE TO EDIT ANYTHING BELOW */

$CONFIG['Username'] = 'Habbam'; //thehabbos topsites username
$CONFIG['URL']      = 'http://habbam.com/client'; //the location to the file api.php on your website (i.e. http://example.com/api.php)
$CONFIG['Type']     = 'client'; //current options: other or client (thehabbos_api/types)
$CONFIG['Style']    = 'Habbo Sleek'; //don't change this unless you have created your own style (thehabbos_api/styles)
$CONFIG['Credits']  = '1000'; //you can use this if you are using a specific type above - your users will be rewarded this many credits for voting

/* ADVANCED OPTIONS */

$CONFIG['Timeout']      = 2; //max amount of seconds before the api stops trying to connect to votingapi.com
$CONFIG['Curl_Enabled'] = 0; //mark this 0 if cURL isn't installed/enabled on your server, although cURL is recommended

/* DO NOT EDIT ANYTHING BELOW */

$votingValidation = new Validate();
$CONFIG['Status'] = $votingValidation->validateVote();