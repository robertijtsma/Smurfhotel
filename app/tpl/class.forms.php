<?php

namespace Revolution;
use PDO;
if(!defined('IN_INDEX')) { die('Sorry, you cannot access this file.'); }
class forms implements iForms
{

	public $error;

	final public function setData()
	{
		global $engine;
		foreach($_POST as $key => $value)
		{
			if($value != null)
			{
				$this->$key = $engine->secure($value);
			}
			else
			{
				$this->error = 'Du must alle Felder eintragen';
				return;
			}
		}
	
	}
	
	final public function unsetData()
	{
		global $template;
		foreach($this as $key => $value)
		{
			unset($this->$key);	
		}	
	}
	
	final public function writeData($key)
	{
		global $template;
		echo $this->$key;
	}
	
	final public function outputError()
	{
		global $template;
		if(isset($this->error))
		{
			echo "<div id='message'> " . $this->error . " </div>";
		}
	}
	
	/* Manage different pages */
	
	final public function getPageNews()
	{
		global $template, $engine;
		$a = 1;
				$result = $engine->query("SELECT title, id FROM cms_news WHERE id != '" . $engine->secure($_GET['id']) . "' ORDER BY id DESC");
				//OSTEREI11!!
				while($news1 = $result->fetch(PDO::FETCH_ASSOC))
				{
					$template->setParams('newsList', '&laquo; <a href="index.php?url=news&id='.$news1["id"].'">' . $news1['title'] . '</a><br/>');
				}
				
				$news = $engine->fetch_assoc("SELECT title, shortstory, longstory, author, published, image FROM cms_news WHERE id = '" . $engine->secure($_GET['id']) . "' LIMIT 1");
				$template->setParams('newsTitle', $news['title']);
				$template->setParams('newsContent', $news['longstory']);
				$template->setParams('newsAuthor', $news['author']);
				$template->setParams('newsDate', $news['published']);
				$template->setParams('newsPreview', $news['shortstory']);
				$template->setParams('newsIMG', $news['image']);
				$template->setParams('newsList', '&laquo; <a href="index.php?url=news&id='.$news1["id"].'">' . $news['title'] . '</a><br/>');
			
				unset($result);
				unset($news1);
				unset($news);
	}
	
	final public function getPageHome()
	{
		global $template, $engine, $_CONFIG;
		$a = 1;
		$data = $engine->query("SELECT title, id, published, shortstory, image FROM cms_news ORDER BY id DESC LIMIT 5");
                
		while($news = $data->fetch(PDO::FETCH_ASSOC))
       	{
            $template->setParams('newsTitle-' . $a, $news['title']);
            $template->setParams('newsID-' . $a, $news['id']);
            $template->setParams('newsDate-' . $a, date("d-m-y", $news['published']));
            $template->setParams('newsCaption-' . $a, $news['shortstory']);
            $template->setParams('newsIMG-' . $a, $news['image']);
        	$a++;
        }
		
		unset($news);
		unset($data);
	}

	final public function getPageUserCoins()
	{
		global $template, $engine;
		$data = $engine->query("SELECT * FROM users WHERE rank < 3 ORDER BY credits DESC LIMIT 10");
                
		while($users = $data->fetch(PDO::FETCH_ASSOC))
	       	{
		    $template->setParams('credits', '<div class="container"><a>'.$users["username"].'</a><img src="https://habbo.city/habbo-imaging/avatarimage?figure='.$users["look"].'&size=b&direction=2&head_direction=2&gesture=sml&size=l"><br><text>'.$users["credits"].' Credits</text></div>');
		}
		unset($users);
		unset($data);
	}

	final public function getPageUserPixels()
	{
		global $template, $engine;
		$data = $engine->query("SELECT * FROM users WHERE rank < 3 ORDER BY activity_points DESC LIMIT 10");
                
		while($users = $data->fetch(PDO::FETCH_ASSOC))
	       	{
		    $template->setParams('pixels', '<div class="container"><a>'.$users["username"].'</a><img src="https://habbo.city/habbo-imaging/avatarimage?figure='.$users["look"].'&size=b&direction=2&head_direction=2&gesture=sml&size=l"><br><text>'.$users["activity_points"].' Pixels</text></div>');
		}
		unset($users);
		unset($data);
	}

	final public function getPageUserRespect()
	{
		global $template, $engine;
		$data = $engine->query("SELECT * FROM user_stats ORDER BY Respect DESC LIMIT 10");
                
		while($users = $data->fetch(PDO::FETCH_ASSOC))
	       	{
		    $sql = $engine->query("SELECT * FROM users WHERE id = '".$users['id']."' LIMIT 1");
		    $row = $sql->fetch(PDO::FETCH_ASSOC);
		    $template->setParams('respect', '<div class="container"><a>'.$row["username"].'</a><img src="https://habbo.city/habbo-imaging/avatarimage?figure='.$row["look"].'&size=b&direction=2&head_direction=2&gesture=sml&size=l"><br><text>'.$users["Respect"].' Respect</text></div>');
		}
		
		unset($row);
		unset($users);
		unset($data);
	}
	final public function getPageUserActivity()
	{
		global $template, $engine;
		$data = $engine->query("SELECT * FROM user_stats ORDER BY AchievementScore DESC LIMIT 10");
                
		while($users = $data->fetch(PDO::FETCH_ASSOC))
	       	{
		    $sql = $engine->query("SELECT * FROM users WHERE id = '".$users['id']."' LIMIT 1");
		    $row = $sql->fetch(PDO::FETCH_ASSOC);
		    if ($users["AchievementScore"] > 0) {
		   	 $template->setParams('activity', '<div class="container"><a>'.$row["username"].'</a><img src="https://habbo.city/habbo-imaging/avatarimage?figure='.$row["look"].'&size=b&direction=2&head_direction=2&gesture=sml&size=l"><br><text>'.$users["AchievementScore"].' Achievements</text></div>');
		   } else {
			$template->setParams('activity', '');
		   }
		}
		
		unset($row);
		unset($users);
		unset($data);
	}
}

?>
