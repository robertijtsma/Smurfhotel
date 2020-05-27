<?php
////////////////////////////////////////////////////////
// # TheHabbos Topsites API Script - Release 1.0.3    //
// # © Copyright TheHabbos 2011. All rights reserved. //
////////////////////////////////////////////////////////

if(!defined('IN_THEHABBOS_API')) {
  die('Sorry, but you can not access this file directly. :(');
}

class Validate {

  public function validateVote() {
    global $CONFIG;
    if($this->checkCookie()) {
      return 2;
    }else{
      $data = $this->getData('http://votingapi.com/validate.php?user='.$CONFIG['Username'].'&ip='.$_SERVER['REMOTE_ADDR']);
      if(!$data || !is_numeric($data)) {
        return 6;
      }else{
        if($data == 1 || $data == 2) {
          $this->setCookie();
        }
        return $data;
      }
    }
  }
  
  private function getData($url) {
    global $CONFIG;
    if($CONFIG['Curl_Enabled']) {
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_TIMEOUT, $CONFIG['Timeout']);    
      return curl_exec($ch);
    }else{
      $context = stream_context_create(array('http' => array('timeout' => $CONFIG['Timeout']))); 
      return @file_get_contents($url, 0, $context); 
    }
  }
  
  public function setCookie() {
    $resetTime = $this->getResetTime();
    setcookie('voting_stamp', $resetTime, $resetTime);
  }
  
  private function checkCookie() {
    $resetTime = $this->getResetTime();
    if(isset($_COOKIE['voting_stamp'])) {
      if($_COOKIE['voting_stamp'] == $resetTime) {
        return true;
      }else{
        setcookie('voting_stamp', '');
        return false;
      }
    }else{
      return false;
    }
  }
  
  private function getResetTime() {
    $defaultTime = date_default_timezone_get();
    date_default_timezone_set('America/Chicago');
    $resetTime = mktime(0, 0, 0, date('n'), date('j') + 1);
    date_default_timezone_set($defaultTime);
    return $resetTime;
  }
	
}