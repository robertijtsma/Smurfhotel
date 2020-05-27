<?php

namespace Revolution;
if(!defined('IN_INDEX')) { die('Sorry, you cannot access this file.'); }
class forum
{
	/* Non-existant forum account */
	final public function createForumAccount($uid) {
		$getHabboUser = mysql_query("SELECT * FROM `users` WHERE `id` = '{$uid}' LIMIT 1");
		$thisUser = array();
		while($tuser = mysql_fetch_array($getHabboUser)) {
			 $thisUser['username'] = $tuser['username'];
			 $thisUser['user_id'] = $tuser['id'];
			 $thisUser['rank'] = $tuser['rank'];
		}
		mysql_query("INSERT INTO `forum_users` (`uid`, `username`, `rank`) VALUES ('{$thisUser['user_id']}', '{$thisUser['username']}', '{$thisUser['rank']}');");
	}

	final public function checkForAccount($uid) {
		$findForumUsers = mysql_query("SELECT * FROM `forum_users` WHERE `uid` = '{$uid}'");
		$count = mysql_num_rows($findForumUsers);
		if($count == 0) {
			return false;
		}else{
			return true;
		}
	}

	final public function sessionExists($uid) {
		if(empty($uid) == true) { return false; } else { return true; }
	}

	final public function userHasVisited($uid) {
		if($this->checkForAccount($uid) == true) {
			$findme = mysql_query("SELECT `visited` FROM `forum_users` WHERE `uid` = '{$uid}'");
			if(mysql_result($findme, 0) == "true") {
				return true;
			}else{
				return false;
			}
		}
	}

	/* Main functions */
	final public function updateUser($uid, $var, $val) {
		if($this->checkForAccount($uid) == true) {
			$update = mysql_query("UPDATE `forum_users` SET `{$var}` = '{$val}' WHERE `uid` = '{$uid}'") or die(mysql_error());
		}
	}

	final public function getUserData($uid, $var) {
		if($this->checkForAccount($uid) == true) {
			$check = mysql_query("SELECT `{$var}` FROM `forum_users` WHERE `uid` = '{$uid}' LIMIT 1") or die(mysql_error());
			return mysql_result($check, 0);
		}
	}

	final public function getLatestThreadID() {
		$getThreads = mysql_query("SELECT * FROM `forum_threads` ORDER BY `time` DESC LIMIT 1");
		while($thread = mysql_fetch_array($getThreads)) {
			return $thread['id'];
			break;
		}
	}

	final public function getLatestThreads($amount) {
		$getThreads = mysql_query("SELECT * FROM `forum_threads` ORDER BY `time` DESC LIMIT " . $amount);
		$colour[0] = "#e7e7e7"; $colour[1] = "#ffffff"; $count = 0;
		while($thread = mysql_fetch_array($getThreads)) {
			if($count == 0) { $count = 1; } else if($count == 1) { $count = 0; }
			echo "<tr name='{$thread['id']}' style='background-color: {$colour[$count]}'>";
				echo "<td style='padding: 5px;'><a href='{url}/forum/thread/{$thread['id']}'>{$thread['name']}</a></td>";
	            echo "<td style='padding: 5px;'>{$this->getUserData($thread['byid'], "username")}</td>";
	            echo "<td style='padding: 5px;'>" . date('H:i d/m/Y', $thread['time']) . "</td>";
	            echo "<td style='padding: 5px;'><a href='{url}/forum/f{$thread['cid']}'>{$this->getCategoryName($thread['cid'])}</a></td>";
	        echo "</tr>";
		}
	}

	final public function getTopPosters($amount) {
		$users = mysql_query("SELECT * FROM `forum_users` ORDER BY `post_count` DESC LIMIT " . $amount);
		$colour[0] = "#e7e7e7"; $colour[1] = "#ffffff"; $count = 0;
		while($user = mysql_fetch_array($users)) {
			if($count == 0) { $count = 1; } else if($count == 1) { $count = 0; }
			echo "<tr style='background-color: {$colour[$count]}'>";
				echo "<td style='padding: 5px;'>{$user['username']}</td>";
	            echo "<td style='padding: 5px;'>{$user['post_count']}</td>";
	        echo "</tr>";
		}
	}

	final public function getCategoryName($id) {
		$findme = mysql_query("SELECT `name` FROM `forum_categories` WHERE `id` = '{$id}' LIMIT 1");
		return mysql_result($findme, 0);
	}

	final public function getCategoryChild($id) {
		$id = $id - 1;
		$findme = mysql_query("SELECT `name` FROM `forum_categories` WHERE `id` = '{$id}' LIMIT 1");
		return mysql_result($findme, 0);
	}

	final public function getParentCategory($id) {
		$findparent = mysql_query("SELECT `sub_id` FROM `forum_categories` WHERE `id` = '{$id}' LIMIT 1");
		$theparent = $this->getCategoryName(mysql_result($findparent, 0));
		return $theparent;
	}

	final public function getCategory($cid) {
		$getit = mysql_query("SELECT * FROM `forum_categories` WHERE `id` = '{$cid}' LIMIT 1") or die(mysql_error());
		return $getit;
	}

	final public function getThreadParentID($id) {
		$findparent = mysql_query("SELECT `cid` FROM `forum_threads` WHERE `id` = '{$id}' LIMIT 1");
		return mysql_result($findparent, 0);
	}

	final public function getThread($tid) {
		$getit = mysql_query("SELECT * FROM `forum_threads` WHERE `id` = '{$tid}' LIMIT 1") or die(mysql_error());
		return $getit;
	}

	final public function getUserById($uid) {
		$getit = mysql_query("SELECT * FROM `forum_users` WHERE `id` = '{$uid}' LIMIT 1") or die(mysql_error());
		return $getit;
	}

	final public function getUserFigure($uid) {
		if($this->checkForAccount($uid) == true) {
			$getit = mysql_query("SELECT `look` FROM `users` WHERE `id` = '{$uid}' LIMIT 1") or die(mysql_error());
			return mysql_result($getit, 0);
		}
	}

	final public function getThreadTitle($tid) {
		$getit = mysql_query("SELECT `name` FROM `forum_threads` WHERE `id` = '{$tid}' LIMIT 1") or die(mysql_error());
		return mysql_result($getit, 0);
	}

	final public function convertRankToTitle($id) {
		switch($id) {
            case 0: return "Banned"; break;
            case 1: return "User"; break;
            case 2: return "VIP"; break;
            case 3: return "eXpert"; break;
            case 4: return "Moderator"; break;
            case 5: return "Senior Moderator"; break;
            case 6: return "Administrator"; break;
            case 7: return "Owner"; break;
        }
	}

	final public function displayError($id, $box = false) {
		if($box == true) {
			echo '<div class="habblet-container " style="widthx: 770px; width: 910px;">';
	        echo '<div class="cbb clearfix ">';
	        echo '<div style="padding: 5px;">';
		}
		switch($id) {
			case 1:
				echo '<div id="notfound-content" class="box-content">';
				echo '<p class="error-text">Sorry, but we can\'t find the page you requested.</p> <img id="error-image" src="{url}/app/tpl/skins/Habbo/images/error.gif" />';
				echo '<p class="error-text">Please try typing the URL again. If you end up back here, please use the \'Back\' button to get back to where you started.</p>';
				echo '</div>';
		    break;
		    case 2:
				echo '<div id="notfound-content" class="box-content">';
				echo '<p class="error-text">No posts have been posted in this section of the forum yet! Get it started by clicking \'Create New Thread\' just above this message!</p>';
				echo '<p class="error-text">If you occur any errors / bugs, please report them to the hotel owner or management team.</p>';
				echo '</div>';
		    break;
		    case 3:
				echo '<div id="notfound-content" class="box-content">';
				echo '<p class="error-text">Comments to this topic have either been disabled or the thread does not exist!</p>';
				echo '</div>';
		    break;
	    }
	    if($box == true) {
			echo '</div></div></div>';
		}
	}

	final public function write_location($id, $view) {
		$exitout = false;
	    if($view == "thread") {
	    	$getthreads = mysql_query("SELECT * FROM `forum_threads` WHERE `id` = '{$id}'");
	    	if(mysql_num_rows($getthreads) == 0) {
	    		$exitout = true;
	    	}
	    }else if($view == "category" || $view == "newthread") {
	    	$getcategories = mysql_query("SELECT * FROM `forum_categories` WHERE `id` = '{$id}' AND `sub_id` != '0'");
	    	if(mysql_num_rows($getcategories) == 0) {
	    		$exitout = true;
	    	}
	    }
	    if($exitout != true) {
			echo '<div class="habblet-container " style="widthx: 770px; width: 910px;">';
	        echo '<div class="cbb clearfix ">';
	        echo '<div style="padding: 5px;">';
	            echo 'You are here: <a href="{url}/forum">Forum Index</a>';
	            if($view == "category" && $id != "0") {
	                echo '<a href="{url}/forum/newthread/f' . $id . '" class="new-button green-button"><b>Create new thread</b><i></i></a>';
	            }
	            if($view == "category") {
	            	$mycategory = $this->getCategoryName($id);
	            	$parent = $this->getParentCategory($id);
	                echo " / " . $parent . " / <a href='{url}/forum/f{$id}'>" . $mycategory . "</a>";
	            }
	            if($view == "newthread") {
	            	$mycategory = $this->getCategoryName($id);
	            	$parent = $this->getParentCategory($id);
	                echo " / " . $parent . " / <a href='{url}/forum/f{$id}'>" . $mycategory . "</a> / Create new thread";
	            }
	            if($view == "thread") {
	            	$getthreadparentid = $this->getThreadParentID($id);
	            	$parent = $this->getParentCategory($getthreadparentid);
	            	$getchild = $this->getCategoryName($getthreadparentid);

	                $title = mysql_result(mysql_query("SELECT `name` FROM `forum_threads` WHERE `id` = '{$id}'"), 0);
	                echo " / " . $parent . " / <a href='{url}/forum/f{$getthreadparentid}'>" . $getchild . "</a>" . " / " . $title;
	            }
	        echo '</div>';
	        echo '</div>';
	        echo '</div>';
	    }
	}

	final public function templateCreate($type, $a, $b, $c, $d, $reply = false) {
		if($type == 'left-container') {
			$rank = $this->convertRankToTitle($this->getUserData($a, 'rank'));
			echo '<div class="habblet-container " style="width: 140px; float: left;">';
			if($reply == false) { echo '<div class="cbb clearfix green ">'; } else { echo '<div class="cbb clearfix blue ">'; }
				echo '<h2 class="title">' . $b . '</h2>';
				echo '<div style="padding: 5px;">';
				if($reply == false) {
					echo '<center><img alt="{username}" src="http://habbo.com/habbo-imaging/avatarimage?figure=' . $this->getUserFigure($a) . '&direction=2&head_direction=3"></center><br />';
				}else{
					echo '<center><img alt="{username}" src="http://habbo.com/habbo-imaging/avatarimage?figure=' . $this->getUserFigure($a) . '&direction=2&head_direction=3&size=s"></center><br />';
				}
					echo '<strong>Post Count: </strong>' . $c . '<br />';
                    echo '<strong>Rank: </strong>' . $rank;
                echo '</div>';
            echo '</div>';
            echo '</div>';
		}else if($type == 'right-container') {
			echo '<div class="habblet-container " style="width: 770px; float: left;">';
			if($reply == false) { echo '<div class="cbb clearfix green " style="min-height: 187px;">'; }
			else if($reply == true) { echo '<div class="cbb clearfix green " style="min-height: 132px;">'; }
				echo '<div style="padding: 5px;">';
					echo '<h2 style="margin: 0 0 4px 0; color: #F60; font-size: 16px;">' . $d . '</h2>';
					echo '<div style="color: #959699; margin-bottom: 8px; border-top: 1px solid #F60; padding-top: 7px;">Posted ' . date('H:i d/m/Y', $c) . '</div>';

					echo '<div name="content">';
						echo $b;
					echo '</div>';
					echo '<div name="spacer" style="display: block; height: 20px;"></div>';
                    echo '<div name="signature" style="border-top: 1px solid #959699; color: #959699;">';
                    echo '<div name="spacer" style="display: block; height: 5px;"></div>';
                        echo $this->clearup_decode($this->getUserData($a, 'signature'));
                    echo '</div>';
                echo '</div>';
            echo '</div>';
            echo '</div>';
		}else{
			echo "Unknown";
		}
	}

	final public function templateReplyBox($uid, $username) {
			// USER BOX
			echo '<div class="habblet-container " style="width: 140px; float: left;">';
			echo '<div class="cbb clearfix orange ">';
				echo '<h2 class="title">' . $username . '</h2>';
				echo '<div style="padding: 5px;">';
					echo '<center><img alt="{username}" src="http://habbo.com/habbo-imaging/avatarimage?figure=' . $this->getUserFigure($uid) . '&direction=2&head_direction=3&size=s"></center><br />';
					echo '<strong>Post Count: </strong>' . $this->getPostCount($uid) . '<br />';
                    echo '<strong>Rank: </strong>' . $this->convertRankToTitle($this->getUserData($uid, 'rank'));
                echo '</div>';
            echo '</div>';
            echo '</div>';

            // REPLY BOX
            echo '<div class="habblet-container " style="width: 770px; float: left;">';
			echo '<div class="cbb clearfix green " style="min-height: 132px;">';
			//echo print_r($_POST);
				echo '<div style="padding: 5px;">';
					echo '<div name="content">';
						echo '<form id="replybox" method="post">';
							echo '<textarea id="replyboxx" name="replyboxx" rows="10" cols="80" style="width: 100%"></textarea>';
							echo '<a onclick="subreply();" class="new-button green-button" style="margin-top: 5px;"><b>Post</b><i></i></a>';
						echo '</form>';
					echo '</div>';
                echo '</div>';
            echo '</div>';
            echo '</div>';
	}

	final public function errorMessage($message) {
		return "<div style='float: left; width: 100%; padding: 5px; color: #FFF; border-radius: 5px; background-color: #CC0000;'>{$message}</div>";
	}

	final public function updateThreadData($tid, $var, $val) {
		mysql_query("UPDATE `forum_threads` SET `{$var}` = '{$val}' WHERE `id` = '{$tid}' LIMIT 1") or die(mysql_error());
		return;
	}

	final public function newComment($uid, $comment, $tid) {
		$comment = $this->clearup($_POST['replyboxx']);
		$comment = mysql_real_escape_string($comment);

		$amIMuted = $this->getUserData($uid, 'muted');
		if($amIMuted != 'true') {
			mysql_query("INSERT INTO `forum_posts` (`uid`, `tid`, `content`, `time`) VALUES ('{$uid}', '{$tid}', '{$comment}', '" . time() . "');");
			$this->updateThreadData($tid, "lastreplied_time", time());
			$this->updateThreadData($tid, "lastreplier_id", $uid);
			echo '<meta http-equiv="refresh" content="0">';
		}else{
			// display some message
			echo $this->errorMessage("You are currently muted from the forum and cannot comment on any topics.");
		}
	}

	final public function newThread($uid, $title, $content, $cid) {
		$content = $this->clearup($_POST['nthreadbox']);
		$content = mysql_real_escape_string($content);

		$cat = $this->getCategory($cid);
		if(mysql_num_rows($cat) == 0) { echo $this->errorMessage("This category does not exist - please try again! If the problem persists, contact the management team!"); } else {
			$amIMuted = $this->getUserData($uid, 'muted');
			if($amIMuted != 'true') {
				if(strlen($content) >= 35) {
					mysql_query("INSERT INTO `forum_threads` (`name`, `byid`, `cid`, `content`, `time`, `lastreplied_time`, `lastreplier_id`) VALUES ('{$title}', '{$uid}', '{$cid}', '{$content}', '" . time() . "', '" . time() . "', '{$uid}');") or die(mysql_error());
					echo '<meta http-equiv="refresh" content="0;{url}/forum/thread/' . $this->getLatestThreadID() . '">';
				}else{
					echo $this->errorMessage("A thread must have a minimum of 35 characters!");
				}
			}else{
				// display some message
				echo $this->errorMessage("You are currently muted from the forum.");
			}
		}
	}

	final public function write_reply($uid, $tid) {
		if(empty($tid)) { return; }
		// get user details
		$thread = $this->getThread($tid);
		echo "<div style='display: block; width: 1px;'>&nbsp;</div>";
		if(mysql_num_rows($thread) == 0) { echo $this->displayError(3, true); } else {
			$user = $this->getUserById($uid);
			while($u = mysql_fetch_array($user)) {
				$this->templateReplyBox($uid, $u['username']);
			}
		}
	}

	final public function getAllBy($uid, $what) {
		if($what == "threads") {
			$t = mysql_query("SELECT * FROM `forum_threads` WHERE `byid` = '{$uid}'") or die(mysql_error());
			return $t;
		}else if($what == "posts") {
			$p = mysql_query("SELECT * FROM `forum_posts` WHERE `uid` = '{$uid}'") or die(mysql_error());
			return $p;
		}else if($what == "threads_spam") {
			$ts = mysql_query("SELECT * FROM `forum_threads` WHERE `byid` = '{$uid}' AND `cid` = '6'") or die(mysql_error());
			return $ts;
		}
	}

	final public function getPostCount($uid) {
		if($this->checkForAccount($uid) == true) {
			$threads = $this->getAllBy($uid, "threads");
			$threads_spam = $this->getAllBy($uid, "threads_spam");
			$posts = $this->getAllBy($uid, "posts");
			$posts_spam = $this->getAllBy($uid, "posts_spam");
			
			$count_t = mysql_num_rows($threads);
			$count_ts = mysql_num_rows($threads_spam);
			$count_p = mysql_num_rows($posts);
			//$count_ps = mysql_num_rows($posts_spam);
			$overall = $count_t + $count_p - $count_ts; // - $count_ps;

			// back to updating post count
			$this->updateUser($uid, "post_count", $overall);
			return $overall;
		}
	}

	final public function write_replies($tid) {
		if(empty($tid)) { return; }
		$posts = mysql_query("SELECT * FROM `forum_posts` WHERE `tid` = '{$tid}'") or die(mysql_error());
		while($p = mysql_fetch_array($posts)) {
			$user = $this->getUserById($p['uid']);
			$thread_name = $this->getThreadTitle($tid);

			while($u = mysql_fetch_array($user)) {
				//$this->templateCreate('right-container', $p['uid'], $p['content'], $p['time'], "RE: " . $thread_name, true);
				$this->templateCreate('left-container', $u['uid'], $u['username'], $this->getPostCount($u['uid']), $u['rank'], true);
				$this->templateCreate('right-container', $p['uid'], $this->clearup_decode($p['content']), $p['time'], "RE: " . $thread_name, true);
			}
		}
	}

	final public function write_thread($id, $view) {
		if($view == "thread") {
			$thread = $this->getThread($id);
			if(mysql_num_rows($thread) == 0) { echo $this->displayError(1, true); } else {
				while($data = mysql_fetch_array($thread)) {
					$user = $this->getUserById($data['byid']);

					while($u = mysql_fetch_array($user)) {
						//$this->templateCreate('right-container', $data['byid'], $data['content'], $data['time'], $data['name']);
						$this->templateCreate('left-container', $u['uid'], $u['username'], $this->getPostCount($u['uid']), $u['rank']);
						$this->templateCreate('right-container', $data['byid'], $this->clearup_decode($data['content']), $data['time'], $data['name']);
					}
				}
			}
		}
	}

	final public function write_categories($id, $view) {
		if($id == 0) {
			// Get categories & subforums
	        $categories = mysql_query("SELECT * FROM `forum_categories`") or die(mysql_error());
	        while($cat = mysql_fetch_array($categories)) {
	            if($cat['sub_id'] == 0) {
	                $curcat = $cat['id'];
	                echo "<tr style='width: 100%; height: 30px;'>";
	                echo "<td style='width: 20px;'></td>";
	                echo "<td style='border-bottom: 1px solid #000;'><span style='font-weight: bold;'>{$cat['name']}</span></td>";
	                echo "</tr>";

	                $subcategories = mysql_query("SELECT * FROM `forum_categories` WHERE `sub_id` = '{$curcat}'") or die(mysql_error());
	                $colour[0] = "#e7e7e7"; $colour[1] = "#ffffff"; $count = 0;
	                while($subcat = mysql_fetch_array($subcategories)) {
	                	if($count == 0) { $count = 1; } else if($count == 1) { $count = 0; }
	                    echo "<tr style='padding: 3px; width: 100%; height: 30px; background-color: {$colour[$count]}'>";
	                    echo "<td style='width: 20px;'>-></td>";
	                    echo "<td><span><a href='{url}/forum/f{$subcat['id']}'>{$subcat['name']}</a></span></td>";
	                    echo "</tr>";
	                }
	                $curcat = null;
	            }
	        }
	    }else if($view == "thread") {
	    	$this->write_thread($id, $view);
	    }else if($view == "category") {
	    	$getcategories = mysql_query("SELECT * FROM `forum_categories` WHERE `id` = '{$id}' AND `sub_id` != '0'");
	    	if(mysql_num_rows($getcategories) == 0) { echo $this->displayError(1); } else {
	    	$threads = mysql_query("SELECT * FROM `forum_threads` WHERE `cid` = '{$id}' ORDER BY `time` DESC") or die(mysql_error());
		    	if(mysql_num_rows($threads) == 0) { echo $this->displayError(2); } else {
			    	echo "<tr style='padding: 3px; width: 100%; height: 30px; background-color: #c1c1c1;'>";
		                echo "<td style='width: 20px;'></td>";
		                echo "<td style='width: 605px;'><span style='max-width: 595px; text-overflow: ellipsis; white-space: nowrap; overflow: hidden; display: block;'>Thread Name</span></td>";
		                echo "<td style='padding: 5px; width: 110px; text-align: center;'>Last Replier</td>";
			            echo "<td style='padding: 5px; width: 110px; text-align: center;'>Started By</td>";
			            echo "<td style='padding: 5px; width: 120px;'>Date Posted</td>";
		            echo "</tr>";

		    	// Get threads for the desired category
		    	
			    	$colour[0] = "#e7e7e7"; $colour[1] = "#ffffff"; $count = 0;
		            while($posts = mysql_fetch_array($threads)) {
						if($count == 0) { $count = 1; } else if($count == 1) { $count = 0; }
		                echo "<tr style='padding: 3px; width: 100%; height: 30px; background-color: {$colour[$count]}'>";
		                echo "<td style='width: 20px;'>-></td>";
		                echo "<td style='width: 605px;'><span style='max-width: 595px; text-overflow: ellipsis; white-space: nowrap; overflow: hidden; display: block;'><a href='{url}/forum/thread/{$posts['id']}'>{$posts['name']}</a></span></td>";
		                echo "<td style='padding: 5px; width: 110px; text-align: center;'>" . $this->getUserData($posts['lastreplier_id'], "username") . "</td>";
			            echo "<td style='padding: 5px; width: 110px; text-align: center;'>" . $this->getUserData($posts['byid'], "username") . "</td>";
			            echo "<td style='padding: 5px; width: 120px;'>" . date('H:i d/m/Y', $posts['time']) . "</td>";
		                echo "</tr>";
		            }
		        }
            }
	    }else if($view == "newthread") {
	    	// write design
	    	echo "<form id='newthreadbox' method='post'>";
	    	echo "<tr style='width: 100%; height: 20px;'>";
	    	echo "<td><span>Title</span></td>";
	    	echo "<td><input type='text' id='titlethread' name='titlethread' style='width: 98.75%; height: 20px; padding: 3px;' /></td>";
	    	echo "</tr>";

	    	echo "<tr style='width: 100%; height: 20px;'>";
	    	echo "<td><span>Content</span></td>";
	    	echo "<td>";
	    		echo "<input type='hidden' name='postsent' id='postsent' value='1' />";
				echo "<textarea id='nthreadbox' name='nthreadbox' rows='20' cols='80' style='width: 100%'></textarea>";
				echo "<a onclick='postthread();' class='new-button green-button' style='margin-top: 5px;'><b>Post</b><i></i></a>";
			echo "</td>";
	    	echo "</tr>";
	    	echo "</form>";
	    }
	}

	/*  My Posts */
	final public function listMyPosts($uid) {
		$getThreads = mysql_query("SELECT * FROM `forum_threads` WHERE `byid` = '{$uid}' ORDER BY `lastreplied_time` DESC");
		$colour[0] = "#e7e7e7"; $colour[1] = "#ffffff"; $count = 0;
		while($thread = mysql_fetch_array($getThreads)) {
			if($count == 0) { $count = 1; } else if($count == 1) { $count = 0; }
			echo "<tr name='{$thread['id']}' style='background-color: {$colour[$count]}'>";
				echo "<td style='padding: 5px;'><a href='{url}/forum/thread/{$thread['id']}'>{$thread['name']}</a></td>";
	            echo "<td style='padding: 5px;'>" . date('H:i d/m/Y', $thread['time']) . "</td>";
	            echo "<td style='padding: 5px;'>" . date('H:i d/m/Y', $thread['lastreplied_time']) . "<br />by <strong>" . $this->getUserData($thread['lastreplier_id'], "username") . "</strong></td>";
	            echo "<td style='padding: 5px;'><a href='{url}/forum/f{$thread['cid']}'>{$this->getCategoryName($thread['cid'])}</a></td>";
	        echo "</tr>";
		}
	}

	final public function clearup($string) {
		$string = str_replace("\r\n",'', $string);
		$string = mysql_real_escape_string($string);
		return stripslashes(htmlspecialchars($string));
	}

	final public function clearup_decode($string) {
		$string = str_replace("\r\n",'', $string);
		$string = mysql_real_escape_string($string);
		return stripslashes(htmlspecialchars_decode($string));
	}
}
?>