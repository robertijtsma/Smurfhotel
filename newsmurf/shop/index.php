<?php
define('IN_INDEX', 1);
require_once 'global.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.js"></script>
<script type="text/javascript" src="js/default.js"></script>
<script type="text/javascript" src="js/tipTip.js"></script>
<script>
$(function(){
	$(".hover").tipTip();
});
</script>
<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css" /> 
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
<link href="css/tiptip.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_CONFIG['cms']['name']; ?>: Points Shop</title>
</head>
<div id="headbox">
<?php if($_SESSION['points']['rank'] >=  $_CONFIG['admin']['add']) { echo ' <img src="images/tools.gif" class="hover" title="Tools!" id="tools-button" />'; } ?>
<img src="images/coins.png" class="hover" title="You have <b id='amount_points'><?php echo $points->getPoints($_SESSION['points']['id']); ?></b> Points!" /><b id="buymore" class="paypal_button">Buy Points</b>
<?php
if($_CONFIG['daily']['rewards'])
{
if(!in_array($_SESSION['points']['id'], $points->getDailyids())) echo '<b id="buymore" class="daily">Daily Reward</b>';
unset($ids);
}
?>
<img src="images/exit.png" class="hover" title="Exit the Shop" style="position:absolute; cursor:pointer; right:50px;" onclick="window.location.href='<?php echo $_CONFIG['cms']['url']; ?>'" />
<div id="button"><img id="button_image" src="images/up.png" title="Close" /></div>
</div>
<div id="headwrap"><img src="images/banner.png" onclick="window.location.href='index.php'" /></div>
<div id="content">
	<div class="container">
    	<div class="wrapper">
        	<div class="grid_24">
        		<div id="tools">
                <div id="tools_msg" style="width:125px; display:none;"></div>
            	<?php if($_SESSION['points']['rank'] >=  $_CONFIG['admin']['add']) include 'pages/tools.php'; ?>
            	</div>
                <div id="tools_add">
            	Add what ever >.>
            	</div>
            </div>
        </div>
    </div>
</div>
<div class="overlay hidden">
		<div class="page hidden">
			<div class="exitbutton"></div>
			<div class="loadPage">
			</div>
		</div>
	</div>
<div id="content">
	<div class="container">
    <div class="wrapper">
    	<div class="grid_9">
        <div class="indent">
        <?php if($_CONFIG['sell']['vip']){ ?>
        	<div class="box1">
            <h3>VIP</h3>
            <?php include 'pages/vip.php'; ?>
            <div style="display:none;" id="msg_vip"></div>
            </div>
            <?php }
			 if($_CONFIG['sell']['credits']){?>
            <div class="box1">
            <h3>Credits</h3>
            <?php include 'pages/credits.php'; ?>
            <div style="display:none;" id="msg_credits"></div>
            </div>
            <?php }
			if($_CONFIG['sell']['pixels']) { ?>
            <div class="box1">
            <h3>Pixels</h3>
            <?php include 'pages/pixels.php'; ?>
            <div style="display:none;" id="msg_pixels"></div>
            </div>
            <?php } ?>
        </div>
        </div>
        <div class="grid_8">
        <?php if($_CONFIG['sell']['furni']){ ?>
            <div class="box1">
            <h3>Rares</h3>
            <?php include 'pages/furni.php'; ?>
            <div style="display:none;" id="msg_furni"></div>
            </div>
            <?php } 
			if($_CONFIG['sell']['badges']){ ?>
        	<div class="box1">
            <h3>Badges</h3>
            <?php include 'pages/badges.php'; ?>
            <div style="display:none;" id="msg_badge"></div>
            </div>
            <?php } ?>
        </div>
        <?php
		if($_CONFIG['sell']['commands']){?>
        <div class="grid_7">
        	<div class="box1">
            <h3>Commands</h3>
            <?php include 'pages/commands.php'; ?>
            <div style="display:none;" id="msg_commands"></div>
            </div>
        </div>
        <?php }?>
    </div>
    </div>
</div>
  <div class="footer-wrap">
    <footer class="container">
    	Points shop by <b><a href="http://www.otaku-studios.com/members/1664831.html">x9751</a></b> @ Otaku-Studios.com &copy; <?php echo $_CONFIG['cms']['name']; ?> Hotel
    </footer>
  </div>
<body>
</body>
<script type="text/javascript">

</script>
</html>