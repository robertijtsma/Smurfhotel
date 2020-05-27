 <?php 
		if($_SESSION['user']['rank'] >= 5){
?>
		<style>
			th{border-bottom:1px solid #000;}
		</style>
		<table>
		  <tr>
			<th style = "width:100px;">Titel</th>
			<th style = "width:120px;">Überschrift</th>
			<th >Text</th>
			<th >Datum</th>
			<th >ändern</th>
			<th >löschen</th>
		  </tr>
		<?php
			$q = mysql_query("SELECT * FROM cms_news");
				while ($m = mysql_fetch_array($q)) { ?>
		  <tr align = "center">
			<td ><?php echo $m['title']; ?></td>
			<td ><?php echo $m['shortstory']; ?></td>
			<td ><a href = "{url}/index.php?url=news&id=<?php echo $m['id'] ?>">ansehen</a></td>
			<td ><?php echo(date("Y-m-d",$m['published'])); ?></td>
			<td ><a href = "{url}/index.php?url=hk&edit_news&id=<?php echo $m['id']; ?>"><img style = "height:18px;width:18px;" src = "{url}/app/tpl/skins/{skin}/images/edit1.png"></td>
			<td ><a href = "{url}/index.php?url=hk&manage_news&delete&id=<?php echo $m['id']; ?>"><img src = "{url}/app/tpl/skins/{skin}/images/remove.png"></td>
		  </tr>
		  <?php } if(isset($_GET['delete'])){
			$q_ndel = "INSERT INTO hk_logs (type, time, who_done) VALUES('Delete News Article(" . $_GET['id'] . ")','". time() ."','{$_SESSION['user']['username']}')"; // LOG
			
			// Run Queries
			mysql_query("DELETE FROM cms_news WHERE id = '" . $_GET['id'] ."'");
			mysql_query($q_ndel);
			
			//Confirm Alert
			echo('<div class = "alert">Eintrag erfolgreich gelöscht.<meta http-equiv="refresh" content="3;url={url}/index.php?url=hk&manage_news"/></div>');
			} 
		  ?>
		</table>
		<?php } else{die('Go away, this is for admins not noobs.');} ?>