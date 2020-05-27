<?php
	if($_SESSION["in_hk"] == false){
		header("Location: /me");
			exit();
	}

	$getUseRank4Page = mysql_fetch_assoc(mysql_query("SELECT * FROM `users` WHERE `id` = '".$_SESSION['user']['id']."'"));
	$perms = mysql_fetch_assoc(mysql_query("SELECT * FROM housekeeping_perms WHERE `perm` = 'perm_addnews'"));
	if ($perms['rank'] > $getUseRank4Page['rank']){
		header("Location: /ase/main");
		die();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link type="text/css" href="{url}/app/tpl/skins/{skin}/hk/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="{url}/app/tpl/skins/{skin}/hk/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="{url}/app/tpl/skins/{skin}/hk/css/theme.css" rel="stylesheet">
	<link type="text/css" href="{url}/app/tpl/skins/{skin}/hk/images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='https://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="{url}/app/tpl/skins/{skin}/hk/scripts/ckeditor/ckeditor.js"></script>
		<script src="{url}/app/tpl/skins/{skin}/hk/scripts/ckeditor/adapters/jquery.js"></script>
</head>

<body>
	<?php include "includes/header.php"; ?>
		
	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span3">
					<?php include "includes/navigator.php"; ?>
				</div>
					
<div class="span9">
					<div class="alert alert-error" style="margin-left:60px">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong>Attention:</strong> We highly advise that you check which image you want to use before writing an article, we also advise that you make copies of the content you write, just in case.
					</div>
					
				<div class="span9">
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h3>Add News</h3>
							</div>
							<div class="module-body">

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
										echo '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><strong>Error:</strong> You have not entered a title.</div>';
									}
									
									else if(empty($shortstory)){
										echo '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><strong>Error:</strong> You have not entered a short story.</div>';
									}
									
									else if(empty($longstory)){
										echo '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">×</button><strong>Error:</strong> You have not entered a long story.</div>';
									}
									
									else{
										$q = "INSERT INTO cms_news (title, shortstory, longstory, published, image, author) VALUES('{$title}','{$shortstory}','" . htmlspecialchars_decode($longstory) . "'," . time() . ",'{$topstory}','". $_SESSION['user']['username'] ."')";
										$q_nupdate = "INSERT INTO hk_logs (type, time, who_done) VALUES('News Article(" . $_POST['title'] .")','". time() ."','{$_SESSION['user']['username']}')";

										mysql_query($q) or die(mysql_error());
										mysql_query ($q_nupdate);
										echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert">×</button><strong></strong>News article has been posted.</div>';
									}
								}
								else if($_POST['topstory_view']){ ?>
									<p><center><img src="{url}/app/tpl/skins/{skin}/images/web_promo/<?php echo $_POST['topstory']; ?>"></center></p>
								<?php } ?>
								

									<form method="post" class="form-horizontal row-fluid">
										<div class="control-group">
										<label class="control-label" for="basicinput">Title</label>
										<div class="controls">
											<input type="text" name="title" value="<?php echo $_POST['title']?>" placeholder="News Title" class="span8">
										</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="basicinput">Short Story</label>
											<div class="controls">
												<input type="text" name="shortstory" value="<?php echo $_POST['shortstory']?>" placeholder="News Desc" class="span8">
											</div>
										</div>
										
										<div class="control-group">
											<textarea cols="80" id="editor1" rows="10" name="longstory" class="span8"></textarea>
											<script>
												// THIS IS REQUIRED JAVASCRIPT FOR THE NEWS EDITOR
												CKEDITOR.replace( 'editor1' );
											</script>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="basicinput">Author</label>
											<div class="controls">
												<input type="text" class="span8" value="<?php echo $_SESSION['user']['username']; ?>" disabled>
											</div>
										</div>
									
										<div class="control-group">
											<label class="control-label" for="basicinput">Select an Image</label>
												<div class="controls">
													<select name="topstory" id="topstory" style="font-size: 14px;">
													<?php 
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
													?>
													</select>
												</div>
										</div>
										
										<div class="control-group">	
											<div class="controls">	
												<input type="submit" class="btn btn-small btn-primary" name="topstory_view" value="View Image">
												<input type="submit" class="btn btn-small btn-primary" name="news_create">
											</div>
										</div>
									</form>
									<?php }
									else{
										die('Go away please.');
									}
									?>
								
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>

	<?php include "includes/footer.php"; ?>
	
        <script src="{url}/app/tpl/skins/{skin}/hk/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="{url}/app/tpl/skins/{skin}/hk/scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="{url}/app/tpl/skins/{skin}/hk/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="{url}/app/tpl/skins/{skin}/hk/scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="{url}/app/tpl/skins/{skin}/hk/scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="{url}/app/tpl/skins/{skin}/hk/scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="{url}/app/tpl/skins/{skin}/hk/scripts/common.js" type="text/javascript"></script>
</body>