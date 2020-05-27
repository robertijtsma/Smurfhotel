<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>{hotelName} - Raum der Woche</title>
        
        <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/common.css" type="text/css">
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/libs2.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/visual.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/libs.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/common.js"></script>
        <script type="text/javascript" src="{url}/app/tpl/skins/Habbo/js/fullcontent.js"></script>
        
        <script type="text/javascript">
            document.habboLoggedIn = true;
            var habboName = "{username}";
            var habboId = {userid};
            var habboReqPath = "";
            var habboStaticFilePath = "{url}/app/tpl/skins/Habbo";
            var habboImagerUrl = "http://www.habbo.com/habbo-imaging/";
            var habboPartner = "";
            var habboDefaultClientPopupUrl = "{url}/client";
            window.name = "habboMain";
            if (typeof HabboClient != "undefined") {
                HabboClient.windowName = "eac955c8dbc88172421193892a3e98fc7402021a";
                HabboClient.maximizeWindow = true;
            }
        </script>
        
      <link rel="stylesheet" href="{url}/app/tpl/skins/Habbo/styles/design.css" type="text/css">
</head>
    
<body>
 <div class='header'>
  <div class='circle'>{online}</div>
  <div class='headerimage'></div>
  <div class='logo'></div>
 </div>
 <div class='naviarea'>
  <div class='navi'>
	<h><a href="{url}/">Startseite</a></h>
	<h><a href="{url}/community">Community</a></h>
	<h><a href="{url}/staff">Mitarbeiter</a></h>
	<?php if(mysql_result(mysql_query("SELECT rank FROM users WHERE id = '" . $_SESSION['user']['id'] . "'"), 0) >= 4) { ?><h><a href="{url}/hk">HK</a></h><?php } ?>
	<a href="{url}/client">
	 <div class='client'>Client<img src="{url}/app/tpl/skins/Habbo/images/client.png"></div>
	</a>
  </div>
 </div>
 <div class='subnaviarea'>
  <div class='subnavi'>
	<a href="{url}/community"><div class='chosen'>Top 10</div></a><div class='chosen'>I</div>
	<a href="{url}/rdw">Raum der Woche</a>
  </div>
 </div>
 <div class='content'>
           <div id="container">
                <div id="content" style="position: relative" class="clearfix">
                    <div id="column1" class="column">
                        <div class="habblet-container ">
                            <div class="cbb clearfix blue ">
                                <h2 class="title">Trage deinen Raum ein:</h2>
                                <div style="padding:5px">
									<?php
									$check = mysql_query("SELECT NULL FROM rotw_entries WHERE username = '".$_SESSION['user']['username']."'");
									if(mysql_num_rows($check) < $limit_rooms){
										if(isset($_POST['id'])){
											if(is_numeric($_POST['id'])){
												$sql = mysql_query("SELECT caption, description, state FROM rooms WHERE owner = '".$_SESSION['user']['username']."' AND id = '".$_POST['id']."' LIMIT 1");
												if(mysql_num_rows($sql)){
													$row = mysql_fetch_array($sql);
													mysql_query("INSERT INTO rotw_entries VALUES ('".$_POST['id']."', '".$_SESSION['user']['username']."', '".$row['caption']."', '".$row['description']."', '".$row['state']."')");
													echo $txt_succes;
												}else{
													echo $txt_not_your_room;
												}
											}else{
												echo $txt_h4x;
											}
										}else{
											?>
											<form method="post">
												<table style="font-size:11px;" width="100%">
													<tr>
														<td width="10%"></td>
														<td width="40%"><b>Raumname</b></td>
														<td width="5%"></td>
														<td width="40"><i>Beschreibung</i></td>
														<td width="5%"></td>
													</tr>
															
													<?php
													$rooms = mysql_query("SELECT id, caption, state, description FROM rooms WHERE owner = '".$_SESSION['user']['username']."'");
													while($room = mysql_fetch_array($rooms)){
														echo "
															<tr>
																<td><img src=\"/app/tpl/skins/Habbo/images/rooms/room_icon_".$room['state'].".gif\" alt=\"".$room['state']."\" valign=\"middle\" /></td>
																<td><b>".$room['caption']."</b>
																<td> - </td> 
																<td><i>".$room['description']."</i></td>
																<td><input type=\"radio\" name=\"id\" value=\"".$room['id']."\" /></td>
															</tr>
														";
													}
													?>
												</table>
												<br />
												<div class="article-body">
													<input type="submit" name="submit" value="Raum eintragen" />
												</div>
											</form>
											<?php
										}
									}else{
										echo $txt_already_entered;
									}
									?>
								</div>
                            </div>
                        </div>
						<?php
						if($_SESSION['user']['rank'] >= 6){
						?>
						<div class="habblet-container ">
                            <div class="cbb clearfix blue ">
                                <h2 class="title">Sieger ausw&auml;hlen:</h2>
                                <div style="padding:5px">
									<form method="post">
										<?php
											if(isset($_POST['winners'])){
												$winners = explode(',', $_POST['winners']);
												$i = 1;
												foreach($winners as $win){
													if($i <= 3){
														$win = mysql_real_escape_string($win);
														$info = mysql_fetch_array(mysql_query("SELECT * FROM rotw_entries WHERE room_id = '".$win."'"));
														mysql_query("UPDATE rotw_winners SET username = '".$info['username']."', name='".$info['room_name']."', description='".$info['room_description']."' WHERE place = '".$i."'");
													}
													$i++;
												}
											}
										?>
										<table style="font-size:11px;" width="100%">
											<tr>
												<td width="10%"></td>
												<td width="15%"><u>Besitzer</u></td>
												<td width="30%"><b>Raumname</b></td>
												<td width="5%"></td>
												<td width="35"><i>Beschreibung</i></td>
												<td width="5%">ID</td>
											</tr>
											<?php
												$rooms = mysql_query("SELECT * FROM rotw_entries");
												while($room = mysql_fetch_array($rooms)){
													echo "
															<tr>
																<td><img src=\"/app/tpl/skins/Habbo/images/rooms/room_icon_".$room['state'].".gif\" alt=\"".$room['state']."\" valign=\"middle\" /></td>
																<td><u>".$room['username']."</u></td>
																<td><b>".$room['room_name']."</b></td>
																<td> - </td> 
																<td><i>".$room['room_description']."</i></td>
																<td>".$room['room_id']."</td>
															</tr>
														";
												}
											?>
										</table>
										Gewinner: <input type="text" value="1,2,3" name="winners" />
										<input type="submit" name="submit" value="Submit Winners!" />
									</form>
								</div>
                            </div>
                        </div>
						<?php
						}
						?>
                        <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
                    </div>
                    <div id="column2" class="column">
                        <div class="habblet-container ">
                            <div class="cbb clearfix blue ">
                                <h2 class="title">Was ist der Raum der Woche?</h2>
                                <div style="padding:5px">
									Beim Raum der Woche handelt es sich um ein Event, bei welchem jede Woche aufs neue die besten Raumbauer gesucht werden.<br />
									Jede Woche wird von unserem Eventmanager ein neues Thema bekannt gegeben, um dem gebauten eine Richtung zu geben.<br />
									Jede Woche hast du die Chance auf ein neues, einzigartiges Ultrarare! <br />
									Du kannst jede Woche nur <?php echo $limit_rooms; ?> Raum<?php if($limit_rooms > 1){ echo "s"; } ?> eintragen. <br />
									<br><br>
								</div>
                            </div>
                        </div>
						<div class="habblet-container ">
                            <div class="cbb clearfix blue ">
                                <h2 class="title">Sieger der letzten Woche:</h2>
                                <div style="padding:5px">
									<b>Hier sind die Gewinner aufgelistet:</b><br /><br />
									<?php
										$query = mysql_query('SELECT * FROM rotw_winners ORDER BY place ASC LIMIT 3');
										while($row = mysql_fetch_array($query)){
											echo '<img src="/app/tpl/skins/Habbo/images/rooms/'.$row['place'].'.gif" valign="middle" />'.$row['username'].' : <b>'.$row['name'].'</b> - <i>'.$row['description'].'</i><br />';
										}
									?>
								</div>
                            </div>
                        </div>
						<?php
							if($_SESSION['user']['rank'] >= 6){
							?>
							<div class="habblet-container ">
								<div class="cbb clearfix blue ">
									<h2 class="title">Eintr&auml;ge l&ouml;schen</h2>
									<div style="padding:5px">
										<b>Mit diesem Button kannst du alle bisherigen Eintr&auml;ge l&ouml;schen:</b><br /><br />
										<?php
											if(isset($_POST['delete_em_all'])){
												mysql_query("TRUNCATE rotw_entries");
												echo $txt_delete_em_all;
											}
										?>
										<form method="post"><input type="submit" name="delete_em_all" value="Tabelle Leeren!" /></form>
									</div>
								</div>
							</div>
							<?php
						}
						?>
                    </div>
                </div>
            </div>
        </div>			
				<script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
				
            <script type="text/javascript">
                document.observe('dom:loaded', function() {
                    CurrentRoomEvents.init();
                });
            </script>
        </div>

        <script type="text/javascript">if (!$(document.body).hasClassName('process-template')) { Rounder.init(); }</script>
        <script type="text/javascript">
            HabboView.run();
        </script>
		
		
		
        <!--[if lt IE 7]>
            <script type="text/javascript">
                Pngfix.doPngImageFix();
            </script>
        <![endif]-->
        
        <div id="footer" >
			<?php include('includes/footer.php'); ?>
			<?php include('includes/checktheban.php'); ?>
        </div>
    
    </body>
</html>
