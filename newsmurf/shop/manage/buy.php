<?php
define('IN_INDEX', 1);
include '../global.php';

if(isset($_POST['badge']))
		{
			if(isset($_POST['id']))
			{
				if($points->checkId($_POST['id'], 'points_badge'))
				{
					if(!$points->hasBadge($_SESSION['points']['id'], $points->badgeCode($_POST['id'])))
					{
						if($points->getPoints($_SESSION['points']['id']) >= $points->badgeCost($_POST['id']))
						{
							$points->takePoints($_SESSION['points']['id'], $points->badgeCost($_POST['id']));
							$points->giveBadge($_SESSION['points']['id'], $points->badgeCode($_POST['id']));
							$points->addLogs('Badge', 'Purchase Successfull', $points->badgeCode($_POST['id']));
							echo 'Purchase Successfull';
						}else{
							$points->addLogs('Badge', 'fail', $points->badgeCode($_POST['id']));
							echo 'You don\'t have enough points';
						}// Points check
					}//Badge Check
					else
					{
						echo 'You already have this badge!';
					}// Badge check end
				} // ID check
				else
				{
					echo 'ID does not exist, hacking?';
				}
			} // Post ID isset
			
		}
		elseif(isset($_POST['furni']))
		{
			if(isset($_POST['id']))
			{
				if($points->checkId($_POST['id'], 'points_furni'))
				{
					if($points->getPoints($_SESSION['points']['id']) >= $points->furniCost($_POST['id']))
					{
						$points->takePoints($_SESSION['points']['id'], $points->furniCost($_POST['id']));
						$points->giveFurni($_SESSION['points']['id'], $points->furniItem($_POST['id']));
						echo 'Purchase Successfull';
						$points->addLogs('Furni', 'Purchase Successfull', $points->furniItem($_POST['id']));
					}else{
					echo 'You don\'t have enough points!';
					$points->addLogs('Furni', 'fail', $points->furniItem($_POST['id']));
					}
				}
				else
				{
					echo 'ID does not exist, hacking?';
				}
			}//ID for furni isset
		}
		elseif(isset($_POST['vip']))
		{
			if(isset($_POST['id']))
			{
				if($points->checkId($_POST['id'], 'points_vip'))
				{
					if($points->getPoints($_SESSION['points']['id']) >= $points->vipCost($_POST['id']))
					{
						$points->takePoints($_SESSION['points']['id'], $points->vipCost($_POST['id']));
						$points->vipGive($_SESSION['points']['username'], $points->vipCredits($_POST['id']), $points->vipTime($_POST['id']));
						echo 'Purchase Successfull';
						$points->addLogs('VIP', 'Purchase Successfull', $points->vipTime($_POST['id']));
					}else{
					echo 'You don\'t have enough points!';
					$points->addLogs('VIP', 'Fail', $points->vipTime($_POST['id']));
					}
				}
				else
				{
					echo 'ID does not exist, hacking?';
				}
			}//ID for VIP isset
		}
		elseif(isset($_POST['credits']))
		{
			if(isset($_POST['id']))
			{
				if($points->checkId($_POST['id'], 'points_credits'))
				{
					if($points->getPoints($_SESSION['points']['id']) >= $points->creditsPoints($_POST['id']))
					{
						$points->takePoints($_SESSION['points']['id'], $points->creditsPoints($_POST['id']));
						$points->giveCredits($_SESSION['points']['username'], $points->creditsCredits($_POST['id']));
						echo 'Purchase Successfull';
						$points->addLogs('Credits', 'Purchase Successfull', $points->creditsCredits($_POST['id']));
					}else{
						echo 'You don\'t have enough points!';
						$points->addLogs('Credits', 'Fail', $points->creditsCredits($_POST['id']));
					}
				}
				else
				{
					echo 'ID does not exist, hacking?';
				}
			}//ID for credits isset
		}
		elseif(isset($_POST['pixels']))
		{
			if(isset($_POST['id']))
			{
				if($points->checkId($_POST['id'], 'points_pixels'))
				{
					if($points->getPoints($_SESSION['points']['id']) >= $points->pixelsPoints($_POST['id']))
					{
						$points->takePoints($_SESSION['points']['id'], $points->pixelsPoints($_POST['id']));
						$points->givePixels($_SESSION['points']['username'], $points->pixelsPixels($_POST['id']));
						echo 'Purchase Successfull';
						$points->addLogs('Pixels', 'Purchase Successfull', $points->pixelsPixels($_POST['id']));
					}else{
					echo 'You don\'t have enough points!';
					$points->addLogs('Pixels', 'Fail', $points->pixelsPixels($_POST['id']));
					}
				}
				else
				{
					echo 'ID does not exist, hacking?';
				}
			}//ID for pixels isset
		}
		elseif(isset($_POST['commands']))
		{
			if(isset($_POST['id']))
			{
				if($points->checkId($_POST['id'], 'points_commands'))
				{	
					if($points->getPoints($_SESSION['points']['id']) >= $points->commandsCost($_POST['id']) && $points->getPoints($_SESSION['points']['id']) > 0)
					{
						if(!$points->hasCmd($_SESSION['points']['id'], $points->commandsCmd($_POST['id'])))
						{
							if($points->hasCommands($_SESSION['points']['id']))
							{
								if($_SESSION['points']['vip'] == 'Purchase Successfull')
								{
									$points->takePoints($_SESSION['points']['id'], $points->commandsCost($_POST['id']));
									$points->cmdVipHascmds(commandsCmd($_POST['id']), $_SESSION['points']['id']);
									echo 'Purchase Successfull';
									$points->addLogs('Command', 'Purchase Successfull', $points->commandsCmd($_POST['id']));
								}
								else
								{
									$points->takePoints($_SESSION['points']['id'], $points->commandsCost($_POST['id']));
									$points->cmdHascmds(commandsCmd($_POST['id']), $_SESSION['points']['id']);
									echo 'Purchase Successfull';
									$points->addLogs('Command', 'Purchase Successfull', $points->commandsCmd($_POST['id']));
								} //is or isn't VIP
							}
							else
							{
								if($_SESSION['points']['vip'] == 'Purchase Successfull')
								{
									$points->takePoints($_SESSION['points']['id'], $points->commandsCost($_POST['id']));
									$points->cmdVipNocmds(commandsCmd($_POST['id']), $_SESSION['points']['id']);
									echo 'Purchase Successfull';
									$points->addLogs('Command', 'Purchase Successfull', $points->commandsCmd($_POST['id']));
								}
								else
								{
									$points->takePoints($_SESSION['points']['id'], $points->commandsCost($_POST['id']));
									$points->cmdNocmds($points->commandsCmd($_POST['id']), $_SESSION['points']['id']);
									echo 'Purchase Successfull';
									$points->addLogs('Command', 'Purchase Successfull', $points->commandsCmd($_POST['id']));
								} //is or isn't VIP
							}

						}//cmd check
						else
						{
							echo 'You already have this command!';
							$points->addLogs('Command', 'Fail-Has command', $points->commandsCmd($_POST['id']));
						}
					}else{// points check
						echo 'You don\'t have enough points!';
						$points->addLogs('Command', 'Fail', $points->commandsCmd($_POST['id']));
					}
				}
				else
				{
					echo 'ID does not exist, hacking?';
				}
			}//ID for commands isset
		}//POST BADGE, FURNI AND SHIT
		
?>