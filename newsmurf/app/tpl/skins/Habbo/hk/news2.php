  <div id="main">
    <div id="links"></div>
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the color of the logo text -->
          <h1>ASE</h1>
        </div>
      </div>
    </div>
    <div id="site_content">
      <div id="sidebar_container">
        <!-- insert your sidebar items here -->
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
           <br />
		   [ <a href='dash'>Return to Dashboard</a> ] [ <a href='logout'>Log out</a> ]<br /> <br />
            <p>
			<?php
			global $engine;
			if($engine->query("SELECT rank FROM users WHERE id = ".$_SESSION['user']['id']." LIMIT 1")->fetchColumn() >= 7)
			{ ?>
			Player Management <br /> <img src='../app/tpl/skins/<?php echo $_CONFIG['template']['style']; ?>/hk/images/line.png'> <br />
			&raquo; <a href='edit'>Edit a users account</a> <br />
			<br />
			Administration <br /> <img src='../app/tpl/skins/<?php echo $_CONFIG['template']['style']; ?>/hk/images/line.png'> <br />
			&raquo; <a href='news'>Post news article</a><br />
			<br />
			<?php } if($engine->query("SELECT rank FROM users WHERE id = '" . $_SESSION['user']['id'] . "' LIMIT 1")->fetchColumn() >= 5) { ?>
			Moderation <br /> <img src='../app/tpl/skins/<?php echo $_CONFIG['template']['style']; ?>/hk/images/line.png'> <br />
			&raquo; <a href='banlist'>Ban List</a> <br />
			&raquo; <a href='ip'>IP lookup</a> <br />
			<br />
			
			<?php } ?>
			<br />
			Statistics<br />
			<img src='../app/tpl/skins/<?php echo $_CONFIG['template']['style']; ?>/hk/images/line.png'> <br />
					Server Status: 
			{status} <br />
			{online} user(s) online <br />
	
			</p>
          </div>
          <div class="sidebar_base"></div>
        </div>
      </div>
      <div id="content_container">

        <div id="content">
          <!-- insert the page content here -->
          <br />         
<?php

if(!isset($_SESSION["longstory"]))
{
	header("Location: ".$_CONFIG['hotel']['url']."/ase/news");
	exit;
}

if(isset($_POST["proceed"]))
{
	$author = $engine->query("SELECT username FROM users WHERE id = '".$_SESSION['user']['id']."' LIMIT 1")->fetchColumn();
	$engine->query("INSERT INTO cms_news (title,shortstory,longstory,published,image,author) VALUES ('" . $_SESSION["title"] . "', '" . $_SESSION["shortstory"] . "', '" . $_SESSION["longstory"] . "', '" . time() . "', '" . $_POST["topstory"] . "', '" . $author . "')") or die();
	unset($_SESSION["title"], $_SESSION["shortstory"], $_SESSION["longstory"]);
	header("Location: ".$_CONFIG['hotel']['url']."/ase/");
	exit;
}
	echo '<center><b>It\'s time to choose the image for your story. Choose one from the drop down list and click "Check Image"';
	echo '<form method="post">';
	echo '<br />';
	echo '<select name="topstory" id="topstory" style="font-size: 14px;"';
	
	if ($handle = opendir('ts/'))
	{	
		while (false !== ($file = readdir($handle)))
		{
			if ($file == '.' || $file == '..')
			{
				continue;
			}	
	
			echo '<option value="' . $file . '"';
	
			if (isset($_POST['topstory']) && $_POST['topstory'] == $file)
			{
				echo ' selected';
			}
			
			echo '>' . $file . '</option>';
		}
	}

	echo '</select>';
	
	if(isset($_POST["check"]))
	{
		echo '<br /> <br /> <input type="submit" value="  Check image  " name="check" /> <br /><br />';
		echo '<font size="3">Topstory image<br /></font><img src="ts/' . $_POST["topstory"] . '" align="right />';
		echo '</center> <align="right"> <br /> <br /> <input type="submit" value="  Proceed (use image)  " name="proceed" /> <br />';
		echo '</form>';
	}
	else
	{
		echo '<br /> <br /> <input type="submit" value="  Check image  " name="check" /> <br />';
		echo "</form>";
	}

?>
