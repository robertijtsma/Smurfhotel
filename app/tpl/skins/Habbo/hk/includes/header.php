<?php 
	if (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) { $_SERVER['HTTP_X_FORWARDED_FOR'] = $_SERVER['HTTP_CF_CONNECTING_IP']; }
	if (!isset($_SESSION['user']['id']) || $_SESSION['user']['rank'] < 5) 
	{ 
		header("Location: ../me");
		die(); 
	} 
	
	function MUS($command, $data = '')
	 {
		 $MUSdata = $command . chr(1) . $data;
		 $socket = @socket_create(AF_INET, SOCK_STREAM, getprotobyname

	('tcp'));
		 @socket_connect($socket, "127.0.0.1", "30001");
		 @socket_send($socket, $MUSdata, strlen($MUSdata), MSG_DONTROUTE);   

		 @socket_close($socket);
	 }
?>
<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
				<i class="icon-reorder shaded"></i></a><a class="brand" href="{url}/ase/main">Article<font color="red">HK</font></a>
			<div class="nav-collapse collapse navbar-inverse-collapse">
				<ul class="nav pull-right">

					<li><a href="{url}/me">Return to {hotelName} Hotel</a></li>
					<li class="nav-user dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							{username}
							<img src="https://www.habbo.nl/habbo-imaging/avatarimage?figure={figure}&direction=3&head_direction=3&gesture=sml&size=s&headonly=1" class="nav-avatar" />
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="{url}/logout">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>