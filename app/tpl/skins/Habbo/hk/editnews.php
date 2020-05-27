<?php
	if($_SESSION["in_hk"] == false){
		header("Location: /me");
			exit();
	}

	$getUseRank4Page = mysql_fetch_assoc(mysql_query("SELECT * FROM `users` WHERE `id` = '".$_SESSION['user']['id']."'"));
	$perms = mysql_fetch_assoc(mysql_query("SELECT * FROM housekeeping_perms WHERE `perm` = 'perm_editnews'"));
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
					<div class="content">
						<div class="module">
							<div class="module-head">
								<h3>Edit News</h3>
							</div>
							<div class="module-body">
								
								<?php
									$id = intval($_GET['id']);
									$existq = mysql_query("SELECT * FROM cms_news WHERE id = '$id'") or die(mysql_error());
									$exist = mysql_num_rows($existq);
									$news = mysql_fetch_array($existq);
									if ($exist == 0) { header('Location: ../me'); }
									if (isset($_POST['submit'])) {
									$title = mysql_real_escape_string($_POST['title']);
									$shortstory = mysql_real_escape_string($_POST['shortstory']);
									$longstory = mysql_real_escape_string($_POST['longstory']);
									$userId = $_SESSION['user']['username'];
									$time = time();
									if (empty($title) OR empty($shortstory) OR empty($longstory)) {
									echo '
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Error</strong> Please fill in all fields!
									</div>';
									} else {
										mysql_query("UPDATE cms_news SET title = '$title', shortstory = '$shortstory', longstory = '$longstory' WHERE id = '$id'") 
								or die(mysql_error());
								header("Refresh:0");
								echo '
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Success!</strong> News article updated. Redirecting you back to the dashboard...
									</div>';
									header( "refresh:3;url=/ase/main" );
									}
								}
								?>
								
								<form name="post_news" method="post" action=" "> 			
							
									<div class="control-group">
										<label class="control-label" for="inputNormal">Normal Input</label>
										<div class="controls">				
											<input type="text" name="title" id="title" value="<?php echo $news['title']; ?>" /> <br />
										</div>
									</div>				
							
									<div class="control-group">
										<label class="control-label" for="inputNormal">News Title</label>
										<div class="controls">				
											<textarea name="shortstory" id="shortstory"><?php echo $news['shortstory']; ?></textarea><br />
										</div>
									</div>
							
									<div class="control-group">
										<label class="control-label" for="inputNormal">Long Story</label>
										<div class="controls">				
											<textarea name="longstory" id="editor1"><?php echo $news['longstory']; ?></textarea>
											<script>
												// THIS IS REQUIRED JAVASCRIPT FOR THE NEWS EDITOR
												CKEDITOR.replace( 'editor1' );
											</script>
										</div>
									</div>
									
									<div class="control-group">
										<button type="submit" class="btn btn-small btn-primary" name="submit">Edit News</button>
									</div>
								</form>
								
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