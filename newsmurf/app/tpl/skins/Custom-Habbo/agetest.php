<?php
if(is_numeric($_POST['bean_day']) && is_numeric($_POST['bean_month']) && is_numeric($_POST['bean_year']) && isset($_POST['bean_gender'])){

$_SESSION['register'] = '2';
header("Location: $site/register");

} else {

$_SESSION['registererror'] = 'Please use a valid date.';
header("Location: $site/quickregister");

}
?>