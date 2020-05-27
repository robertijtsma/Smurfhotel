<?php
function filter($var)
	{
		return stripslashes(htmlspecialchars($var));
	}
	
require_once('paypal.class.php');  // include the class file
$p = new paypal_class; 
$p->paypal_url = 'https://www.paypal.com/cgi-bin/webscr';
            
$this_script = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

if (empty($_GET['action'])) $_GET['action'] = 'process';  

switch ($_GET['action']) {
    
   case 'process':
   
   if(!isset($_POST['name']) || !isset($_POST['points']) || !is_numeric($_POST['points']))
   {
	 echo 'username and amount needed for purchase';
	 die;  
   }
   
		$name = filter($_POST['name']);   
		$pertenct = 0.001;
		$points = filter($_POST['points']);
		$total = $pertenct * $points;
		$money = number_format($total, 2, '.', '');
		$paypal = ($money * 0.045 + .30);
		$money3 = $money + $paypal;
		$grand = number_format($money3, 2, '.', '');
      
      $p->add_field('business', 'You@email.com');
      $p->add_field('return', 'http://'.$_SERVER['HTTP_HOST']); //The success URL
	  $p->add_field('custom', $name);
      $p->add_field('cancel_return', 'http://'.$_SERVER['HTTP_HOST']); // The "canceled" URL
      $p->add_field('notify_url', $this_script.'?action=ipn'); //The IPN URL, the URL pointing to THIS page.
	  $p->add_field('item_number', filter($_POST['points']));
      $p->add_field('item_name', $_POST['points'] . ' Points');
      $p->add_field('amount', $grand);

      $p->submit_paypal_post();
      break;
      
      
   case 'ipn':
      
      if ($p->validate_ipn()) {
          
	$host = "localhost";
	$username = "username";
	$password = "password";
	$dbname = "phx";
		 $connect = mysql_connect($host, $username, $password) or die(mysql_error());
mysql_select_db($dbname, $connect) or die("Could not connect to database, error: ".mysql_error());

mysql_query("UPDATE users SET vip_points = vip_points + '".$p->ipn_data['item_number']."' WHERE username = '".$p->ipn_data['custom']."' LIMIT 1");
      }
      break;
 }     

?>