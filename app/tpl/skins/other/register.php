<!DOCTYPE html>
<html>
    <head>
        <title>Habbo Hotel - Make friends, join the fun, get noticed!</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <!-- Style import -->
        <link rel="stylesheet" href="/app/tpl/skins/{skin}/css/common.css">
        <link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,700' rel='stylesheet' type='text/css'>
    </head>
    <body id="home">
        <div class="wrapper">
            <img src="/app/tpl/skins/{skin}/img/habbologo_whiteR.out.png" style="margin-bottom: 10px; margin-top: 80px;">
            <div class="form squared_effect-white">
			<form method="post" id="phase-0-form">
                                    <div id="error-messages-container"><?php if(isset($template->form->error)) { echo '<div class="error-messages-holder"><ul><li><p class="error-message">'.$template->form->error.'</p></li></ul></div>'; } ?></div>
            

    
              
                <input type="text" class="loginForm" placeholder="Enter your username.."value="<?php echo $template->form->reg_username; ?>" name="reg_username" class="text-field" maxlength="32">
        
                <input type="text" class="loginForm"  placeholder="Enter your Email.."name="reg_email" value="<?php echo $template->form->reg_email; ?>" class="text-field" maxlength="48">
            
            

         
                
                <input type="password" class="loginForm" placeholder="Enter new password.." name="reg_password" value="" class="password-field" maxlength="32">
            
                                        <input type="password" placeholder="Re-enter password.."class="loginForm" name="reg_rep_password" value="" class="password-field" maxlength="32">

                                    <input type="submit" class="button" value="Register on {hotelname}" name="register">
                                
                                </form>

				
			</div>
            <a href="/register"><div class="register-button squared_effect-red" style="width: 256px; border-radius: 5px;">Register now</div></a>
			<a href="#"><div class="admin-button squared_effect-blue" style="width: 256px; border-radius: 5px;">Special Access</div></a>
        </div>
		<!--<div class="wrapper">
			<div class="form squared_effect-white">
				This is a twitter widget
			</div>
		</div>-->
    </body>
</html>
