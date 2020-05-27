<?php 

namespace Revolution;
if(!defined('IN_INDEX')) { die('Sorry, you cannot access this file.'); }
class html implements iHTML
{

	private $html;

	final public function get($file)
	{
		global $template, $_CONFIG;
		
		if($file != null && ctype_alnum($file))
		{
			if(file_exists('app/tpl/skins/'.$_CONFIG['template']['style'].'/' . $file . '.php'))
			{
				ob_start();
    			include('app/tpl/skins/'.$_CONFIG['template']['style'].'/' . $file . '.php');
    			$this->html .= ob_get_contents();
    			ob_end_clean();
   				
   			 	$this->setHTML();
			}
			else
			{
				$this->get('404');
			}
		}
		else
		{
			header('Location: '.$_CONFIG['hotel']['url'].'/index');
			exit;
		}

	}
	
	final public function getHK($file)
	{
		global $template, $_CONFIG;
		
		if($file != null)
		{
			if(file_exists('../app/tpl/skins/'.$_CONFIG['template']['style'].'/hk/' . $file . '.php'))
			{
				ob_start();
				require_once('../app/tpl/skins/'.$_CONFIG['template']['style'].'/hk/' . $file . '.php');
				$this->html .= ob_get_contents();
				ob_end_clean();
			
				$this->setHTML();
			}
			else
			{
				$this->getHK('404');
			}
		}
		else
		{
			$this->getHK('dash');
		}
	}
		
	final public function setHTML()
	{
		global $template;
		$template->tpl .= $this->html;
		unset($this->html);
	}


}
?>
