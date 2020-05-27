<?php

namespace Revolution;
if(!defined('IN_INDEX')) { die('Sorry, you cannot access this file.'); }
class users implements iUsers
{
	
	/*-------------------------------Authenticate-------------------------------------*/ 
	
	final public function isLogged()
	{
		if(isset($_SESSION['user']['id']))
		{
			return true;
		}
		
		return false;
	}
	
	/*-------------------------------Checking of submitted data-------------------------------------*/ 
	
	final public function validName($username) 	
	{
		if(strlen($username) <= 25 && ctype_alnum($username)) 		
	 	{ 			
	 		return true; 		
	 	} 		 		
	 	
	 	return false; 	
	} 	 	
		 
	final public function validEmail($email) 	
	{ 		
		return preg_match("/^[a-z0-9_\.-]+@([a-z0-9]+([\-]+[a-z0-9]+)*\.)+[a-z]{2,7}$/i", $email); 	
	} 	 	
	
	final public function validSecKey($seckey)
	{
		if(is_numeric($seckey) && strlen($seckey) == 4 && $seckey = "1337" && $seckey != "")
		{
			return true;
		}
		
		return false;
	}
	
	final public function nameTaken($username) 	
	{ 		
	 	global $engine; 		
	 	
		if($engine->num_rows("SELECT * FROM users WHERE username = '" . $username . "' LIMIT 1") > 0)
		{
			return true;
		} 	
		
		return false;
	} 
	
	final public function emailTaken($email)
	{
		global $engine;
		
		if($engine->num_rows("SELECT * FROM users WHERE mail = '" . $email . "' LIMIT 1") > 0)
		{
			return true;
		}
		
		return false;
	}
		
	final public function userValidation($username, $password)
	{ 		
		global $engine; 
		if($engine->num_rows("SELECT * FROM users WHERE username = '" . $username . "' AND password = '" . $password . "' LIMIT 1") > 0)
		{
			return true;
		} 	
		 
		return false;
	} 	 	
	
	/*-------------------------------Stuff related to bans-------------------------------------*/ 
	
	final public function isBanned($value)
	{
		global $engine;
		if($engine->num_rows("SELECT * FROM bans WHERE value = '" . $value . "' LIMIT 1") > 0)
		{
			return true;
		}
			
		return false;
	}
	
	final public function getReason($value)
	{
		global $engine;
		return $engine->result("SELECT reason FROM bans WHERE value = '" . $value . "' LIMIT 1");
	}
	
	final public function hasClones($ip)
	{
		global $engine;
		if($engine->num_rows("SELECT * FROM users WHERE ip_reg = '" . $_SERVER['REMOTE_ADDR'] . "'") == 5)		{
			return true;
		}
		
		return false;
	}
	
	/*-------------------------------Login or Register user-------------------------------------*/ 
	
	final public function register()
	{
		global $core, $template, $_CONFIG;
		
		if(isset($_POST['register']))
		{
			unset($template->form->error);
			
			$template->form->setData();
				
			if($this->validName($template->form->reg_username))
			{
				if(!$this->nameTaken($template->form->reg_username))
				{
					if($this->validEmail($template->form->reg_email))
					{
						if(!$this->emailTaken($template->form->reg_email))
						{
							if(strlen($template->form->reg_password) > 6)
							{
								if($template->form->reg_password == $template->form->reg_rep_password)
								{
									/*if(isset($template->form->reg_seckey))
									{
										if($this->validSecKey($template->form->reg_seckey))
										{
											//Continue
										}
										else
										{
											$template->form->error = 'Gib einen richtigen Beta Code an!';
											return;
										}
									}*/
									if($this->isBanned($_SERVER['REMOTE_ADDR']) == false)
									{
										if(!$this->hasClones($_SERVER['REMOTE_ADDR']))
										{
											if(!isset($template->form->reg_gender)) { $template->form->reg_gender = 'M'; }
											if(!isset($template->form->reg_figure)) { $template->form->reg_figure = $_CONFIG['hotel']['figure']; }
										
											$this->addUser($template->form->reg_username, $core->hashed($template->form->reg_password), $template->form->reg_email, $_CONFIG['hotel']['motto'], $_CONFIG['hotel']['credits'], $_CONFIG['hotel']['pixels'], 1, $template->form->reg_figure, $template->form->reg_gender, $core->hashed($template->form->reg_key));
							
											$this->turnOn($template->form->reg_username);
									
											header('Location: ' . $_CONFIG['hotel']['url'] . '/me');
											exit;
										}
										else
										{
											$template->form->error = 'Du kannst dich nur einmal anmelden';
										}
									}
									else
									{
										$template->form->error = 'Deine Ip Adresse ist gebannt.<br />';
										$template->form->error .= 'Grund: ' . $this->getReason($_SERVER['REMOTE_ADDR']);
										return;
									}
								}
								else	
								{
									$template->form->error = 'Die Passw&oumlrter sind nicht gleich';
									return;
								}

							}
							else
							{
								$template->form->error = 'Das Passwort ist zu kurz';
								return;
							}
						}
						else
						{
							$template->form->error = 'Email: <b>' . $template->form->reg_email . '</b> wurde schon eingetragen';
							return;
						}
					}
					else
					{
						$template->form->error = 'Email Adresse unzul&aumlssig';
						return;
					}
				}
				else
				{
					$template->form->error = 'Der Name wird schon verwendet';
					return;
				}
			}
			else
			{
				$template->form->error = 'Benutze einen anderen Namen';
				return;
			}
		}
	}	
	
	final public function login()
	{
		global $template, $_CONFIG, $core;
		
		if(isset($_POST['login']))
		{
			$template->form->setData();
			unset($template->form->error);
			
			if($this->nameTaken($template->form->log_username))
			{
				if($this->isBanned($template->form->log_username) == false || $this->isBanned($_SERVER['REMOTE_ADDR']) == false)
				{
					if($this->userValidation($template->form->log_username, $core->hashed($template->form->log_password)))
					{
						$this->turnOn($template->form->log_username);
						$this->updateUser($_SESSION['user']['id'], 'ip_last', $_SERVER['REMOTE_ADDR']);
						$template->form->unsetData();
						header('Location: ' . $_CONFIG['hotel']['url'] . '/me');
						exit;
					}
					else
					{
						$template->form->error = 'Das eingegebene Passwort ist nicht korrekt';
						return;
					}
				}
				else
				{
					$template->form->error = 'Dieser Benutzer ist gebannt<br />';
					$template->form->error .= 'Reason: ' . $this->getReason($template->form->log_username);
					return;
				}
			}
			else
			{
				$template->form->error = 'Der Benutzername existiert nicht';
				return;
			}
		}
	}
	
	final public function loginHK()
	{
		global $template, $_CONFIG, $core;
		
		if(isset($_POST['login']))
		{	
			$template->form->setData();
			unset($template->form->error);
			
			if(isset($template->form->username) && isset($template->form->password))
			{
				if($this->nameTaken($template->form->username)) 
				{	 
					if($this->userValidation($template->form->username, $core->hashed($template->form->password)))
					{
						if(($this->getInfo($_SESSION['user']['id'], 'rank')) >= 4)
						{
							$_SESSION["in_hk"] = true;
							header("Location:".$_CONFIG['hotel']['url']."/ase/dash");
							exit;
						}
						else
						{
							$template->form->error = 'Incorrect access level.';
							return;
						}
					}
					else
					{
						$template->form->error = 'Incorrect password.';
						return;
					}		
				}
				else
				{
					$template->form->error = 'User does not exist.';
					return;
				}
			}
	
			$template->form->unsetData();
		}
	}	
	
	final public function help()
	{
		global $template, $_CONFIG;
		$template->form->setData();
		
		if(isset($template->form->help))
		{
			$to = $_CONFIG['hotel']['email'];
 			$subject = "Help from H.bbo user - " . $this->getInfo($_SESSION['user']['id'], 'username');
 			$body = $template->form->question;
 				
 			if (mail($to, $subject, $body))
 			{
 				$template->form->error = 'Message successfully sent! We will answer you shortly!';
 			} 
 			else 
 			{
  				 $template->form->error = 'Message delivery failed.';
 			}
		}
	}

	/*-------------------------------Account settings-------------------------------------*/ 
	
	final public function updateAccount()
	{
		global $template, $_CONFIG, $core, $engine;
		
		if(isset($_POST['account']))
		{
		
			if(isset($_POST['acc_motto']) && strlen($_POST['acc_motto']) < 30 && $_POST['acc_motto'] != $this->getInfo($_SESSION['user']['id'], 'motto'))
			{
				$this->updateUser($_SESSION['user']['id'], 'motto', $engine->secure($_POST['acc_motto']));
				header('Location: '.$_CONFIG['hotel']['url'].'/account');
				exit;
			}
			else
			{
				$template->form->error = 'Bitte nimm ein anderes Motto.';
			}
			if(isset($_POST['acc_email']) && $_POST['acc_email'] != $this->getInfo($_SESSION['user']['id'], 'mail'))
			{
				if($this->validEmail($_POST['acc_email']))
				{
					$this->updateUser($_SESSION['user']['id'], 'mail', $engine->secure($_POST['acc_email']));
					header('Location: '.$_CONFIG['hotel']['url'].'/account');
					exit;
				}
				else
				{
					
					$template->form->error = 'ung&uuml;ltige E-Mail Adresse';
					return;
				}
			}
			
			if(!empty($_POST['acc_old_password']) && !empty($_POST['acc_new_password']))
			{
				if($this->userValidation($this->getInfo($_SESSION['user']['id'], 'username'), $core->hashed($_POST['acc_old_password'])))
				{
					if(strlen($_POST['acc_new_password']) >= 8)
					{
						$this->updateUser($_SESSION['user']['id'], 'password', $core->hashed($_POST['acc_new_password']));
						header('Location: '.$_CONFIG['hotel']['url'].'/me');
						exit;
					}
					else
					{
						$template->form->error = 'Das Passwort ist zu kurz';
						return;
					}
				}
				else
				{
					$template->form->error = 'Das Passwort ist falsch';
					return;
				}
			}
		}		
	}
		
		
	final public function turnOn($k)
	{	
		$j = $this->getID($k);
		$this->createSSO($j);
		$_SESSION['user']['id'] = $j;	
		$this->cacheUser($j);	
		unset($j);
	}
	
	/*-------------------------------Loggin forgotten-------------------------------------*/ 	
	
	final public function forgotten()
	{
		global $template, $_CONFIG, $core;
		
		if(isset($_POST['forgot']))
		{
		
			$template->form->setData();
			unset($template->form->error);
			
			if($this->nameTaken($template->form->for_username))
			{
				if(strlen($template->form->for_password) > 6)
				{
					if($this->getInfo($this->getID($template->form->for_username), 'seckey') == $core->hashed($template->form->for_key))
					{
						$this->updateUser($this->getID($template->form->for_username), 'password', $core->hashed($template->form->for_password));
						$template->form->error = 'Account recovered! Go <b><a href="index">here</a></b> to login!';
						return;
					}
					else
					{
						$template->form->error = 'Secret key is incorrect';
						return;
					}
				}
				else
				{
					$template->form->error = 'Password must have more than 6 characters.';
					return;
				}
			}
			else
			{
				$template->form->error = 'Username does not exist';
				return;
			}
		}
	}
	
	/*-------------------------------Create SSO auth_ticket-------------------------------------*/ 
	
	final public function createSSO($k) 	
	{ 	 	
		$sessionKey = 'RevCMS-'.rand(9,999).'/'.substr(sha1(time()).'/'.rand(9,9999999).'/'.rand(9,9999999).'/'.rand(9,9999999),0,33);
		
		$this->updateUser($k, 'auth_ticket', $sessionKey);
		
		unset($sessionKey);
	} 	 
		
	/*-------------------------------Adding/Updating/Deleting users-------------------------------------*/ 
	
	final public function addUser($username, $password, $email, $motto, $credits, $pixels, $rank, $figure, $gender, $seckey) 	
	{ 		
		global $engine; 		 		 		 		
		$sessionKey = 'RevCMS-'.rand(9,999).'/'.substr(sha1(time()).'/'.rand(9,9999999).'/'.rand(9,9999999).'/'.rand(9,9999999),0,33);
		$engine->query("INSERT INTO users (username, password, mail, motto, credits, activity_points, rank, look, gender, seckey, ip_last, ip_reg, account_created, last_online, auth_ticket) VALUES('" . $username . "', '" . $password . "', '" . $email . "', '" . $motto . "', '" . $credits . "', '" . $pixels . "', '" . $rank . "', '" . $figure . "', '" . $gender . "', '" . $seckey . "', '" . $_SERVER['REMOTE_ADDR'] . "', '" . $_SERVER['REMOTE_ADDR'] . "', '" . time() . "', '" . time() . "', '" . $sessionKey . "')"); 	
		unset($sessionKey);	
		 			 
	}	 		 	
		 
	final public function deleteUser($k) 	
	{ 		
		global $engine; 		 		
	 	$engine->query("DELETE FROM users WHERE id = '" . $k . "' LIMIT 1"); 		
	 	$engine->query("DELETE FROM items WHERE userid = '" . $k . "' LIMIT 1"); 		
		$engine->query("DELETE FROM rooms WHERE ownerid = '" . $k . "' LIMIT 1"); 	
	} 	
	  	
	final public function updateUser($k, $key, $value) 	
	{ 		
	 	global $engine; 		 		
	 	$engine->query("UPDATE users SET " . $key . " = '" . $engine->secure($value) . "' WHERE id = '" . $k . "' LIMIT 1");
	 	$_SESSION['user'][$key] = $engine->secure($value);		
	} 
	
	/*-------------------------------Handling user information-------------------------------------*/ 	 
	
	final public function cacheUser($k)
	{
		global $engine; 		 	
		$userInfo = $engine->fetch_assoc("SELECT username, rank, motto, mail, credits, activity_points, look, auth_ticket, ip_last FROM users WHERE id = '" . $k . "' LIMIT 1");
		
		foreach($userInfo as $key => $value)
		{
			$this->setInfo($key, $value);
		}
	}	
	
	final public function setInfo($key, $value)
	{
		global $engine;
		$_SESSION['user'][$key] = $engine->secure($value);
	}

	final public function getInfo($k, $key)
	{
		global $engine;
		if(!isset($_SESSION['user'][$key]))
		{
			$value = $engine->result("SELECT $key FROM users WHERE id = '" . $engine->secure($k) . "' LIMIT 1"); 
			if($value != null)
			{			
				$this->setInfo($key, $value);
			}
		}
			
		return $_SESSION['user'][$key];
	}
	
	
	
	/*-------------------------------Get user ID or Username-------------------------------------*/ 
	
	final public function getID($k) 	
	{ 		
		global $engine; 		
		return $engine->result("SELECT id FROM users WHERE username = '" . $engine->secure($k) . "' LIMIT 1"); 	
	} 		
	
	final public function getUsername($k)
	{
		global $engine;
		return $this->getInfo($_SESSION['user']['id'], 'username');
	}
	
}
?>
