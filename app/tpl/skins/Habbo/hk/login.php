<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="https://www.w3.org/1999/xhtml">		

	<head>
		
		<link rel="stylesheet" type="text/css" media="screen" href="/app/tpl/skins/{skin}/css/inner_style.css?<?php echo time(); ?>"/>
		
		<script type="text/javascript" src="/app/tpl/skins/{skin}/js/jquery.js?<?php echo time(); ?>"></script>

	</head>




<div id="widthcontain" style="width: 910px;margin: 0 auto;overflow: auto;">







<div id="leftbit" style="float: left;width: 0px;">







<div id="left_content_top">



Login to ArticleHK



</div>



<div id="left_content_mid">


<form class="form-vertical" method="post" action="/ase/login">
						
							<center>
						
							<?php if (isset($template->form->error)) { echo '
								<b>Error - </b> '.$template->form->error.'</br></br>
							'; } ?>
						</br>
									<input class="span12" type="text" id="inputEmail" placeholder="           Username" name="username">
<br></br>
									<input class="span12" type="password" id="inputPassword" placeholder="           Password" name="password">
<br></br>
									<button type="submit" class="btn btn-primary pull-right" name="login">Login</button>
</br>
					</center>		
					</form>

							

</div>


<div id="left_content_bot"></div>

</div>



<div id="rightbit" style="float: right;width: 332px;">



<div id="right_content_top">

Attention!

</div>

<div style="font-size:12px;" id="right_content_mid"><div style="margin-bottom:10px;"></br><center><img src="/app/tpl/skins/{skin}/hk/images/articleHK.png?<?php echo time(); ?>"></center></div><center>


						ArticleHK is strictly for creating, editing or deleting articles only. If anything else such as chatlogs need checking or things such as accounts need editing, then please speak to a higher member of staff whether it be either the management team or the founders. We sincerely thank you for corresponding with Bang Hotel.
						
						</div>

<div id="right_content_bot">


</div>


</body>