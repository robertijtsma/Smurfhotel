		<?php
		if($_SESSION['user']['rank'] >= 5){

		function secureStr($str) {
			return mysql_real_escape_string(stripslashes(htmlspecialchars($str)));
		}
		if(isset($_POST['news_create'])) {
			$title = secureStr($_POST['title']);
			$shortstory = secureStr($_POST['shortstory']);
			$longstory = secureStr($_POST['longstory']);
			$topstory = secureStr(mysql_real_escape_string($_POST['topstory']));
			
			if(empty($title)){
				echo '<div class = "alert">Gib eine Überschrift an!</div><br>';
			}
			
			else if(empty($shortstory)){
				echo '<div class = "alert">Gib eine Beschreibung ein!</div><br>';
			}
			
			else if(empty($longstory)){
				echo '<div class = "alert">Der Nachrichtentext fehlt</div><br>';
			}
			
			else{
				$q = "INSERT INTO cms_news (title, shortstory, longstory, published, image, author) VALUES('{$title}','{$shortstory}','" . htmlspecialchars_decode($longstory) . "'," . time() . ",'{$topstory}','". $_SESSION['user']['username'] ."')";
				$q_nupdate = "INSERT INTO hk_logs (type, time, who_done) VALUES('News Article(" . $_POST['title'] .")','". time() ."','{$_SESSION['user']['username']}')";

				mysql_query($q) or die(mysql_error());
				mysql_query ($q_nupdate);
				echo "<div class = \"alert\">Der Artikel wurde erstellt</div><br>";
			}
		}
		else if($_POST['topstory_view']){ ?>
			<img style = "width:300px;height:187px;" src = "{url}/app/tpl/skins/Habbo/images/ts/<?php echo $_POST['topstory']; ?>">
		<?php } ?>
		
			<style>
				input{
					height:25px;
					border:1px solid lightgray;
					margin-bottom:5px;
					border-radius:3px;
					text-align:center;
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

			<form method = "post">
			<b>Artikel: </b><input type = "text" name = "title" value = "<?php echo $_POST['title']?>" placeholder = "Überschrift"></br>
			<b>Beschreibung: </b><input type = "text" name = "shortstory" value = "<?php echo $_POST['shortstory']?>" name = "" placeholder = "kurze Einleitung"></br>
			<textarea id = "editor1" type = "text" class = "tinymce" name = "longstory" cols="68" rows="10"><?php echo $_POST['longstory']?></textarea></br>
			<select name="topstory" id="topstory" style="font-size: 14px;">
			<?php 
				if ($handle = opendir('app/tpl/skins/Habbo/images/ts/'))
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
			<input type = "submit" name = "news_create" value = "Speichern">
			</form>
			<script type="text/javascript">
				window.onload = function()
				{
					CKEDITOR.replace(\'editor1\'  );
				};	
			</script>
			<?php }
			else{
				die('kein Zugriff.');
			}
			?>
