<?php

namespace Revolution;
if(!defined('IN_INDEX')) { die('Sorry, you cannot access this file.'); }
interface iTemplate
{

	public function Initiate();

	public function setParams($key, $value);

	public function filterParams($str);
	
	public function write($str);
	
	public function outputTPL();
	
}	
?>