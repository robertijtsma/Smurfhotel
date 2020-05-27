<?php

namespace Revolution;
if(!defined('IN_INDEX')) { die('Sorry, you cannot access this file.'); }
interface iCore
{
	public function getOnline();
	
	public function getStatus();
	
	public function systemError($who, $txt);
	
	public function handleCall($k);
	
	public function hashed($password);

}
?>