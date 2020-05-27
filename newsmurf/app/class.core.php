<?php 

namespace Revolution;
if(!defined('IN_INDEX')) { die('Sorry, you cannot access this file.'); }
class core implements iCore
{

	final public function getOnline()
	{
		global $engine;
		return $engine->result("SELECT users_online FROM server_status");
	}
	
	final public function getStatus()
	{
		global $engine;
		return $engine->result("SELECT status FROM server_status");
	}
	
	final public function systemError($who, $txt)
	{
		die(include('/var/customers/webs/ni192676_1/progress.php'));
	}
	
	final public function handleCall($k)
	{
		global $users, $template, $_CONFIG;
		
		if($_CONFIG['hotel']['in_maint'] == false)
		{
			if(!isset($_SESSION['user']['id']))
			{
				switch($k)
				{
					case "index":
					case null:
					case "login":
						$users->login();
					break;
					
					case "register":
					$users->register();
					break;
					
					case "forgot":
						$users->forgotten();
					break;
					
					case "maintenance":
					case "ToS":
						//
					break;
				
					case "me":
					case "account":
					case "client":
					case "minigames":
					case "shop":
					case "badges":
					case "account":
					case "news":
					case "mod":
					case "exp":
					case "topuser":
					case "rdw":
					case "wtool":
						header('Location: '.$_CONFIG['hotel']['url'].'/index');
						exit;
					break;
					
					default:
						//Nothing
					break;
				}
			}
			else
			{
				if($_SESSION['user']['ip_last'] != $_SERVER['REMOTE_ADDR'])
				{
					header('Location: '.$_CONFIG['hotel']['url'].'/logout');
				}
				
				switch($k)
				{
					case "index":
					case null:
						header('Location: '.$_CONFIG['hotel']['url'].'/me');
					exit;
					break;
					
					case "register":
					header('Location: '.$_CONFIG['hotel']['url'].'/me');
					exit;
					break;
					
					case "forgot":
						header('Location: '.$_CONFIG['hotel']['url'].'/me');
						exit;
					break;
					
					case "client":
						$users->createSSO($_SESSION['user']['id']);
						$users->updateUser($_SESSION['user']['id'], 'ip_last', $_SERVER['REMOTE_ADDR']);
						$template->setParams('sso', $users->getInfo($_SESSION['user']['id'], 'auth_ticket'));
					break;
						
					case "help":
						$users->help();
					break;
				
					case "account":
						$users->updateAccount();
					break;
					
					default:
						//nothing
					break;
				}
			}
		}
		elseif($_GET['url'] != 'maintenance')
		{
			header('Location: '.$_CONFIG['hotel']['url'].'/maintenance');
			exit;
		}
	}
	
	final public function handleCallHK($k)
	{
		global $users, $engine, $_CONFIG;
		
		if($_SESSION["in_hk"] != true)
		{
			if(isset($_SESSION['user']['id']))
			{
				if($k == 'login')
				{
					$users->loginHK();
				}
				else
				{
					header("Location:".$_CONFIG['hotel']['url']."/ase/login");
					exit;
				}
			}
			else
			{
				header("Location:".$_CONFIG['hotel']['url']."/index");
				exit;
			}
		}
		else
		{
			if(!isset($k))
			{
				header("Location:".$_CONFIG['hotel']['url']."/ase/dash");
				exit;
			}
			else
			{
				if($k == 'balist')
				{
						
					if(isset($_GET["unban"]))
					{
						$user = $engine->secure($_GET["unban"]);
						$engine->query("DELETE FROM bans WHERE id = '" . $user . "'");
						header("Location: ".$_CONFIG['hotel']['url']."/ase/banlist");
						exit;
					}	
				}
			}
		}
	}
	
	final public function hashed($password)
	{
		return md5($password);
	}
}
?>
