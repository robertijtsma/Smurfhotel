<?php 
	if (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) { $_SERVER['HTTP_X_FORWARDED_FOR'] = $_SERVER['HTTP_CF_CONNECTING_IP']; }
	if (!isset($_SESSION['user']['id']) || $_SESSION['user']['rank'] < 5) 
	{ 
		header("Location: ../index");
		die(); 
	} 
	
	$getUseRank4Page = mysql_fetch_assoc(mysql_query("SELECT * FROM `users` WHERE `id` = '".$_SESSION['user']['id']."'"));
	
	// Check if users can access page.
	function getPageRank($a)
	{
		$perms = mysql_fetch_assoc(mysql_query("SELECT * FROM housekeeping_perms WHERE `perm` = '".$a."'"));
		return $perms['rank'];
	}
	
	
	
?>
<div class="sidebar">
	<ul class="widget widget-menu unstyled">
		<li><a href="{url}/ase/main"><i class="menu-icon icon-dashboard"></i>Dashboard</a></li>
	</ul>

		<?php
			if (getPageRank('section_news') <= $getUseRank4Page['rank']){

			echo '<ul class="widget widget-menu unstyled">';	
				
			// Add News
			if (getPageRank('perm_addnews') <= $getUseRank4Page['rank'])
			echo '<li><a href="{url}/ase/addnews"><i class="icon-plus-sign"></i> Add News Article</a></li>';
		
			// Edit News
			if (getPageRank('perm_editnews') <= $getUseRank4Page['rank'])
				echo '<li><a href="{url}/ase/newsview"><i class="icon-edit"></i> Manage Article</a></li>';
			
			echo '</ul>';

			}
		?>

</div>