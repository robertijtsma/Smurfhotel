<?php
////////////////////////////////////////////////////////
// # TheHabbos Topsites API Script - Release 1.0.3    //
// # © Copyright TheHabbos 2011. All rights reserved. //
////////////////////////////////////////////////////////

if(!defined('IN_CLIENT')) {
  die('Sorry, but you can not access this file directly. :(');
}

define('IN_THEHABBOS_API', 1);

require_once 'class.validate.php';
require_once 'config';

if($CONFIG['Status'] == '3') {
  header("Location: api.php");
}