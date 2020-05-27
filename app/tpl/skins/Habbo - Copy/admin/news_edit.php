		<?php
		if($_SESSION['user']['rank'] >= 5){
		?>
			<style>
			input{
				height:25px;
				border:1px solid lightgray;
				border-radius:2px;
			}
			
			input[type='submit']{
			background-image:none;
			border:1px solid lightgray;
			line-height:20px;
			}
			.alert{
				height:25px;
				width:100%;
				background-color:#c73c3c;
				text-align:center;
				border-radius:1px;
				line-height:25px;
				color:#fff;
				font-weight:700;	
			}
			</style>
		
			<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
			<script type="text/javascript">
			tinymce.init({
				selector: "textarea",
				plugins: [
					"advlist autolink lists link image charmap print preview anchor",
					"searchreplace visualblocks code fullscreen",
					"insertdatetime media table contextmenu paste"
				],
			toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"

			 });
			</script>
			<?php 
			$q = mysql_query("SELECT * FROM cms_news WHERE id = '" . $_GET['id']."'");
			$lol = mysql_fetch_assoc($q);
			if ($_POST['submit']){
				$title = mysql_real_escape_string($_POST['title']);
				$shortstory = mysql_real_escape_string($_POST['shortstory']);
				$longstory = mysql_real_escape_string($_POST['longstory']);
				$topstory = mysql_real_escape_string($_POST['topstory']);
				
				if(empty($title)){
					echo '<div class = "alert">Überschrift fehlt</div><br>';
				}
				
				else if(empty($shortstory)){
					echo '<div class = "alert">Beschreibung fehlt</div><br>';
				}
				
				else if(empty($longstory)){
					echo '<div class = "alert">Text fehlt</div><br>';
				}
				
				else{
					$q_editn = "INSERT INTO hk_logs (type, time, who_done) VALUES('Edit News(" . $title .")','". time() ."','{$_SESSION['user']['username']}')";

					mysql_query( "UPDATE cms_news SET title = '{$title}', shortstory = '{$shortstory}', longstory = '{$longstory}', image = '{$topstory}' WHERE id = '". $_GET['id'] ."'" );
					mysql_query($q_editn);
					echo "<div class = 'alert'>Artikel wurde erfolgreich geändert</div><br>";
				}
			}
			
			else if($_POST['topstory_view']){ ?>
				<img style = "width:300px;height:187px;" src = "{url}/app/tpl/skins/Habbo/images/ts/<?php echo $_POST['topstory']; ?>">
			<?php } ?>			
			
			<form method = "post">
			<b>Artikel: </b><input type = "text" value = "<?php echo $lol['title']; ?>" name = "title" placeholder = "News Title"></br><br>
			<b>Beschreibung: </b><input type = "text" value = "<?php echo $lol['shortstory']; ?>" name = "shortstory" placeholder = "News Desc"></br><br>
			<textarea type = "text" name = "longstory" cols="68" rows="10"><?php echo $lol['longstory']; ?></textarea></br>
			<b>von: </b><input type = "text" value = "<?php echo $lol['author']; ?>" disabled><br><br>
			<select name="topstory" style="font-size: 14px;">
			<?php 
				if ($handle = opendir('app/tpl/skins/Habbo/images/ts'))
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
			?>
			</select>
			<input type = "submit" name = "topstory_view" value = "Bild anzeigen">
			<input type = "submit" name = "submit" value = "Speichern">
			</form>
			<?php }
			else{
				die('kein Zugriff');
			}
			?>
