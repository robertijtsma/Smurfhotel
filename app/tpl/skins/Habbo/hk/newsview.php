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
									$fetchNews = mysql_query("SELECT * FROM cms_news ORDER BY id DESC");
									while ($news = mysql_fetch_array($fetchNews))
									{
										echo '<table class="table table-striped">';
											echo '<thead>';
												echo '<tr>';
													echo '<th>ID</th>';
													echo '<th>Title</th>';
													echo '<th>Short Story</th>';
													echo '<th>Published On</th>';
													echo '<th>Author</th>';
													echo '<th>Edit</th>';
												echo '</tr>';
											echo '</thead>';
										
											echo '<tbody>';
												echo '<tr>';
													echo '<td width="5%">'. $news['id'] .'</td>';
													echo '<td width="20%">'. $news['title'] .'</td>';
													echo '<td width="25%">'. $news['shortstory'] .'</td>';
													echo '<td width="20%">' . date('l d F', $news['published']) . '</td>';
													echo '<td width="10%">'. $news['author'] .'</td>';
													echo '<td width="10%"><a href="index.php?url=editnews&id='.$news['id'].'" class="btn btn-small btn-primary">Edit</a></td>';
												echo '<tr/>';
											echo '</tbody>';
										echo '</table>';
														
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