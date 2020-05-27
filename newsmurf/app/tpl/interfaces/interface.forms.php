<?php 

namespace Revolution;
if(!defined('IN_INDEX')) { die('Sorry, you cannot access this file.'); }
interface iForms
{

	public function setData();

	public function unsetData();
	
	public function writeData($key);
	
	public function outputError();
	
	public function getPageHome();
	
	public function getPageNews();

	public function getPageUserCoins();

	public function getPageUserPixels();

	public function getPageUserRespect();

	public function getPageUserActivity();
	
}
?>
