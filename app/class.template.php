<?php

namespace Revolution;
if(!defined('IN_INDEX')) { die('Sorry, you cannot access this file.'); }
class template implements iTemplate
{

	public $tpl;
	
	private $params = array();

	final public function Initiate()
	{
		global $_CONFIG, $users, $engine, $core, $template;
		$this->setParams('hotelName', $_CONFIG['hotel']['name']);
		$this->setParams('hotelDesc', $_CONFIG['hotel']['desc']);
		$this->setParams('url', $_CONFIG['hotel']['url']);
		$this->setParams('online', $core->getOnline());
		$this->setParams('status', $core->getStatus());
		$this->setParams('web_build', $_CONFIG['hotel']['web_build']);
		$this->setParams('external_vars', $_CONFIG['hotel']['external_vars']);
		$this->setParams('external_texts', $_CONFIG['hotel']['external_texts']);
		$this->setParams('swf_folder', $_CONFIG['hotel']['swf_folder']);
		$this->setParams('furni_data', $_CONFIG['hotel']['furni_data']);
		$this->SetParams('product_data', $_CONFIG['hotel']['product_data']);
		$this->setParams('server_ip', $_CONFIG['hotel']['server_ip']);
		$this->setParams('server_port', $_CONFIG['hotel']['server_port']);

		//Mysql Configuration
		$this->setParams('mysql_host', $_CONFIG['mysql']['hostname']);
		$this->setParams('mysql_port', $_CONFIG['mysql']['port']);
		
		//Templating
		$this->setParams('skin', $_CONFIG['template']['style']);

		//Ads
		$this->setParams('ads', $_CONFIG['hotel']['advertising']);
		
		//Social
		$this->setParams('facebook', $_CONFIG['social']['facebook']);
		$this->setParams('twitter', $_CONFIG['social']['twitter']);
		$this->setParams('instagram', $_CONFIG['social']['instagram']);

		if($users->isLogged())
		{	
			$this->setParams('username', $users->getInfo($_SESSION['user']['id'], 'username'));
			$this->setParams('rank', $users->getInfo($_SESSION['user']['id'], 'rank'));
			$this->setParams('motto', $users->getInfo($_SESSION['user']['id'], 'motto'));
			$this->setParams('email', $users->getInfo($_SESSION['user']['id'], 'mail'));
			$this->setParams('coins', $users->getInfo($_SESSION['user']['id'] ,'credits'));
			$this->setParams('points', $users->getInfo($_SESSION['user']['id'] ,'vip_points'));
			$this->setParams('activitypoints', $users->getInfo($_SESSION['user']['id'], 'activity_points'));
			$this->setParams('figure', $users->getInfo($_SESSION['user']['id'], 'look'));
			$this->setParams('ip_last', $users->getInfo($_SESSION['user']['id'], 'ip_last'));
			$this->setParams('volume', $users->getInfo($_SESSION['user']['id'], 'volume'));
			$this->setParams('lastSignedIn',  date($users->getInfo($_SESSION['user']['id'],  'last_online')));
			
			if($this->params['rank'] > 7)
			{
				$this->setParams('housekeeping', '<li><a href="ase/login">ArticleHK</a></li>'); 
			}
			else
			{
				$this->setParams('housekeeping', ''); 
			}
			
			if($_GET['url'] == 'me' || $_GET['url'] == 'account')
			{
				$template->form->getPageHome();				
			}
			if($_GET['url'] == 'news' || $_GET['url'] == 'articles')
			{
				$template->form->getPageNews();
			}
			if($_GET['url'] == 'community')
			{
				$template->form->getPageUserCoins();
				$template->form->getPageUserPixels();
				$template->form->getPageUserRespect();
				$template->form->getPageUserActivity();
			}	
		}
		
	}
	
	final public function setParams($key, $value)
	{	
		$this->params[$key] .= $value; 
	}
	
	final public function filterParams($str)
    {
        foreach($this->params as $key => $value)
        {
            $str = str_ireplace('{' . $key . '}', $value, $str);
        }

        return $str;
	}
   	
	final public function write($str)
	{
		$this->tpl .= $str;
	}
	
	final public function outputTPL()
	{
		echo $this->filterParams($this->tpl);
		unset($this->tpl);
	}
}
?>
