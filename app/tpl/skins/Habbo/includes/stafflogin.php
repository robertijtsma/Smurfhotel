<?php
// Antiscam protection coded by Marko97
if($_SESSION['user']['id']){
$getuserinfo = mysql_query("SELECT * FROM users WHERE id='".$_SESSION['user']['id']."' LIMIT 1");
while($row = mysql_fetch_array($getuserinfo)){
$staffpin = $row['staffpin'];
}
$LOGIN_INFORMATION = array(
  '' => "{$staffpin}"
);
define('USE_USERNAME', false);
define('LOGOUT_URL', 'http://smurfhotel.nl/logout');
define('TIMEOUT_MINUTES', 30);
define('TIMEOUT_CHECK_ACTIVITY', true);
if(isset($_GET['help'])) {
  die('Include following code into every page you would like to protect, at the very beginning (first line):<br>&lt;?php include("' . str_replace('\\','\\\\',__FILE__) . '"); ?&gt;');
}
$timeout = (TIMEOUT_MINUTES == 0 ? 0 : time() + TIMEOUT_MINUTES * 60);
if(isset($_GET['logout'])) {
  setcookie("verify", '', $timeout, '/');
  header('Location: ' . LOGOUT_URL);
  exit();
}
if(!function_exists('AntiscamProtection')) {
function AntiscamProtection($error_msg) {
?>
<html>
<head>
<link rel="stylesheet" href="/app/tpl/skins/Habbo/includes/stafflogin/stafflogin.css">
  <title>Autenticazione Staff</title>
  <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
  <META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
</head>
<body>
<div modal-render="true" tabindex="-1" role="dialog" class="modal fade in" uib-modal-animation-class="fade" modal-in-class="in" ng-style="{'z-index': 1050 + index*10, display: 'block'}" uib-modal-window="modal-window" index="0" animate="animate" modal-animation="true" style="z-index: 1050; display: block;">
    <div class="modal-dialog ">
<div class="modal-content" uib-modal-transclude="">
<h3 translate="SAFETY_LOCK_TITLE" class="modal__title">Staff Authentication</h3>
<div class="modal__content">
<form ng-submit="unlock()" name="safetyLockForm" novalidate="" class="form ng-pristine ng-invalid ng-invalid-required" style="" method="post">
<p translate="SAFETY_LOCK_ANSWER">In order to login in the game you need to insert your PIN code.</p>
<fieldset class="form__fieldset">
<?php if (USE_USERNAME) echo '<label for="safety-lock-answer1" class="form__label" translate="IDENTITY_SAFETYQUESTION_1"><center>Password</center></label><br /><div class="form__field"><input type="password" class="form__input ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" autocomplete="off" name="access_login" /></div><br><label for="safety-lock-answer2" class="form__label" translate="IDENTITY_SAFETYQUESTION_5"><center>PIN</center></label><br />'; ?>
    <div class="form__field"><input type="password" class="form__input ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" autocomplete="off" name="access_password" /></div><font color="red"><?php echo $error_msg; ?></font><br><div class="form__footer"><input type="submit" class="form__submit" name="Submit" value="LOGIN" /></div>
</form>
</div>
</div>
</div>
</div>
</body>
</html>
<?php
  die();
}
}
if (isset($_POST['access_password'])) {
  $login = isset($_POST['access_login']) ? $_POST['access_login'] : '';
  $pass = $_POST['access_password'];
  if (empty($_POST['access_password']) || !USE_USERNAME && !in_array($pass, $LOGIN_INFORMATION)
  || (USE_USERNAME && ( !array_key_exists($login, $LOGIN_INFORMATION) || $LOGIN_INFORMATION[$login] != $pass ) ) 
  ) {
    AntiscamProtection("<br><b>The PIN are incorrect.");
  }
  else {
    setcookie("verify", md5($login.'%'.$pass), $timeout, '/');
    unset($_POST['access_login']);
    unset($_POST['access_password']);
    unset($_POST['Submit']);
  }
}
else {
  if (!isset($_COOKIE['verify'])) {
    AntiscamProtection("");
  }
  $found = false;
  foreach($LOGIN_INFORMATION as $key=>$val) {
    $lp = (USE_USERNAME ? $key : '') .'%'.$val;
    if ($_COOKIE['verify'] == md5($lp)) {
      $found = true;
      if (TIMEOUT_CHECK_ACTIVITY) {
        setcookie("verify", md5($lp), $timeout, '/');
      }
      break;
    }
  }
  if (!$found) {
    AntiscamProtection("");
  }
}
}
?>